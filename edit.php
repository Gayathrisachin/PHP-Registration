<?php
  include 'server.php';
//Get ID from Database
if(isset($_GET['id'])){
  $id=$_GET['id'];
 $sql = "SELECT * FROM users WHERE id =".$id;
 $result = mysqli_query($db,$sql);
 $row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
  $id=$_POST['uid'];
 $name = $_POST['uname'];
 $upass = $_POST['pwd'];
 $email = $_POST['email'];
 // $city = $_POST['city'];
 // $state = $_POST['state'];
 // $country = $_POST['country'];
 // $mobile = $_POST['phone'];
 // $doj = $_POST['doj'];
 $update = "UPDATE users SET email='$email' WHERE id= $id";
 $up = mysqli_query($db, $update);
 if(!isset($up)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: display.php");
 }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>DATABASE</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
body,
     html {
      /*background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');*/
      background-color: #00bcd4;
      margin: 0;
      padding: 0;
      height: 100%;
   
   
    }
    .user_card {
      height: 450px;
      width: 550px;
      margin-top: auto;
      margin-bottom: auto;
      background: rgba(0,0,0,0.1);
      position: relative;
      display: flex;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
     /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      border-radius: 5px;*/

    }
    .brand_logo_container {
      position: absolute;
      height: 170px;
      width: 370px;
      top: -90px;
      color: white;
     /* border-radius: 50%;
      background: #60a3bc;*/
      padding: 50px;
      text-align: center;
    }
    .brand_logo {
      height: 150px;
      width: 150px;

  /* border-radius: 50%;*/
      border: 2px solid white;
    }
    .form_container {
      margin-top: 50px;
    }
    .btn {
      width: 100%;
      background: #c0392b !important;
      color: white !important;
    }
    .btn:focus {
      box-shadow: none !important;
      outline: 0px !important;
    }
    .login_container {
      padding: 10px 2rem;
    }
    .input-group-text {
      background: #ffffff !important;
      /*color: white !important;*/
     /* border: 5 !important;*/
/*      border-radius: 0.25rem 0 0 0.25rem !important;
*/    }

</style>
</head>
<body>
  
 <div class="container h-100">
          <div class="d-flex justify-content-center h-100">
              <div class="user_card">
        <div class="d-flex justify-content-center">
            <div class="brand_logo_container">
          <h2 style="text-align: center;">Edit Your Details</h2></div>
        </div>
        <form method="POST"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal"  ">
    <div class="form-group">
    <label class="form-label "></label>
    
    <input class="form-control" type="text" name="uname" placeholder="Username" value="<?php echo $row['username']; ?>" readonly>
  </div>

    <div class="form-group">
    <label class="form-label "></label>
   
    <input class="form-control" type="text" placeholder="Id" name="uid" value="<?php echo $row['id']; ?>"></div>

<div class="form-group">
    <label class="form-label "></label>
    
    <input class="form-control" type="text" placeholder="Email" name="email" value="<?php echo $row['email']; ?>"></div>

    <div class="form-group">
    <label class="form-label"></label>
    
    <input class="form-control" type="password" placeholder="Password" name="pwd" value="<?php echo $row['password']; ?>" ></div>

   <!--  <div class="form-group">
        <label class="col-lg-3 control-label">City:</label>
        <div class="col-lg-8">
        <input class="form-control" type="text" name="city1" value="<?php echo $row['city']; ?>" ></div></div> -->

    <div class="form-group">
    <button type="submit" class="btn" name="btn-update" id="btn-update">Update</button></div>
   <div class="form-group">
<button type="submit" class="btn"><a style="text-decoration:none" href="login.php" class="text-white">Logout</a></button>
</div>
</form>
</div>
</div>
</div>
<!--  <script>
function update(){ 
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script> -->

</body>
</html>