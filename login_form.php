<?php
include 'config.php';
session_start();
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location: admin_page.php');
        } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location: user_page.php');
        } else {
            $error[] = 'incorrect email or password!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login form</title>
    <link rel="stylesheet" href="styleregistre.css">
</head>
<body>
   
   <div class="form-container">
       <form action="" method="post">
           <h3>Connecte-toi</h3>
           <?php
           if (isset($error)) {
               foreach ($error as $error_msg) {
                   echo '<span class="error-msg">' . $error_msg . '</span>';
               }
           }
           ?>
           <input type="email" name="email" required placeholder="entrer votre email">
           <input type="password" name="password" required placeholder="entrer votre mot_de_passe">
           <input type="submit" name="submit" value="Connecte-toi maintenant" class="form-btn">
           <p>vous n'avez pas de compte ? <a href="register_form.php">S'inscrivez vous maintenant</a></p>
       </form>
   </div>
    
</body>
</html>
