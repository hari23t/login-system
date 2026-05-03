<?php
session_start();
if (!isset($_SESSION['user'])){
    header('location:login.php');
    exit();
}
$user=$_SESSION['user'];
if (!isset($_SESSION['welcome'])){
    echo "<script>
    alert('session is created welcome')
    </script>";
    $_SESSION['welcome']=true;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>hello</title>
        <link rel="stylesheet" href="App.css">
    </head>
    <body>
        <h2 class="text"> hello surya sucessful login</h2>
        <center>
            <a href='logout.php' class="log">logout</a>
</center>
</body>
</html>
