<?php
session_start();
// if (isset($_SESSION['AdminLoginId'])) {
//     header("location :Admin Login.php");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Panel</title>
</head>

<body>
    <div class="header">
        <h2>Hello your welcome
            <?php echo $_SESSION['AdminLoginId'] ?>
        </h2>
        <button class="LogOut" name="logout"> Log Out</button>
    </div>
    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header("location: Admin Login.php");
    }
    ?>
</body>

</html>