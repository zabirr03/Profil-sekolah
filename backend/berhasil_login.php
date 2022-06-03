<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
    <link rel="icon" href="dokumentasi/logo.png">
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Apakah Kamu Yakin Ingin Logout, " . $_SESSION['username'] ."!". "</h1>"; ?>
            
            <div class="input-group">
            <a href="logout.php" class="btn">YA</a>
            <a href="index.php" class="btn">Tidak</a>
            </div>
        </form>
    </div>
</body>
</html>
