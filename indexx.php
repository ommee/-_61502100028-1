<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลภาพยนต์</title>
</head>
<body>

<?php
echo $_POST['mv_id'];
    require_once("conect.php");
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM ticket WHERE mv_id = '{$_POST['mv_id']}' AND mv_pin = '{$_POST['mv_pin']}'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["mv_id"] = $row['mv_id'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }

    if(isset($_POST['logout'])) {
        session_unset();
    }

    if(isset($_SESSION['mv_id'])) {
        require_once("table.php");
    } else {
        require_once("logins.php");
    }
?>

</body>
</html>