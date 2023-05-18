<?php

@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user_page</title>
    <link rel="stylesheet" href="styleuser.css">
</head>
<body>
   
   <div class="container">
       
       <div class="content">
           <h3>Bonjour,<span>user</span></h3>
           <h1>Bienvenue<span><?php echo $_SESSION['user_name'] ?></span></h1>
           <p>ceci est une page utilisateur</p>
           <a href="cours.php" class="btn">Merci</a>
       </div>
       
   </div>
    
</body>
</html>