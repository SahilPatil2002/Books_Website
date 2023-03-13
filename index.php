
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Store</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>


    <!------------------------------------------------------------------------ navbar  ------------------------------------------------------------------>

    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Encyclopedia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Section
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light radius" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      <!-------------------------------------------------------------------------------- navbar end  ----------------------------------------------------------------->
      <div class="home">
        <img src="image/bg.jpg" alt="">
        <div class="textbox">
            <h1>Ocean<span style="color: white;"> of books</span></h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus sed culpa est dignissimos maiores recusandae beatae et reprehenderit id aliquam sapiente quo praesentium, velit itaque voluptas, repellat deserunt. Ut soluta iste pariatur eos ullam tempore doloremque a tempora dolor facere!</p>
            <button type="button" class="btn btn-coral">Get a Book</button>
            <button type="button" class="btn btn-secondary">Know more</button>
        </div>
      </div>



      <!--------------------------------------------------------------------------------- section 2 start  -------------------------------------------------------------->

      <div class="display">
        <h1>Welcome to<span> Encyclopedia </span></h1>
        <div class="row row-cols-1 row-cols-md-3 g-6">
            <div class="col">
              <div class="card h-100">
                <img src="image/My project-1 (1).png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Fairy Tales</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/My project-1 (2).png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Nature</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/My project-1 (3).png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mythology</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/My project-1 (4).png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Space</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/My project-1 (5).png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Life</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/My project-1 (6).png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Business</h5>
                </div>
              </div>
            </div>
          </div>
      </div>

      <!--------------------------------------------------------------------------------- section 2 end  -------------------------------------------------------------->

      <!--------------------------------------------------------------------------------- section 3 start  -------------------------------------------------------------->

      <form action="index.php" class="form" method="post">
        <div class="details">
          <h1>Order<span> Your Book</span></h1>
          <p>Please Enter Your <span>details</span> carefully</p>
          <div class="input">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="text" name="book-name" id="book-name" placeholder="Enter Your Favorite Book-Name">
            <input type="number" name="number" id="number" placeholder="Enter Your Phone number">
          </div>
          <div class="shop">
          <button class="btn btn-coral">Order Now</button>
          <button class="btn btn-primary">Add to cart</button>
        </div>
        </div>
      </form>

      <!--------------------------------------------------------------------------------- section 2 end  -------------------------------------------------------------->




    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


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

  $sql = "INSERT INTO `book`.`web` (`name`, `email`, `bk`, `ph`, `dt`) VALUES ('$name', '$email','$bk_name','$ph_no', current_timestamp());";

  if($con->query($sql) == true){
    // echo "Successfully inserted";
    $insert = true;
}else{
    echo "ERROR : $sql <br> $con->error";
}
$con->close();
}


?>