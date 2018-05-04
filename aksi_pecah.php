<?php

 $input 	= $_POST['input'];
 $hasil  	= '';

$pecah2 	= strlen($input);
$pecah1		= str_split($input);

// var_dump($pecah1);

	for ($i=0; $i < $pecah2; $i++) {

			echo $pecah1[i];
			echo "<br>";
	}

for ($i=1;$i<=$pecah2;$i++){
     for ($j=$pecah2;$j>=$i;$j--){
		echo "0";
      }
     echo "<br>";
}

?>

<a href='pecah.php'>Back to home</a><br/>