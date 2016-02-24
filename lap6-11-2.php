<html>
<head><title>คำนวณเกรด</title></head>
<body>

<?php
echo "<form method='get' action='lap6-11-2.php'>";
echo"<table border='1' align='center' width='500'>";
echo "<tr><td colspan='2' align ='center'>
<big>คำนวณเกรด</big></td></tr>";

echo "<tr>";
echo "<td> Enter Home work :</td>";
echo "<td><input type='text' name ='h' value=''>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Enter Midterm :";
echo "</td>";
echo "<td><input type='text' name ='m' value=''>";
echo "</td>";
echo "</tr>";
echo "<tr><td> Enter final :";
echo "</td>";
echo "<td><input type='text' name ='f' value=''>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='2' align ='center'>";
echo "<input type ='submit' value=' OK '/>";
echo "<input type ='reset' value=' Clear '/>";
echo "</td>";
echo "</tr>";
echo "</table>";

$h = $_GET['h'];
$m = $_GET['m'];
$f = $_GET['f'];



if($h>30) $h=30;
if($m>35) $m=35;
if($f>35) $f=35;




echo "<p>";
echo " Home work : <i> $h </i> </br>";
echo " Midterm: <i> $m </i> </br>";
echo " Final : <i> $f </i> </br>";
$total=$h+$m+$f;


echo "Total Scor : $total <br/>";

if($total>=80) echo "Your got grade : A<br/>";
elseif($total>=75) echo "Your got grade : B+<br/>";
elseif($total>=70) echo "Your got grade : B<br/>";
elseif($total>=65) echo "Your got grade : C+<br/>";
elseif($total>=60) echo "Your got grade : C<br/>";
elseif($total>=55) echo "Your got grade : D+<br/>";
elseif($total>=50) echo "Your got grade : D<br/>";
elseif($total<=49) echo "Your got grade : F<br/>";


//echo "</table>";
echo "</form>";
?>
</form>
</body>
</html>
