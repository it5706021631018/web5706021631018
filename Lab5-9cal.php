<html>
<head><title>การสร้างฟอร์มแบบGET</title></head>
<body>
<?php
$n = $_GET['n'];
$nick = $_GET['nick'];
$mail = $_GET['mail'];
$b = $_GET['b'];
$sex = $_GET['sex'];
$a = $_GET['a'];

echo "<p>";
echo "<b>ข้อมูลที่ผู้ใช้กรอก </b></br>";
echo " Name : <i> $n </i> </br>";
echo " Nick name : <i> $nick </i> </br>";
echo " Name : <i> $mail </i> </br>";
echo " Brithday : <i> $b </i> </br>";
echo " Sex : <i> $sex </i> </br>";

echo "Age : $a <i> </br>";
if ($a<=60) echo "ปกติ </br>";
elseif ($a>=61) echo "เกษียณ </br>";
elseif ($a>=101) echo "error </br>";

?>


</body>
</html>
