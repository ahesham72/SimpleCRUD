<?php
include "conn.php";
include('layout.html');
$id=$_GET['id'];

$query ="select * from product where id='$id'";
$result=$conn->query($query);

if ($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
        


    }
};