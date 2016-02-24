<html>
<head><title>Grade</title></head>
<body>
<?php
$score = $_GET['score'];
$name = $_GET['name'];
echo "<b>Name : </b>: <font color=green> $name </font><br/>";


if($score<=100)
  echo "<b>Your Got Grade </b>: <font color=red> A</font><br/>";

elseif($score>=74)
  echo "<b>Your Got Grade </b>: <font color=green> B+</font><br/>";

elseif($score<=65)
  echo "<b>Your Got Grade </b>: <font color=green> B</font><br/>";

elseif($score<=69)
  echo "<b>Your Got Grade </b>: <font color=green> C+</font><br/>";

elseif($score<=64)
  echo "<b>Your Got Grade </b>: <font color=green> C</font><br/>";

elseif($score<=59)
  echo "<b>Your Got Grade </b>: <font color=green> D+</font><br/>";

elseif($score<=54)
  echo "<b>Your Got Grade </b>: <font color=green> D</font><br/>";


elseif($score<=49)
  echo "<b>Your Got Grade </b>: <font color=green> F</font><br/>";
else echo"<font color=red>Enter your score again please</font> "
?>


</body>
</html>
