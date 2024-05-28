<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "connection3.php";
    
    $sql = "SELECT * FROM user_form
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

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
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: crimson;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WELCOME BACK!</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="admincreate.php">Appointments</a></li>
        <li><a href="#">Doctors</a></li>
        <li><a href="adminprofile.php">Profile</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Welcome back!</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="admincreate.php">Appointments</a></li>
        <li><a href="#section3">Doctors</a></li>
        <li><a href="adminprofile.php">Profile</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
       
        
    <?php else: ?>
  
         
    <?php endif; ?>
  
       

</body>
</html>

<?php

@include 'connection2.php';



if(!isset($_SESSION['admin_name'])){
   header('location:adminlogin_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>This is an admin page</p>
      

</div>

</body>
</html>





<!DOCTYPE html>
<html>
<head>
<style>
a:link, a:visited {
  background-color: dodgerblue;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
</head>
<body>


<p><a href="adminlogin.php">Log out</a></p>

</body>
</html>

</div>
     
</body>
</html>

 