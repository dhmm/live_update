<?php
require('settings/db.php');

$sql = 'select * from users';

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($conn->connect_errno)
{
  echo "DB connection error";
  die();  
}

$result = $conn->query($sql);
if($conn->errno)
{
  echo  $conn->error;
  die();  
}
else
{
  header('Content-Type: application/json');  
  if($result->num_rows > 0)
  {
    $data = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($data);
  }
  else
  {
    
    echo json_encode( [] );
  }
}

