<?php
$con = mysqli_connect("localhost","root","","smartdustbin");
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

if (mysqli_query($con, $sql)) {
  echo "connect successfully";
} 
else {
  echo "Error updating record: " . mysqli_error($conn);
}
?>
