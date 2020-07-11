<?php



$servername='localhost';
$dbuser='root';
$dbpassword='';
$dbname='crud';

$conn=new mysqli($servername,$dbuser,$dbpassword,$dbname);

if($conn->connect_errno)
die($conn->connect_errno);