<?php 

 
include ('conn.php');


$name = $_POST['name'];
$description = $_POST['description'];

$query ='INSERT INTO `product`(, `name`, `description`)
 VALUES ("$name","$description")';

 $conn->query($query);
 header('location:index.php');