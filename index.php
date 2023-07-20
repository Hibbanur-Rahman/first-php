<?php 
    require_once "Connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body>
    <div class="login-form">
        <h2>ADMIN LOGIN PANEL</h2>
        <form method="POST">
            <div class="input-field">
                <i class="fas fa-user">
                <input type="text" placeholder="Admin Name" name="AdminName">
            </div>
            <div class="input-field">
                <i class="fas fa-lock">
                <input type="password" placeholder="Password" name="AdminPassword">
            </div>
            
            <button type="submit" name="signin">Sign In</button>

            <div class="extra">
                <a href="#">Forget Password ?</a>
            </div>
        </form>
    </div>
    <?php
        if(isset($_POST['signin'])){
            $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)==1){
               session_start();
               $_SESSION['AdminLoginId']=$_POST['AdminName'];
               header("location: Admin Panel.php");

            }
            else{
                echo "<script>alert('Incorrect Password');</script>";
            }
        }
    ?>
</body>
</html>
