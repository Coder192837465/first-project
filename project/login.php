<!-- Db table is login and value id=admin password=admin -->

<html>
    <head></head>
    <body>
    <?php
include 'dbconnect.php';
session_start();
?>
    <form action="form.php" method="POST">
        ID:<input type="number" name="Id" id="">
        password:<input type="password" name="Password" id="">
        <input type="submit" name="submit" id="">
    </form>

    <?php
    echo time();
    if(isset($_POST['submit']))
    {
        $Id=$_POST['Id'];
        $pass=$_POST['Password'];
        $sql="select * from login where Id='$Id'and Password='$pass' limit 1";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);

        if($num==1)
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION['login']=$Name;
        header("location:welcome.php");
        // echo "login success";
    }
    else{
        echo "login failed";
    }
}
?>
    </body>
</html>

   
   