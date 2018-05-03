<?php
 $input 	= $_POST['input'];
 $hasil  	= '';

 for($angka=1;$angka<=$input;$angka++)
		{
			$prima = true;
			for($i=2; $i<$angka;$i++)
				{
					if($angka%$i == 0)
						$prima = false;
				}
			if($prima)
					echo "$angka ";
		}

?>

<a href='prima.php'>Back to home</a><br/>

