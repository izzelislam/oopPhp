<?php

include 'db.php';
$db=new Db;
	

	$proses=$_GET['action'];
	if ($proses == "tambah") 
	{	
		$db->tambah_catagory($_POST['name']);
		header('location:index.php');
	}
	elseif ($proses=='edit') 
	{
		$db->edit_catagory($_POST['name'],$_POST['id']);
		header('location:index.php');
	}
	elseif ($proses=='delete') 
	{
		$db->destroy_catagory($_GET['id']);
		header('location:index.php');
	}

