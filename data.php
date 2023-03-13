<?php

$insert = false ;
if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password = "";


  $con = mysqli_connect($server,$username,$password);
  if(!$con){
    die("connection to this database failed due to ".mysqli_connect());
  }

  $name = $_POST['name'];
  $email = $_POST['email'];
  // $bk = $_POST['book'];
  // $ph = $_POST['phone'];
  $bk_name =$_POST['book-name'];
  $ph_no =$_POST['number'];
  $sql = "SELECT * FROM `book`.`web`";
  $result = $con->query($sql);
  $con->close();


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
<section>
        <h1>Data</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>book name</th>
                <th>number</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
            $rows = $result->fetch_assoc();
                
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['bk'];?></td>
                <td><?php echo $rows['ph'];?></td>
            </tr>
            <?php
                
            ?>
        </table>
    </section>
</body>
</html>