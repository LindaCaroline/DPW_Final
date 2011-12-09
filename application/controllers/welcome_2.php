<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_2 extends CI_Controller {

	public function index()
	{		
		$data['title']="Beranda";		
		$this->load->view('view_home',$data);
	}
	
	public function kadorama()
	{		
		$data['title']="Kadorama";		
		$this->load->view('view_kadorama',$data);
	}
	
	public function dorama()
	{		
		$data['title']="Dorama";		
		$this->load->view('view_dorama',$data);
	}
	
	public function about()
	{
		$data['title']="Tentang Penulis";
		$data['heading']="Howard G. Hendricks";
		$this->load->view('view_about',$data);
	}
	
	public function babyandme()
	{
		$data['title']="Kadorama";
		$data['heading']="Baby & Me";
		$this->load->view('view_babyandme',$data);
	}
	
	public function promises()
	{
		$data['title']="Dorama";
		$data['heading']="10 Promises To My Dog";
		$this->load->view('view_10Promises',$data);
	}
	
	public function endlessLove()
	{
		$data['title']="Kadorama";
		$data['heading']="EndLess Love";
		$this->load->view('view_EndlessLove',$data);
	}
	
	public function Litter()
	{
		$data['title']="Dorama";
		$data['heading']="1 Litter Of Tears";
		$this->load->view('view_1Litter',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>