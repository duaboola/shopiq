<?PHP
include 'db_connect.php';
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "assets/images/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    $name = $_POST["name"];
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
      $path = $baseurl.$path;
     $sql = "insert into banner (name,image) values ('$name','$path')";
     if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
	  header('location: ./bannerupload.php');
        
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>