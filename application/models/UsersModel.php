<?php
class UsersModel extends CI_Model 
{
	function saverecords($name,$id,$phone,$sex,$date_of_birth,$job,$address)
	{
	$query="insert into member(name,id,phone,sex,date_of_birth,job,address) values('$name','$id','$phone','$sex','$date_of_birth','job','$address')";
	$this->db->query($query);
	}
}