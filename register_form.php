<?php
@include 'config.php'; // Le nom du fichier est "config.php" au lieu de "cofig.php"
if (isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];
    
    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
    
    $result = mysqli_query($conn,$select);
    
    if(mysqli_num_rows($result) > 0){ // Utiliser mysqli_num_rows($result) au lieu de mysqli_num_rown($result)
        $error[] = 'user already exists!';
    }else{
        if($pass != $cpass){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO user_form(name,email,password,user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location: login_form.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register form</title>
    <link rel="stylesheet" href="styleregistre.css">
</head>
<body>
   
   <div class="form-container">
       <form action="" method="post">
           <h3>Inscrivez-vous</h3>
           
           <?php
           if(isset($error)){
               foreach($error as $error){
                   echo '<span class="error-msg">'.$error.'</span>';
               }
           }
           ?>
           
           <input type="text" name="name" required placeholder="entrer votre nom">
           <input type="email" name="email" required placeholder="entrer votre email">
           <input type="password" name="password" required placeholder="entrer votre mot_de_passe">
           <input type="password" name="cpassword" required placeholder="confirmer votre mot_de_passe">
           <select name="user_type">
               <option value="user">utilisateur</option>
               <option value="admin">administrateur</option>
           </select>
           <input type="submit" name="submit" value="S'inscrivez vous maintenant" class="form-btn">
           <p>Vous avez déjà un compte?<a href="login_form.php">Connecte-toi maintenant</a></p>
       </form>
   </div>
    
</body>
</html>
