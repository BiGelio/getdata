<?php
class UsersController extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
	}

function index()
	{
		$this->load->view('user_registration');
	}
public function register()
	{
		
		if($this->input->post('register'))
		{
		$n=$this->input->post('name');
		$e=$this->input->post('email');
		$p=$this->input->post('pass');
		$m=$this->input->post('mobile');
		$pos=$this->input->post('position');
		
		$que=$this->db->query("select * from users where email='".$e."'");
		$row = $que->num_rows();
		if($row)
		{
		$data['error']="<h3 style='color:red'>This user already exists</h3>";
		}
		else
		{
		$que=$this->db->query("insert into users (full_name,email,phone,position,password) values('$n','$e','$m','$pos','$p')");
		
		$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
		}			
				
		}
	$this->load->view('user_registration',@$data);	
	}

	public function login()
	{
		$this->load->helper('url');
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