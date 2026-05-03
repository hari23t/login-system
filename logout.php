<?php
session_start();
$_SESSION=[];
session_unset();
session_destroy();
if (isset($_COOKIE['sessionid'])){
    setcookie('sessionid',"",time-3600,'/');
}
echo "<script>
 alert('session closed goodbye!');
 window.location.href = 'login.php';
</script>";
exit();
?>
