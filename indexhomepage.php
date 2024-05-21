
<?php
session_start();
include("connection.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
 body {
  font-family: Arial, Helvetica, sans-serif;
}



.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


</style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="indexhomepage.html">Home</a></li>
      <li class="active"><a href="about2.html">About</a></li>
      <li class="active"><a href="services.html">Services</a></li>
      <li class="active"><a href="gallery.html">Gallery</a></li>
      <li class="active"><a href="contact.html">Contact</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Business <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="column layout.html">Layout</a></li>
          <li><a href="#">Terms and conditions</a></li>
          
        </ul>
      </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup2.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     
    </ul>
  </div>
</nav>
  
<div class="container">
  
</div>

</body>
</html>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("istockphoto-1463028538-640x640.jpg");
  height: 86%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: white;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #3366ff;
  color: white;
}
</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">EDOC</h1>
    <img src="images.jpeg" height="100" width="100">
    <p>Simply the best</p>
    <button>Make appointment easily</button>
  </div>
</div>
<?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>


</body>
</html>
