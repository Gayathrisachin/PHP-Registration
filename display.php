

<?php
include 'server.php';

//Select Database
	

// $id= $_POST['username'];

?>
<!DOCTYPE html>
<html>
<head>
<title>Agent Database</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style type="text/css">
	body{
	margin:30px;
	padding: 30px;
background-color: #00bcd4;
}
h2{
color:#ffffff;

}
.container{
	width: 100%;
}
table{
margin-top: 50px;
max-width:150px;
}
.btn{
	width:80px;
      background: #c0392b;
      color: white !important;
}

</style>


</head>
<body>
	
	<div class="container-fluid">
    
 
		
      <h2 class="text-center">Your Details</h2>

      
    
		<table class="table table-dark">
			<thead>
      
				<th>Username</th>
				<th>UserId</th>
				<th>Email</th>
        	<!-- 	<th>City</th> -->
        
				
			</thead>

			<tbody>
						<?php
 //             $username = "";
 // $email    = "";
if($_SESSION['username']){
  $SESSION=$_SESSION['username'];
$sql = "SELECT * FROM users where username='$SESSION'";

 $result = $db->query($sql);
//Fetch Data from database
 if($result->num_rows > 0)
  { 
while($row = $result->fetch_assoc()){

 ?>
						<tr>
            
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['email']; ?></td>
              				<!-- <td><?php echo $row['city']; ?></td> -->
            				<td><div><button class="btn"> <a style="text-decoration:none" class="text-white" href=edit.php?id=<?php echo $row['id']; ?>>Edit</a> </button></div></td>
						</tr>
						
						<?php
                   }     
        }
        else{
          ?><tr>
 <th colspan="4">There's No data found!!!</th>
 </tr>
 <?php
}
}

?>
			</tbody>
		</table>
		<br>
		
		<button type="submit" class="btn "><a style="text-decoration:none" href="login.php" class="text-white">Back</a></button>
	</div>
</body>
</html>