<!DOCTYPE html>
<html>
<head>  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
#mod{
    border:1px solid;
    align-items:center;
    padding:25px;
}
#but{
    color:white;
    background-color:blue;
    padding:5px 10px 5px 10px;
}

div.c {
  width:100%;
  text-align: right;
  color:red;
  display: inline-block;

} 

div.c a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

div.c a:hover, a:active {
  background-color: red;
}
</style>
</head>
<body>
  
<div class="container">
  <h1>Upload Banner Images</h1>    
  
<div class="c" >
<span><!--<a style="background-color:green" href="notification.php">Add Notification</a>-->
<a href="logout.php">LOGOUT</a></span>

</div>
<div style="height:25;">
<h6></h6>
</div>
<div id="mod">
  <form enctype="multipart/form-data" action="uploadimage.php" method="POST">
    <p>Upload your Images</p><div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" name="name" id="usr">
</div>

    <input type="file" name="uploaded_file"></input><br />

    <br />
    <input  class="btn btn-primary" type="submit" value="Upload"></input>
  </form>
  </div>
  <div>
  <?php 
include 'db_connect.php';

$q = "select * from banner";
  $result = $conn->query($q);
  while($row = $result->fetch_assoc()){ ?>

   <div style="border:1px solid;margin:10px;padding:10px;">
   <form class="form-inline" action="deleteimage.php" method="post">
  <div class="form-group mb-2">
  <h4><?php echo $row['name'] ?></h4>
  </div>
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  
  <button  type="submit" class="btn btn-primary mb-2">Delete</button>
</form>
    
    
   </div>
 <?php } ?>

  <div>
  </div>
</body>
</html>
