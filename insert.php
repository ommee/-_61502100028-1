<h3>ok</h3>
<?php
   
require_once("conect.php");
$sql = "INSERT INTO ticket (mv_id,mv_name,mv_datetime,mv_cname,mv_pin)
VALUES ('{$_POST['mv_id']}','{$_POST['mv_name']}', '{$_POST['mv_datetime']}', '{$_POST['mv_cname']}','{$_POST['mv_pin']}')";

if ($con->query($sql) == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>