<?php
class MembersModel extends CI_Model 
{
	function saverecords($name,$id,$phone,$sex,$date_of_birth,$job,$address)
	{
	$query="insert into member(name,id,phone,sex,date_of_birth,job,address) values('$name','$id','$phone','$sex','$date_of_birth','job','$address')";
	$this->db->query($query);
	}

	function displayrecords()
	{
	$query=$this->db->query("select * from member");
	return $query->result();
	}

	function deleterecords($id)
	{
	$this->db->query("delete  from member where id='".$id."'");
	}

function displayrecordsById($id)
	{
	$query=$this->db->query("select * from member where id='".$id."'");
	return $query->result();}

	function updaterecords($name,$id,$phone,$sex,$date_of_birth,$job,$address)
	{
	$query=$this->db->query("update member SET name='$name',id='$id',phone='$phone',sex='$sex',date_of_birth='$date_of_birth',job='$job',address='$address' where 
		id='".$id."'");
	}	
}


