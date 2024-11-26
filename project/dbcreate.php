
<?php
include 'dbconnect.php';

$sql="create database student";
$result=mysqli_query($conn,$sql);
if($result){
    echo "database Student created";
}
else{
    echo "database not created".mysqli_error($conn) ;
}



?>