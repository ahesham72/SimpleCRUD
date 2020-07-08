<?php 
include ('conn.php');


$query ='select * from product';

$result=$con->query($query);

if($result->num_rows>0){

    while($row=$result->fetch_assoc()){
        echo
         '<h4>' . $row['name'] .':<h4/>' 
         . $row['description'] . "<br>";
    }
}