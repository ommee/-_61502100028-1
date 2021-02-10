<h3>เพิ่มข้อมูล<small> <a href=".">ย้อนกลับ</a></small></h3>

<form action="updates.php" method="post">

    <label for="mv_id">รหัสภาพยนต์</label>
    <?php 
    echo $row['mv_id']
    ?>
    <input type="hidden" name="mv_id" id="mv_id" value="<?php echo $row['mv_id'];?>">
    <br><br>
    <label for="mv_name">ชื่อภาพยนต์</label>
    <input type="text" name="mv_name" id="mv_name"value="<?php echo $row['mv_name'];?>">
    <br><br>
    <label for="mv_datetime">เวลาที่เริ่มฉาย</label>
    <input type="text" name="mv_datetime" id="mv_datetime"value="<?php echo $row['mv_datetime'];?>">
    <br><br>
    <label for="mv_cname">ชื่อผู้ใช้งาน</label>
    <input type="datetime" name="mv_cname" id="mv_cname"value="<?php echo $row['mv_cname'];?>">
    <br><br>
    <label for="mv_pin">Pin</label>
    <input type="text" name="mv_pin" id="mv_pin"value="<?php echo $row['mv_pin'];?>">
    <br><br>
    <button type="submit">ยืนยัน<button>
    <button type="reset">ล้างข้อมูล<button>

</form>
