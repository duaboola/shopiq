
<?php 
    include 'db_connect.php';

if($_POST){
    $name = $_POST["name"];
     $sql = "insert into notification (notification) values ('$name')";
     if($conn->query($sql) == true){
        echo '<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Notification Added Succesfully 
      </div>';
     }   
}

?>  
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
  <h1>Add Notification</h1>    
<div class="c">
<span><a style="background-color:green" href="bannerupload.php">ADD IMAGE</a>
<a href="logout.php">LOGOUT</a></span>
</div>

<div style="height:25;">
<h6></h6>
</div>
<div id="mod">
  <form enctype="multipart/form-data" action="notification.php" method="POST">
    <p>Add you notifications here</p><div class="form-group">
  <label for="usr">Notification:</label>
  <input type="text" class="form-control" name="name" id="usr">
</div>


    <br />
    <input  class="btn btn-primary" type="submit" value="ADD"></input>
  </form>
  </div>
  <div>
  <?php 
include 'db_connect.php';

$q = "select * from notification";
  $result = $conn->query($q);
  while($row = $result->fetch_assoc()){ ?>

   <div style="border:1px solid;margin:10px;padding:10px;">
   <form class="form-inline" action="deletenotification.php" method="post">
  <div class="form-group mb-2">
  <h4><?php echo $row['notification'] ?></h4>
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
