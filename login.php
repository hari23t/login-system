<?php
session_start();
if(isset($_SESSION['user'])){
    header("location:index.php");
    exit();
}
$error=" ";
if(isset($_POST['login'])){
    $username=trim($_POST['username']);
    $password=trim($_POST['password']);
    if($username!=" "&&$password!=" "){
        $_SESSION['user']=$username;
        setcookie("seesionid",session_id(),time()+(24*7*60*60),"/","",false,true);
        header("location:index.php");
        exit();
    }
    else{
        $error="please enter valid data";
    }
}
$c=session_id();
echo "<script>
sessionStorage.setItem('sessionid','$c');
</script>"
?>
<!DOCTYPE html>
<html>
<head>
<title>FOOD_SHOP LOGIN TEST</title>
<link rel="stylesheet" href="App.css">
</head>
<body style="background-color:black">
    <?php if($error) echo "<div>$error</div> "?>
<center>
<div class="form">
<form method="POST">
<div class="tit">
<h2>login form</h2>
<p> pleace enter name and password</p>
</div>
<div class="in">
<input type='text' class="in1" name='username' placeholder='username' required >
<br>
<input type='password' class="in2" name='password' placeholder='password' required >
<br>
</div>
<div class="button">
<button type='submit' name='login'>LOGIN</button>
</div>
</form>
</div>
</center>
</body>
</html>


