<?php
session_start();
$email =$_POST['email'];
$password =$_POST['pwd'];
if(isset($email)&&isset($password))
{
    if ($email=="as@as" && $password=="0000"){
        $_SESSION['errorMessage']="";
        $_SESSION["user"]="as";
        header('location:Home.php');
    } else {$_SESSION['errorMessage']="verifier le login ou pwd";
    header('location:Login.php');} }
    else
    {
        $_SESSION['errorMessage']="verifier le login ou pwd";
        header('location:Login.php');}
?>


</body>
</html>
