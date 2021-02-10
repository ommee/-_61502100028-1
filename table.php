<?php
    require_once("conect.php");

    if(isset($_GET['delete'])){
        $sql = "DELETE FROM ticket WHERE mv_id = '{$_GET['id']}' ";
        if (mysqli_query($conn,$sql)) {
            echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . mysqli_connect_error($conn);
        }
  }
  $sql = "SELECT * FROM ticket";
  if(isset($_GET['search_click']))
  {
    $sql = "SELECT FROM studenta WHERE st_id LIKE '%{$_GET['search']}%'  OR st_fname LIKE '%{$_GET['search']}%'";
    echo  "<p>คุณกำลังเข้าสู่บริการ : {$_GET['search']}</p>";
  }

  
?>
<a href="inser_form.php">เพิ่มข้อมูล</a>
<form action="." method="get">
    <label for="search">ช่องค้นหา</label>
    <input type="text" name="search" id="search" placeholder="ช่องค้นหา...">
    <button type="submit" name="search_click">ค้นหา</button>
</form>
<form action="" method="post">
    <button type="submit" name="logout">ออกจากระบบ</button>
</form>
<table style="width:100%;"  border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>เวลาที่เริ่มฉาย</th>
    <th>ชื่อผู้ใช้งาน</th>
    <th>Pin</th>
    
  </tr>
  

  <?php
  $result = $con->query($sql); 

    if($result ->num_row > 0){
 
        while($row = $result->fetch_assoc()){
?>
<tr>
    <td><?php echo $row['mv_id'];?></td>
    <td><?php echo $row['mv_name'];?></td>
    <td><?php echo $row['mv_datetime'];?></td>
    <td><?php echo $row['mv_cname'];?></td>
    <td><?php echo $row['mv_pin'];?></td>

    <td align="center">
        <a href="update_form.php?id=<?php echo $row['mv_id']; ?>">แก้ไข</a>
        <a href="?delete=1&id=<?php echo $row['mv_id']; ?>">ลบ</a>
    
    </td>
  </tr>


<?php
   
  }
} else {
  echo "0 results";
}
$con->close();

?>
</table>




