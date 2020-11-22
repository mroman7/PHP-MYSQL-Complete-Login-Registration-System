<?php 

session_start();
if($_SESSION["email"]){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Dashboard</title>
</head>
<body>

    <h1>Welcome to Dashboard</h1>
    <h1><?php echo $_SESSION['username']; ?></h1>
    <p><?php echo $_SESSION['email']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}
else {
    header("Location: index.php");
}
?>