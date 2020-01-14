<?php 
	include 'db.php';
	$db=new Db();
	$data=$db->Read();
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
	  <a class="navbar-brand" href="#">Catagory</a>
  </nav>
  <div class="container">
  	<div class="row mt-5">
  		<div class="col md-8">
  			<a href="tambah.php" class="btn btn-primary mb-3">Tambah Catagory</a>
  			<table class="table table-bordered">
  				<thead class="thead-dark">
  					<tr>
	  					<th scope="col">No</th>
			 			<th scope="col">Nama</th>
			 			<th scope="col">Action</th>
		 			</tr>
  				</thead>
  				<tbody>
		  		<?php 
          if (!empty($data)) {
    		 		$no=1;
    		 		foreach ($data as $hasil) {
		 		 ?>
		 		<tr>
		 			<td><?= $no++; ?></td>
		 			<td><?= $hasil['name']; ?></td>
		 			<td>
		 				<a href="edit.php?id=<?= $hasil['id'];?>" class="btn btn-primary">Edit</a>
		 				<a href="proses.php?action=delete&id=<?=$hasil['id'];?>" class="btn btn-danger">Delete</a>
		 			</td>
		 		</tr>
		 		<?php 
		 			}
          }
		 		 ?>
  				</tbody>
  			</table>
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