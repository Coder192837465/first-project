<?php
$server='localhost';
$user='root';
$password='';
$db='student';
$conn=mysqli_connect($server,$user,$password,$db);
if(!$conn)
{
    die("not connected");
}
?>