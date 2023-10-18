



<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Nieosoft</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">login</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php error_reporting(0);


$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$address = $_POST['address'];


// Database connection

$conn = new mysqli('localhost','root','','login');
$sql1 ="SELECT * from nieosoft where email ='$email'";
$check= mysqli_query($conn,$sql1);
$num = mysqli_num_rows($check);
if($num){
  echo '<div class="alert alert-danger alert-dismissible fade show " id="alert"role="alert">
    <strong> not sucess !</strong> This email id alredy use
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
else{
$sql ="INSERT INTO `nieosoft` ( `email`, `password`, `gender`, `address`, `datetime`) VALUES ( '$email', '$password', '$gender', '$address', current_timestamp())";



$result= mysqli_query($conn,$sql);

if($result){
  echo '<div class="alert alert-success alert-dismissible fade show " role="alert">
  <strong>sucess !</strong> you data is stored.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}else{
  echo "not sucess";
}
}
?>




<form method="post" action="index.php"> 
  <br>
  <h2 class="text-md-center">Register Your Self</h2>
  <hr>
  <div class="container  col-sm-6">
    <div class="form-group row ">
      <label for="inputEmail3" class="col-md-7 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" require>
      </div>
     </div>
     <div class="form-group row">
      <label for="inputPassword3" class="col-md-7  col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" name="password" require>
      </div>
     </div>
     <div class="form-group row">
      <label  class="col-md-7 col-form-label">Gender</label>
      <div class="col-sm-10">
        <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="m" >
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="f">
  <label class="form-check-label" for="exampleRadios2">
    Femlae
  </label>
</div>
<div class="form-check ">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="o" >
  <label class="form-check-label" for="exampleRadios3">
    Other
  </label>
</div>
        </div>
      </div>
 <br>

      <div class="col-sm-10 ">
        <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" require>
  </div>
      </div>
     </div>
    
            <div class="text-center">
        <button type="submit" class="btn btn-primary ">Sign in</button>
      </div>

        
  </div>
</form>

</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>





>