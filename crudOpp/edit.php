<?php 
	include 'db.php';
  $id=$_GET['id'];
	$db=new Db();
  if (isset($id)) {
    $result=$db->show($id);
  }
  else{
    echo "g bisa boss";;
  }
 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud oop</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#"> Edit Catagory</a>
  </nav>
  <div class="container">
  	<div class="row mt-5">
  		<div class="col md-8">
        <form method="post" action="proses.php?action=edit">
          <div class="form-group ">
            <input type="hidden" name="id" value="<?= $result['id'];?>">
            <label for="nama_catagory">Nama Catagory</label>
            <input type="text" class="form-control"  name="name" id="nama_catagory" value="<?=$result['name'];?>">
          </div>
          <div class="form-group">
            <input type="submit" value="Update" class="btn btn-success">
          </div>
        </form>
  		</div>
  	</div> 
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>