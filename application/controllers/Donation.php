<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Donation extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->helper(array('form', 'url'));  
    	$this->load->library(array('session', 'form_validation', 'email', 'cart')); 
		// $this->load->library('cart');
		$this->load->model('keranjang_model');
	}

	public function index()
	{
		$kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['produk'] = $this->keranjang_model->get_produk_kategori($kategori);
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/list_yayasan',$data);
		$this->load->view('themes/footer');

	}
	public function tampil_cart()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/tampil_cart',$data);
		$this->load->view('themes/footer');

	}

	public function tampil_cart_brg()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/tampil_cart_brg',$data);
		$this->load->view('themes/footer');
	}

	public function tampil_cart_jasa()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/tampil_cart_jasa',$data);
		$this->load->view('themes/footer');
	}
	
	public function check_out()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/check_out',$data);
		$this->load->view('themes/footer');
      // if($cart = $this->cart->destroy()) {
      //     $this->sendemail($email, $saltid);
      // }
		
	}

	public function check_out_brg()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/check_out_brg',$data);
		$this->load->view('themes/footer');
		// return $this->cart->destroy();

	}

	public function check_out_jasa()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/check_out_jasa',$data);
		$this->load->view('themes/footer');
		// return $this->cart->destroy();
	}
	
	public function detail_yayasan()
	{
		$id=($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$data['detail'] = $this->keranjang_model->get_produk_id($id)->row_array();
		$this->load->view('donasi',$data);
		$this->load->view('donation/detail_yayasan',$data);
		$this->load->view('themes/footer');
	}
	
	
	function tambah()
	{
		$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('jml'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->cart->insert($data_produk);
		redirect('donation/check_out');
	}

	function tambah_uang()
	{
		$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('jml'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->cart->insert($data_produk);
		redirect('donation/check_out');
	}

	function tambah_brg()
	{
		$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('jml'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->cart->insert($data_produk);
		redirect('donation/check_out_brg');
	}

	function tambah_jasa()
	{
		$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('jml'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->cart->insert($data_produk);
		redirect('donation/check_out_jasa');
	}


	function hapus($rowid) 
	{
		if ($rowid=="all")
			{
				$this->cart->destroy();
			}
		else
			{
				$data = array('rowid' => $rowid,
			  				  'qty' =>0);
				$this->cart->update($data);
			}
		redirect('donation/tampil_cart');
	}

	function ubah_cart()
	{
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$gambar = $cart['gambar'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];
			$data = array('rowid' => $rowid,
							'price' => $price,
							'gambar' => $gambar,
							'amount' => $amount,
							'qty' => $qty);
			$this->cart->update($data);
		}
		redirect('donation/tampil_cart');
	}

	public function proses_order()
	{

		//-------------------------Input data pelanggan--------------------------
	$this->form_validation->set_rules('nm_donatur', 'Nama Donatur', 'required');
    $this->form_validation->set_rules('jml_uang', 'Jumlah Uang', 'required');  
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('no_telp', 'No. Telp', 'required');  
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
        
      //$this->form_validation->set_message('is_unique', 'This %s is already exits');  
      if ($this->form_validation->run() == FALSE)  
      {  
      	$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/check_out',$data);
		$this->load->view('themes/footer');  
      }  
      else  
      {  
        $nm_donatur = $_POST['nm_donatur'];
        $jml_uang = $_POST['jml_uang']; 
        $alamat = $_POST['alamat']; 
        $no_telp = $_POST['no_telp'];  
        $email = $_POST['email'];    
        //md5 hashing algorithm to decode and encode input password  
        //$salt    = uniqid(rand(10,10000000),true);  
     $saltid   = md5($email);  
     $status   = 0;  
     $data_pelanggan = array('nm_donatur' => $this->input->post('nm_donatur'),
							'jml_uang' => $this->input->post('jml_uang'),
							'alamat' => $this->input->post('alamat'),
							'no_telp' => $this->input->post('no_telp'),
							'email' => $this->input->post('email'),
							'status' => $status);
		$id_pelanggan = $this->keranjang_model->insertuser($data_pelanggan);
		//-------------------------Input data order------------------------------
		
		$data_order = array('tanggal' => date('Y-m-d'),
					   		'pelanggan' => $id_pelanggan);

		$id_order = $this->keranjang_model->tambah_donasi($data_order);
		//-------------------------Input data detail order-----------------------		
	if ($cart = $this->cart->contents())  
     {  
     	foreach ($cart as $item)
					{
						$data_detail = array('order_id' =>$id_order,
										'yayasan' => $item['id'],
										'qty' => $item['qty'],
										'jml' => $item['price']);			
						$proses = $this->keranjang_model->tambah_detail_donasi($data_detail);
					}
      if($this->sendemail($email, $saltid))  
      {  
       // successfully sent mail to user email  
		//-------------------------Hapus donation cart--------------------------		
		$this->cart->destroy();
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/sukses',$data);
		$this->load->view('themes/footer'); 
      }  
      else  
      {  
       $this->session->set_flashdata('msg','<div align="center" class="alert alert-danger text-center" >Silahkan coba lagi...</div>');  
            redirect('donation/sukses');  
          }  
     }  
     else  
     {  
      $this->session->set_flashdata('msg','<div align="center" class="alert alert-danger text-center" >Terjadi Kesalahan, silahkan coba lagi...</div>');  
            redirect('donation/sukses');  
     }  
      }  

	}

	public function proses_order_brg()
	{

	$this->form_validation->set_rules('nm_pengirim', 'Nama Donatur', 'required');
    $this->form_validation->set_rules('nm_brg', 'Nama Barang', 'required');  
    $this->form_validation->set_rules('jml_brg', 'Jumlah Barang', 'required');  
    $this->form_validation->set_rules('no_telp', 'No. Telp', 'required');  
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');  
        
      //$this->form_validation->set_message('is_unique', 'This %s is already exits');  
      if ($this->form_validation->run() == FALSE)  
      {  
      	$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/check_out_brg',$data);
		$this->load->view('themes/footer');  
      }  
      else  
      {  
        $nm_pengirim = $_POST['nm_pengirim'];
        $nm_barang = $_POST['nm_brg']; 
        $jml_brg = $_POST['jml_brg']; 
        $no_telp = $_POST['no_telp'];  
        $email = $_POST['email'];    
        //md5 hashing algorithm to decode and encode input password  
        //$salt    = uniqid(rand(10,10000000),true);  
     $saltid   = md5($email);  
     $status   = 0;  
     $data_pelanggan = array('nm_pengirim' => $this->input->post('nm_pengirim'),
							'nm_brg' => $this->input->post('nm_brg'),
							'jml_brg' => $this->input->post('jml_brg'),
							'no_telp' => $this->input->post('no_telp'),
							'email' => $this->input->post('email'),
							'status' => $status);
		$id_pelanggan = $this->keranjang_model->insertuser_brg($data_pelanggan);
		//-------------------------Input data order------------------------------
		
		$data_order = array('tanggal' => date('Y-m-d'),
					   		'pelanggan' => $id_pelanggan);

		$id_order = $this->keranjang_model->tambah_donasi($data_order);
		//-------------------------Input data detail order-----------------------		
	if ($cart = $this->cart->contents())  
     {  
     	foreach ($cart as $item)
					{
						$data_detail = array('order_id' =>$id_order,
										'yayasan' => $item['id'],
										'qty' => $item['qty'],
										'jml' => $item['price']);			
						$proses = $this->keranjang_model->tambah_detail_donasi($data_detail);
					}
      if($this->sendemail_brg($email, $saltid))  
      {  
       // successfully sent mail to user email  
		//-------------------------Hapus donation cart--------------------------		
		$this->cart->destroy();
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/sukses',$data);
		$this->load->view('themes/footer'); 
      }  
      else  
      {  
       $this->session->set_flashdata('msg','<div align="center" class="alert alert-danger text-center" >Silahkan coba lagi...</div>');  
            redirect('donation/sukses');  
          }  
     }  
     else  
     {  
      $this->session->set_flashdata('msg','<div align="center" class="alert alert-danger text-center" >Terjadi Kesalahan, silahkan coba lagi...</div>');  
            redirect('donation/sukses');  
     }  
      } 

	}

	public function proses_order_jasa()
	{

	$this->form_validation->set_rules('nm_lengkap', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('usia', 'Usia', 'required');  
    $this->form_validation->set_rules('pend_akhir', 'Jumlah Barang', 'required'); 
    $this->form_validation->set_rules('alamat' , 'Alamat', 'required'); 
    $this->form_validation->set_rules('no_telp', 'No. Telp', 'required');  
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');  
        
      //$this->form_validation->set_message('is_unique', 'This %s is already exits');  
      if ($this->form_validation->run() == FALSE)  
      {  
      	$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/check_out_jasa',$data);
		$this->load->view('themes/footer');  
      }  
      else  
      {  
        $nm_lengkap = $_POST['nm_lengkap'];
        $usia = $_POST['usia']; 
        $pend_akhir = $_POST['pend_akhir'];
        $alamat = $_POST['alamat']; 
        $no_telp = $_POST['no_telp'];  
        $email = $_POST['email'];    
        //md5 hashing algorithm to decode and encode input password  
        //$salt    = uniqid(rand(10,10000000),true);  
     $saltid   = md5($email);  
     $status   = 0;  
       $data_pelanggan = array('nm_lengkap' => $this->input->post('nm_lengkap'),
							'usia' => $this->input->post('usia'),
							'pend_akhir' => $this->input->post('pend_akhir'),
							'alamat' => $this->input->post('alamat'),
							'no_telp' => $this->input->post('no_telp'),
							'email' => $this->input->post('email'),
							'status' => $status);
		$id_pelanggan = $this->keranjang_model->insertuser_jasa($data_pelanggan);
		//-------------------------Input data order------------------------------
		
		$data_order = array('tanggal' => date('Y-m-d'),
					   		'pelanggan' => $id_pelanggan);

		$id_order = $this->keranjang_model->tambah_donasi($data_order);
		//-------------------------Input data detail order-----------------------		
	if ($cart = $this->cart->contents())  
     {  
     	foreach ($cart as $item)
					{
						$data_detail = array('order_id' =>$id_order,
										'yayasan' => $item['id'],
										'qty' => $item['qty'],
										'jml' => $item['price']);			
						$proses = $this->keranjang_model->tambah_detail_donasi($data_detail);
					}
      if($this->sendemail_jasa($email, $saltid))  
      {  
       // successfully sent mail to user email  
		//-------------------------Hapus donation cart--------------------------		
		$this->cart->destroy();
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/sukses',$data);
		$this->load->view('themes/footer'); 
      }  
      else  
      {  
       $this->session->set_flashdata('msg','<div align="center" class="alert alert-danger text-center" >Silahkan coba lagi...</div>');  
            redirect('donation/sukses');  
          }  
     }  
     else  
     {  
      $this->session->set_flashdata('msg','<div align="center" class="alert alert-danger text-center" >Terjadi Kesalahan, silahkan coba lagi...</div>');  
            redirect('donation/sukses');  
     }  
      } 
	
	}

	public function sukses()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/sukses',$data);
		$this->load->view('themes/footer');
	}

	public function konfirmasi()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('donasi',$data);
		$this->load->view('donation/konfirmasi',$data);
		$this->load->view('themes/footer');
	}

	function sendemail($email,$saltid){  
    // configure the email setting  
    $config['protocol'] = 'smtp';  
      $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name  
      $config['smtp_port'] = '465'; //smtp port number  
      $config['smtp_user'] = 'rameinajaweb@gmail.com';  
      $config['smtp_pass'] = 'RameinajaUdah'; //$from_email password  
      $config['mailtype'] = 'html';  
      $config['charset'] = 'iso-8859-1';  
      $config['wordwrap'] = TRUE;  
      $config['newline'] = "\r\n"; //use double quotes  
      $this->email->initialize($config);  
      $url = site_url()."/donation/confirmation/".$saltid;  
      $this->email->from('rameinajaweb@gmail.com', 'RaMe');  
    $this->email->to($email);   
    $this->email->subject('Thank You.');  
    $message = "<html><head><head></head><body><p>Hi,</p><p>Terima kasih untuk donasinya.</p><p>Silahkan lakukan pembayaran ke rekening berikut ini <b>0413581043</b> an <b>IRSALINA IDZNI</b></p><p>Silahkan klik link di bawah ini jika anda sudah melakukan pembayaran untuk mengkonfirmasi pembayaran Anda.</p>".$url."<br/><p>Sincerely,</p><p>RaMe Team</p></body></html>";  
    $this->email->message($message); 
    return $this->email->send();  
    }  
    public function confirmation($key)  
    {  
      if($this->keranjang_model->verifyemail($key))  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center" align="center">Email Anda Berhasil Diverifikasi!</div>');  
        redirect('donation/konfirmasi');  
      }  
      else  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" align="center">Verifikasi Email Anda Gagal. Silahkan coba beberapa saat lagi...</div>');  
        redirect('donation/check_out');  
      }  
    } 
	

	function sendemail_brg($email,$saltid){  
    // configure the email setting  
    $config['protocol'] = 'smtp';  
      $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name  
      $config['smtp_port'] = '465'; //smtp port number  
      $config['smtp_user'] = 'rameinajaweb@gmail.com';  
      $config['smtp_pass'] = 'RameinajaUdah'; //$from_email password  
      $config['mailtype'] = 'html';  
      $config['charset'] = 'iso-8859-1';  
      $config['wordwrap'] = TRUE;  
      $config['newline'] = "\r\n"; //use double quotes  
      $this->email->initialize($config);  
      $url = site_url()."/donation/confirmation_brg/".$saltid;  
      $this->email->from('rameinajaweb@gmail.com', 'RaMe');  
    $this->email->to($email);   
    $this->email->subject('Thank You.');  
    $message = "<html><head><head></head><body><p>Hi,</p><p>Terima kasih untuk donasinya.</p><p>Silahkan klik link di bawah ini untuk mengkonfirmasi Donasi Anda.</p>".$url."<br/><p>Sincerely,</p><p>RaMe Team</p></body></html>";  
    $this->email->message($message); 
    return $this->email->send();  
    }  
    public function confirmation_brg($key)  
    {  
      if($this->keranjang_model->verifyemail_brg($key))  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center" align="center">Email Anda Berhasil Diverifikasi!</div>');  
        redirect('donation/konfirmasi');  
      }  
      else  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" align="center">Verifikasi Email Anda Gagal. Silahkan coba beberapa saat lagi...</div>');  
        redirect('donation/check_out');  
      }  
    } 


    function sendemail_jasa($email,$saltid){  
    // configure the email setting  
    $config['protocol'] = 'smtp';  
      $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name  
      $config['smtp_port'] = '465'; //smtp port number  
      $config['smtp_user'] = 'rameinajaweb@gmail.com';  
      $config['smtp_pass'] = 'RameinajaUdah'; //$from_email password  
      $config['mailtype'] = 'html';  
      $config['charset'] = 'iso-8859-1';  
      $config['wordwrap'] = TRUE;  
      $config['newline'] = "\r\n"; //use double quotes  
      $this->email->initialize($config);  
      $url = site_url()."/donation/confirmation_jasa/".$saltid;  
      $this->email->from('rameinajaweb@gmail.com', 'RaMe');  
    $this->email->to($email);   
    $this->email->subject('Thank You.');  
    $message = "<html><head><head></head><body><p>Hi,</p><p>Terima kasih untuk donasinya.</p><p>Silahkan klik link di bawah ini untuk mengkonfirmasi Donasi Anda.</p>".$url."<br/><p>Sincerely,</p><p>RaMe Team</p></body></html>";  
    $this->email->message($message); 
    return $this->email->send();  
    }  
    public function confirmation_jasa($key)  
    {  
      if($this->keranjang_model->verifyemail_jasa($key))  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center" align="center">Email Anda Berhasil Diverifikasi!</div>');  
        redirect('donation/konfirmasi');  
      }  
      else  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" align="center">Verifikasi Email Anda Gagal. Silahkan coba beberapa saat lagi...</div>');  
        redirect('donation/check_out');  
      }  
    } 
}
?>