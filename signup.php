
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
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   


    $sql ="INSERT INTO users (username,email,password)
     VALUES ('$name','$email','$password')";

if ($connection->query($sql) ===TRUE){
    echo 'New Record Succesfuly';
}else{
    echo 'Error: ' .$connection->connect_error;
}
$connection->close();
}
?>


<style>
body {
    background: #fff;
    font-family: arial;
  }
   
  .con {
    margin-top: 100px;
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
    font-size: 14px;
    font-family: 'Franklin' 'Gothic Medium', 'Arial Narrow', Arial, sans-serif;
   margin-left: -150px;
    color: #ccc;
  }
   
  .spain {
    color: #ccc;
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
<div class="con">
    <div class="box">
    <h1>Sign up</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"  class="login-form">
    <!-- <label>Name:</label> -->
    <input type="text" name="name" placeholder="Full name"><br>
    <!-- <label>Email:</label> -->
    <input type="email" name="email" placeholder="email"><br>
    <!-- <label>password:</label> -->
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" name="submit" value="signup" class="btn">
</form>
    </div>
</div>