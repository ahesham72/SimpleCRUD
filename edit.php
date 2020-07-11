<?php
include "conn.php";
include('layout.html');
$id=$_GET['id'];

$query ="select * from product where id='$id'";
$result=$conn->query($query);

if ($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
        ?>
<div class="container">

<form action="handeladd.php" method="POST">

  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" placeholder="Enter Name" class="form-control"
     id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $row['name']; ?>">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" placeholder="Enter Description" class="form-control description" 
    id="" name="description" value="<?php echo $row['description']; ?>"
  </div>
 
  <input type="submit" class="btn btn-primary" value="ADD">
</form>
</div>
<?php
    }
};