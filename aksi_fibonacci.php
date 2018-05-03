<?php
 $input 	= $_POST['input'];
 $hasil  	= '';

$deret[1] = 0;
$deret[2] = 1;
 
$hasil .= "$deret[1], $deret[2]";
 
for($i=3;$i<=$input;$i++)
	{
		 $x=$i-1;
		 $y=$i-2;
	 
	 $deret[$i] = $deret[$x] + $deret[$y];
	 $hasil .= ", $deret[$i]";
	
	}
echo $hasil;

?>

<a href='fibonacci.php'>Back to home</a><br/>

