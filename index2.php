<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/connection.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: dodgerblue;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
}

.sidebar a:hover {
  color: black;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidebar">
  <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="index3.php"><i class="fa fa-fw fa-wrench"></i>Book</a>
  <a href="services.html"><i class="fa fa-fw fa-user"></i> Services</a>
  <a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="gallery.html"><i class="fa fa-fw fa-camera"></i> Gallery</a>
  <a href="about2.html"><i class="fa fa-fw fa-book"></i> About</a>
  <a href="column layout.html"><i class="fa fa-fw fa-book"></i> More us</a>
</div>

<div class="main">
  <h2>Welcome</h2>
  <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
       
        
    <?php else: ?>
  
         
    <?php endif; ?>
  
  <p>Need to make appointments make them.</p>
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


<p><a href="logout.php">Log out</a></p>

</body>
</html>

</div>
     
</body>
</html> 