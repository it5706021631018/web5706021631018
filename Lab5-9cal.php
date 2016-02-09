<html>
<head><title>Resume</title>
</head>
<body background ="green-bg.jpg">
      <?php

$n = $_GET['n'];
$la = $_GET['la'];
$nick = $_GET['nick'];
$mail = $_GET['mail'];
$d = $_GET['d'];
$m = $_GET['m'];
$y = $_GET['y'];
$sex = $_GET['sex'];
$a = $_GET['a'];
$tel = $_GET['tel'];
$no = $_GET['no'];
$g = $_GET['g'];
$h = $_GET['h'];


//echo "<p>";
echo "<table border='4' align='center' width='600'  bgcolor='#7CFC00' bordercolor='#333300'>";
echo "<tr  background= 'haedbg.jpg' height ='250'>" ;
echo"<td colspan='2' align='center'>";
echo"<h1> <font color='#003300'> <MARQUEE behavior=alternate direction=left scrollAmount=3
 width='4%'><font face=Webdings>4</font></MARQUEE><MARQUEE scrollAmount=1 direction=left
 width='2%'>| | |</MARQUEE> Resume <MARQUEE scrollAmount=1 direction=right width='2%'>| | |</MARQUEE><MARQUEE
 behavior=alternate direction=right scrollAmount=3 width='4%'><font face=Webdings>3</font></MARQUEE>
</h1></font>";
//echo "<b>ข้อมูลที่ผู้ใช้กรอก </b></br>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo"<td colspan='2' align='left'>";
echo " <b>Name</b> :.<i> $n  </i>"."<b>Lastname</b> : <i> $la  </i>"."<b>Nickname</b> : <i> $nick  </i></br>";

echo " <b>E-mail </b>: <i> $mail </i> ";

$email = 'zoro@gmail.com';
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $mail)){

echo "<font color=red> <i>E-mail is not valid</font></i><br/>";

}else{

echo "<font color=green> <i>E-mail is  valid</font></i><br/>";}

//echo " Brithday :.<i> $d </i>"."<i> $m</i>"." <i> $y </i>";
$month = $_GET['m'];
if($m="มกราคม"){$month=" January";}
elseif ($m="กุมภาพันธ์"){$month="February";}
elseif ($m="มีนาคม"){$month="March";}
elseif($m="เมษายน"){$month="April";}
elseif($m="เมษายน"){$month="May";}
elseif($m="เมษายน"){$month="June";}
elseif($m="เมษายน"){$month="July";}
elseif($m="เมษายน"){$month="August";}
elseif($m="เมษายน"){$month="September";}
elseif($m="เมษายน"){$month="October";}
elseif($m="เมษายน"){$month="November";}
elseif($m="เมษายน"){$month="December";}
$year=$y-543;
echo "<b> Brithday </b>:.<i> $d </i>"."<i> $month</i>"." <i> $year </i></br>";

echo " <b>Sex </b>: <i> $sex </i> </br>";

echo "<b> Tel </b>: <i> $tel </i> </br>";

echo " <b>ID Card NO.</b> : <i> $no </i> </br>";

echo "<b>Age </b>: <i>$a </i><br> ";

echo "<b>Group Blood </b> : <i>$g </i><br> ";

echo "<b>Hobby </b>: <i>$h </i><br> ";

echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "<a href = 'lab5-9.php'><input type ='submit' value ='BACK'/></a>";
echo "</td>";
echo "</tr>";

echo"</table>";
?>
</body>
</html>
