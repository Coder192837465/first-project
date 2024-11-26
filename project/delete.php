<?php
include 'dbconnect.php';
$Id=$_GET['Id'];
$sql="delete from rss where Id='$Id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    ?>
    <script>
        alert("deleted succesfully");
        window.open('http://localhost/database/crud/view.php','_self&#39;)

    </script>
    <?php
}
else{?>
    <script>
         alert(" not deleted ");
    </script>
    <?php
}
?>