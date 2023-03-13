<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Data</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        h1{
            font-weight:bold;
            font-size:45px;
            text-align:center;
            letter-spacing:5px;
            color:#d96459
        }
        table{
            border-collapse:collapse;
            width:100%;
            color:#d96459;
            font-size:25px;
            text-align:left;
        }
        th{
            background-color:#d96459;
            color:white; 
            padding-left:50px
        }
        td{
            padding-left:50px;

        }
        tr:nth-child(even){
            background:#f2f2f2;
        }
    </style>
</head>
<body>
    <h1>DATA</h1>
    <table>
        <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Book Name</th>
            <th>Phone number</th>
        </tr>

        <?php 
        $con = mysqli_connect("localhost","root","","book");
        if($con->connect_error){
            die("Connection failed : ".$con -> connect_error);
        }   
        $sql = "SELECT sno, name, email ,bk ,ph from web";
        $result = $con-> query($sql);
        // echo "<h1>DATA</h1>";
        if($result->num_rows >0){
            while ($row = $result->fetch_assoc()) {
            
                echo "<tr><td>".$row["sno"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["bk"]."</td><td>".$row["ph"]."</td></tr>";
            }
            echo"</table>";
        }else{
            echo "0 results";
        }

        $con ->close();
        
        ?>

    </table>
</body>
</html>