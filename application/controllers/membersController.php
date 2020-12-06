<?php
class MembersController extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load Model
	$this->load->model('MembersModel');

	$this->load->helper('url');
	}

	public function savedata()
	{
		//load registration view form
		$this->load->view('addMember');
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$name=$this->input->post('name');
		$id=$this->input->post('id');
		$phone=$this->input->post('phone');
		$sex=$this->input->post('sex');
		$date_of_birth=$this->input->post('date_of_birth');
		$job=$this->input->post('job');
		$address=$this->input->post('address');
		
		
       $que=$this->db->query("select * from member where id='".$id."'");
		$row = $que->num_rows();
		if($row)
		{
		$data['error']="<h3 style='color:red'>This member already exists</h3>";
		}
		else
		{
		$this->MembersModel->saverecords($name,$id,$phone,$sex,$date_of_birth,$job,$address);
		
		$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
		}			
		// $this->load->view('addMember',@$data);		
		}
	
	}	
	public function displaydata()
    {
	$result['data']=$this->MembersModel->displayrecords();
	$this->load->view('viewMembers',$result);
	}

	public function deletedata()
	{
	$id=$this->input->get('id');
	$this->MembersModel->deleterecords($id);
	echo "Record deleted successfully!";
	}

	public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->MembersModel->displayrecordsById($id);
	$this->load->view('update_records',$result);	
	
		if($this->input->post('update'))
		{
		$name=$this->input->post('name');
		$id=$this->input->post('id');
		$phone=$this->input->post('phone');
		$sex=$this->input->post('sex');
		$date_of_birth=$this->input->post('date_of_birth');
		$job=$this->input->post('job');
		$address=$this->input->post('address');
		$this->MembersModel->updaterecords($name,$id,$phone,$sex,$date_of_birth,$job,$address);
		echo "updated successfully!";
		}
	}
}
?>

 

