<?php
     require_once("conect.php");
     
$sql = " UPDATE ticket SET


        mv_name = '{$_POST[' mv_name']}',
        mv_datetime = '{$_POST['mv_datetime']}',
        
        WHERE mv_name = '{$_POST['mv_name']}' ";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>