<?php
class UsersController extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
	}

	public function login()
	{
		
		if($this->input->post('login'))
		{
			$e=$this->input->post('email');
			$p=$this->input->post('pass');
	
			$que=$this->db->query("select * from users where email='".$e."' and password='$p'");
			$row = $que->num_rows();
			if($row)
			{
			redirect('UsersController/dashboard');
			}
			else
			{
		$data['error']="<h3 style='color:red'>Invalid login details</h3>";
			}	
		}
		$this->load->view('login',@$data);		
	}
	
	function dashboard()
	{
	$this->load->view('dashboard');
	}
}
?>