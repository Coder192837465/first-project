<html>

<head>

</head>
<body>
<?php
include 'dbconnect.php';
$Id=$_GET['Id'];
$sql="select * from student where Id='$Id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<form action="" method="POST">
        Name: <input type="text" name="Name" id="" value="<?php echo $row['Name']?>">
        <br>
        Age <input type="number" name="Age" id="" value="<?php echo $row['Age']?>">
        <br>
        Gender:
        <input type="radio" name="Gender" id="" value="male" <?php
        if($row['Gender']=='male')
        echo "checked";?>>Male
        <input type="radio" name="Gender" id="" value="female" <?php
        if($row['Gender']=='female')
        echo "checked";?>>female
        <br>
        Marks
        <input type="number" name="Marks" id="" value="<?php echo $row['Marks']?>">
        <br>
        Email:
        <input type="Email" name="Email" id="" value="<?php echo $row['Email']?>">
        <br>
        <br>
        <input type="submit" name="update" id="" value='update'>
        <button>
            <a href="view.php">view records</a>
        </button>
    </form>
    <?php
    if(isset($_POST['update']))
    {
    $Name=$_POST['Name'];
    $Age=$_POST['Age'];
    $Gender=$_POST['Gender'];
    $Marks=$_POST['Marks'];
    $Email=$_POST['Email'];
    $sql="update student set Name='$Name',Age='$Age',Gender='$Gender',Marks='$Marks',Email='$Email'
    where Id='$Id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        ?>
        <script>
            alert("records were succesully updated");
            window.open('http://localhost/database/crud/view.php','_self&#39;)
        </script>
        <?php
    }
    else{
        ?>
        <script>
              alert("records were not  updated");
        </script>
        <?php
    }}
    ?>
</body>
</html>