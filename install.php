<?php
require('settings/db.php');

$sql = 
'
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
';

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($conn->connect_errno)
{
  echo "DB connection error";
  die();  
}

$conn->multi_query($sql);
if($conn->errno)
{
  echo  $conn->error;
  die();  
}
else
{
  echo "installation completed. Go to <a href=\"index.php\">HOME</a> to see live update";
}

