<?php

class Db
{
	protected   $server="localhost",
			    $uname ="root",
			    $pass  ="1234",
			    $dbname="oop",
			    $kon   ="";

	function __construct()
	{
		$this->kon=mysqli_connect($this->server,$this->uname,$this->pass,$this->dbname);
	}
	function Read()
	{
		$data=mysqli_query($this->kon,"SELECT * FROM catagory");
		if (mysqli_num_rows($data)) 
		{
			while ($result=mysqli_fetch_assoc($data)) {
				$hasil[]=$result;
			}
			return $hasil;
		}
	}

	function tambah_catagory ($val)
	{
		mysqli_query($this->kon,"INSERT INTO catagory (name) VALUES('$val')");
	}
	function show($id)
	{
		$result=mysqli_query($this->kon,"SELECT * FROM catagory WHERE id='$id'");
		return mysqli_fetch_assoc($result);
	}
	function edit_catagory($val,$id)
	{
		mysqli_query($this->kon,"UPDATE catagory SET name='$val' WHERE id='$id'");
	}
	function destroy_catagory($id)
	{
		mysqli_query($this->kon,"DELETE FROM catagory WHERE id='$id'");
	}

}

