<?php
session_start();
if(isset($_SESSION["user"])){
    header("location:Home.php");
}
$pageTitle="Login";
include_once('Fragments/Header.php');
?>
<?php
if(isset($_SESSION['errorMessage'])){

?>
<div class="alert alert-danger" >
    <?= $_SESSION['errorMessage'] ?>
</div>
<?php
}
unset($_SESSION['errorMessage']);
?>
<form action="ProcessLogin.php" method="post">
    <div class="form-group">

        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

