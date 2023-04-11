<?php
require_once("database.php");

session_start();

if(isset($_POST['submit'])){
  login($connection);

}
  function login($connection){
    $error="";
    $id = $_POST['ide'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM employee_tbl WHERE status = '1 ' AND employee_id =" . $id . " AND password ='" . $password . "' ";
    $query = mysqli_query($connection, $sql);
    $rows1 = mysqli_num_rows($query);
    
    $sql2 = "SELECT * FROM hr_tbl WHERE  hr_id =" . $id . " AND password ='" . $password . "' ";
    $query2 = mysqli_query($connection, $sql2);
    $rows2 = mysqli_num_rows($query2);
    
    if($rows1 > 0 || $rows2 > 0){
      if($rows2 > 0){
        // Set the hr_id in the session
        $_SESSION['hr_id'] = $id;
        header("location: dashboard-admin.php");
      } else {
        // Set the employee_id in the session
        $employee = mysqli_fetch_assoc($query);
        $_SESSION['employee_id'] = $employee['employee_id'];
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
        <input type="text"  name="ide" placeholder="ID" class="form-control" required/>
        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Password" class="form-control" required/>
        <div class="btn btn-block btn-primary">
            <input type="submit" name="submit" id="submit" value="Login" class="button"/>
          </div>
      <closeform></closeform></form>
    </div>
  </body>
</html>

