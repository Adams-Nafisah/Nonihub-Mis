<?php
$servername="localhost";
$username="root";
$password="";
$databasename="mydb";

$connection = new mysqli($servername,$username,$password,$databasename);

if ($connection->connect_error){
    echo 'connection failed' .$connection->connect_error;
}
else
echo 'connected successfully';

if (isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT email,password FROM users WHERE email ='$email'AND password ='$password'";
    $result=$connection->query($sql);

    if ($result->num_rows > 0){
        header('location:admin/');
    }
    else{
      echo 'invalid info';
    }
}
?>

<style>
  

body {
    background: #fff;
    font-family: arial;
  }
   
  .con {
    margin-top: 50px;
    width: 670px;
    height: 400px;
    background: #fff;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #ddd;
    border-top-left-radius: 250px;
    border-bottom-right-radius: 250px;
    border-left: 2px solid #3292f2;
    border-right: 2px solid #ea4335f2;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }
   
  .box {
    margin-top: 0px;
    width: 600px;
    height: 350px;
    background: #fff;
    margin-left: auto;
    margin-right: auto;
    -webkit-box-shadow: 0px 4px 62px -36px rgba (36, 36, 36, 0.85);
    -moz-box-shadow: 0px 4px 62px -36px rgba(36, 36, 36, 0.85);
    box-shadow: 0px 4px 62px -36px rgba(36, 36, 36, 0.85);
    border-bottom-left-radius: 250px;
    border-top-right-radius: 250px;
  }
   
  h1 {
    font-size: 35px;
    font-weight: bold;
    padding-top: 60px;
    margin-left: 160px;
    color: coral;
    margin-bottom: 30px;
  }
   
  h2 {
    font-size: 36px;
    font-family: 'Franklin' 'Gothic Medium', 'Arial Narrow', Arial, sans-serif;
   margin-left: 270px;
    color: #ccc;
  }
   
  .spain {
    color: #ccc
  }
   
  .res {
    width: 400px;
    height: 20px;
    margin-left: auto;
    margin-right: auto;
  }
   
  .login-form {
    width: 300px;
    height: 300px;
    margin-left: auto;
    margin-right: auto;
  }
   
  input {
    width: 280px;
    height: 15px;
    font-size: 16px;
    color: #262526;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-bottom: 1px solid coral;
    outline: none;
  }
   
  .btn {
    width: 100px;
    height: 40px;
    background: coral;
    color: #fff;
    border-radius: 50px;
    font-weight: bold;
    box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
  }
   
  .btn:hover {
    background: #fff;
    color: coral;
    border: 1.5px solid coral;
    transition: .5s;
    cursor: pointer;
  }
    </style>




<h2> Noni Hub Database Manangement System</h2>
<div class="con">
    <div class="box">
    <h1> Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="login-form">
    
    <input type="email" name="email" placeholder="email" id="email"><br>

    <input type="password" name="password" placeholder="password" id="pass"><br>
    <input type="submit" name="submit" id="log" value="login" class="btn">
    <div>
      <p>Does not have an Account?   <a href='signup.php'>signup</a></p>
    </div>
</form>
    </div>
</div>