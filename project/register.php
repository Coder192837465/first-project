<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            a{
                text-decoration: none;
                color:red;
            }
        </style>
    </head>
    
    <body>
        <form action="" method="POST">
            Name: <input type="text" name="Name" id="">
            <br>
            Age <input type="number" name="Age" id="">
            <br>
            Gender:
            <input type="radio" name="Gender" id="" value='male'>Male
            <input type="radio" name="Gender" id="" value='female'>female
            <br>
            Marks
            <input type="number" name="Marks" id="">
            <br>
            Email:
            <input type="Email" name="Email" id="">
            <br>
            <br>
            <input type="submit" name="submit" id="">
            <button>
                <a href="view.php">view records</a>
            </button>
        </form>
        <?php
        include 'dbconnect.php';
        if (isset($_POST['submit'])) {
            $Name = $_POST["Name"];
            $Age = $_POST["Age"];
            $Gender = $_POST["Gender"];
            $Marks = $_POST["Marks"];
            $Email = $_POST["Email"];
            $sql = "insert into student (Name,Age,Gender,Marks,Email)
             values('$Name','$Age','$Gender','$Marks','$Email')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
    ?>
    <script>
        alert( "records were inserted succesfully");
    </script>
           <?php
            } else {
                ?>
                <script>
                    alert("records were not inserted");
                </script>
        <?php
            }
        }
        ?>
    </body>
    
    </html>
    