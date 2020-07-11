<?php 
include ('conn.php');
include ('layout.html');


echo '<div class="container">';

$query ='select * from product';

$result=$conn->query($query);

if($result->num_rows>0){

    while($row=$result->fetch_assoc()){
        echo
         '<h4>' . $row['name'] .':</h4>' 
         . $row['description'] . "<br>" . 
         "<a href='edit.php'>edit</a>";
    }
}?>

<button  class='btn btn-dark' onclick="location.href='add.php'">ADD</button>
</div>