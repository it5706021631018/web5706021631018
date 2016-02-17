<html>
<head> <title> RANDOM52 </title> </head>
<body>
<?php
for($a==1;$a<4;$a++){
$number='1234567890';
for($i==1;$i<13;$i++){
$random=rand(0,strlen($number)-1);
$cut_txt=substr($number,$random,1);
$result.=substr($number,$random,1);
$number=str_replace($cut_txt,'',$number);
}

$i=0;
echo $result."<br/>";
$result='';
}







 ?>
</body>
</html>
