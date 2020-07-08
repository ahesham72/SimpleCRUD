<?php
$servername='localhost';
$dbuser='root';
$dbpassword='';
$dbname='crud';

$con=new mysqli($servername,$dbuser,$dbpassword,$dbname);

if($con->connect_errno)
die($con->connect_errno);