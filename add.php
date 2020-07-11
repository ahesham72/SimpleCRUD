<?php
include('conn.php');
include('layout.html');


?>

<div class="container">

<form action="handeladd.php" method="POST">

  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" placeholder="Enter Name" class="form-control"
     id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" placeholder="Enter Description" class="form-control description" 
    id="" name="description">
  </div>
 
  <input type="submit" class="btn btn-primary" value="ADD">
</form>
</div>