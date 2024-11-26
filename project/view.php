<html>
        <head>
            <style>
                table{
                    border: none;
                    border-bottom: 2px solid;
                    border-top: 2px solid;
                    width: 100%;
                    text-align: center;
                    border-collapse: collapse;
                }
                tr:hover{
                    background-color: seagreen;
                }
                a{
                    text-decoration: none;
                    color: red;
                }
            </style>
        </head>
        <body>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Marks</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php
                include 'dbconnect.php';
                $sql="select * from student";
                $result=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                if($num>0)
                {
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
            <td>  <?php echo $row['Name']?></td>
            <td>  <?php echo $row['Age']?></td>
            <td>  <?php echo $row['Gender']?></td>
            <td>  <?php echo $row['Marks']?></td>
            <td>  <?php echo $row['Email']?></td>
            <td>
                <a href="update.php">Update</a>
            </td>
            <td>
                <a href="delete.php?">Delete</a>
            </td>
        </tr>
        <?php
    }
                }
    
    ?>
            </table>
        </body>