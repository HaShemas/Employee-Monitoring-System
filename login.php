<?php
require_once("database.php");

session_start();

if(isset($_POST['submit'])){
  login($connection);

}
  function login($connection){
    $error="";
    $employee_id=$_POST['employee_id'];
      $password=$_POST['password'];
      $sql = "SELECT * FROM employee_tbl WHERE employee_id =".$employee_id." AND password ='".$password."' ";
      
      $query = mysqli_query($connection, $sql);
      if(mysqli_num_rows($query)){
        $_SESSION['employee_id'] = $employee_id;
        if($employee_id==11){
          header("location: dashboard-admin.php");
        }
        else{
          header("location: dashboard.php");
        }
        
       
        exit();
      }

    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | By Code Info</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link  rel="stylesheet" href="login_style.css">
  </head>
  <style> 


  </style>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form method="post">
        <label>ID</label>
        <input type="text"  name="employee_id" placeholder="ID" class="form-control" required/>
        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Password" class="form-control" required/>
        <div class="btn btn-block btn-primary">
            <input type="submit" name="submit" id="submit" value="Login" class="button"/>
          </div>
      <closeform></closeform></form>
    </div>
  </body>
</html>

