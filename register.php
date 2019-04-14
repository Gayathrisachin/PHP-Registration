<?php 

include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- 
<style>
body,
    html {
      background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
      background-color: #00bcd4;
      margin: 0;
      padding: 0;
      height: 100%;
   
   
    }
    .user_card {
      height: 400px;
      width: 350px;
      margin-top: auto;
      margin-bottom: auto;
      background: rgba(0,0,0,0.1);
      position: relative;
      display: flex;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
    
    }
    .brand_logo_container {
      position: absolute;
      height: 170px;
      width: 170px;
      top: -75px;
      color: white;
    
      padding: 10px;
      text-align: center;
    }
    .brand_logo {
      height: 150px;
      width: 150px;

      border: 2px solid white;
    }
    .form_container {
      margin-top: 100px;
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
      padding: 0 2rem;
    }
    .input-group-text {
      background: #ffffff !important;
      
  }*/
</style>

 -->
 <style>
#wrapper {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
  padding: 30px 0;
}
</style>
</head>
<body>
 
  <div class="container" id="wrapper">
    <div class="row"> 
                <div class="col-lg-10 mx-auto">

    
         <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Register</h3>
                        </div>
                        <div class="card-body">
  <form method="post" action="register.php" class="justify-content-center">
    <?php include('errors.php'); ?>
    <div class="form-group">
        <label class="form-label"></label>
          <input class="form-control " type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter user name *" required>
    </div>
     
     <div class="form-group">
        <label class="form-label col-md-2"></label>
          <input class="form-control" type="password" name="email" value="<?php echo $email; ?>" placeholder="Enter user email *" required>
    </div>

     <div class="form-group">
        <label class="form-label col-md-2"></label>
          <input class="form-control" placeholder="Enter user password *" type="password" name="password_1" required >
    </div>

    <div class="form-group">
        <label class="form-label col-md-2"></label>
          <input class="form-control" placeholder="Confirm password *" type="text" name="password_2" required >
    </div>
    <div class="form-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php" >Sign in</a>
    </p>
  </form>
</div>
</div>
</div>
</div>
</div>



</body>
</html>