<?php

  //$id = $_GET['id'];
  // do some validation here to ensure id is safe

  $db_host = 'localhost'; // Server Name
  $db_user = 'root'; // Username
  $db_pass = ''; // Password
  $db_name = 'telcodb'; // Database Name     
  
  $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$db) {
      die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
  }
  
  //Get image data from database
  $sql = "SELECT image FROM Eximage WHERE ExYear='2016-2017'";
  //Get image data from database
  $result = $db->query($sql);
  
  if($result->num_rows > 0){
      while($imgData = $result->fetch_assoc()){
      $imagea = $imgData['image'];
      //Render image
      header("Content-type: image/jpg"); 
      echo $imagea;
      }
  }else{
      echo 'Image not found...';
  }
  
  
  
?>