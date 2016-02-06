<html>
<head><title>การสร้างฟอร์มแบบGET</title></head>
<body >
<?php
$n = $_GET['n'];
$la = $_GET['la'];
$nick = $_GET['nick'];
$mail = $_GET['mail'];
$b = $_GET['b'];
$sex = $_GET['sex'];
$a = $_GET['a'];
$tel = $_GET['tel'];
$no = $_GET['no'];
echo "<p>";
echo "<b>ข้อมูลที่ผู้ใช้กรอก </b></br>";
echo " Firstname : <i> $n </i> </br>";
echo " Lastname : <i> $la </i> </br>";
echo " Nickname : <i> $la </i> </br>";
echo " E-mail : <i> $mail </i> ";
$email = 'zoro@gmail.com';
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $mail)){

echo "<font color=red> <i>E-mail is not valid</font></i><br/>";

}else{

echo "<font color=red> <i>E-mail is  valid</font></i><br/>";}

echo " Brithday : <i> $b </i> </br>";
echo " Sex : <i> $sex </i> </br>";
echo " Tel : <i> $tel </i> </br>";
echo " ID Card NO. : <i> $no </i> </br>";
echo "Age : <i>$a </i> ";


?>
</body>
</html>
