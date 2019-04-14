<?php include('server.php')
?>
<?php include('style.php')
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
  .container{
    top:150px; 
  }


#wrapper {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
  padding: 30px 0;
}
</style>



  <!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
</head>
<body>
 <div class="container" id="wrapper">
    <div class="row"> 
                <div class="col-lg-10 mx-auto">

    
         <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
       <form method="post"  autocomplete="off" action="login.php" class="mt-5 justify-content-center">
                <?php include('errors.php'); ?>

               <div class="input-group mb-2">
            
            
              <input type="text" name="username" class="form-control" value="" placeholder="Username">
            </div>
            <div class="input-group mb-2">
              <!-- <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-key"></i></span>
              </div> -->
              <input type="password" name="password" class="form-control input_pass" value="" placeholder="Password">
            </div>
                 <div id="btn1"><button type="submit" class="btn" name="login_user">Login</button></div>
                            <br/>
                            <div id="btn2">
                            <p class="text-center">Not a member?</p>
                           <div class="form-group">
     <button type="submit" class="btn"><a style="text-decoration:none" href="register.php" class="text-white">Register</a></button></div>
   

                        </form>
                   
                  </div>
                </div>
</div>
</div>
</div>
</div>
</div>
              
      
   

</body>
</html>