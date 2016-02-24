<html>
<head><title>คำนวณเกรด</title></head>
<body>
<?php
$h = $_GET['h'];
$m = $_GET['m'];
$f = $_GET['f'];
//$j = $_GET['j'];
//$t = $_GET['t'];

if($h>30) $h=30;
if($m>35) $m=35;
if($f>35) $f=35;
//if($j>10) $j=10;
//if($t>10) $t=10;



echo "<p>";
echo " Home work : <i> $h </i> </br>";
echo " Midterm: <i> $m </i> </br>";
echo " Final : <i> $f </i> </br>";
//echo " Jit pi sai : <i> $j </i> </br>";
//echo " Test : <i> $t </i> </br>";
$total=$h+$m+$f;


echo "Total Scor : $total <br/>";
//if($total<=100) echo "Your got grade : A<br/>";
if($total>=80) echo "Your got grade : A<br/>";
elseif($total>=75) echo "Your got grade : B+<br/>";
elseif($total>=70) echo "Your got grade : B<br/>";
elseif($total>=65) echo "Your got grade : C+<br/>";
elseif($total>=60) echo "Your got grade : C<br/>";
elseif($total>=55) echo "Your got grade : D+<br/>";
elseif($total>=50) echo "Your got grade : D<br/>";
elseif($total<=49) echo "Your got grade : F<br/>";


//<input type ="submit" value="BACK">
?>

</body>
</html>
