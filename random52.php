<html>
<head> <title> RANDOM52 </title> </head>
<body background="m55.jpg">
<?php

$row = 13;
$col = 4;
$cards = array();
for ($i = 0; $i < 1; $i++) { 
       	$card = mt_rand(1, 52); 
       	if(!in_array($card, $cards)){
       		$cards[$i] = $card;
	}else{
		$i--;
	}
	$cards = array_unique($cards);
   	} 

$count_arr=count($cards); 

   	foreach ($cards as $cards) { 
	
	}
echo "<table align='center' border='4' width='300'>";

for ($r=1; $r <= $row; $r++){
echo "<tr>";
for ($c=1; $c <= $col; $c++){
if ($r==$c){
echo "<td align='center'>";
echo $cards."</td>";
}
else
{
echo "<td align='center'> $cards</td>";
}
if($cards>=52)
{$cards = ($cards=1);
}
elseif ($cards==$cards)
{$cards = ($cards+1);
}
}
echo "</tr>";
}
echo "</table>";


 ?>
</body>
</html>
