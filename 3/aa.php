<?php 

	// function pan($n)
	// {
	// 	$bai = floor($n / 100);
	// 	$shi = $n / 10 % 10;
	// 	$ge = $n % 10;
	// 	return (bool)(pow($bai, 3) + pow($shi, 3) + pow($ge, 3) == $n);
	// }


	// for ($i = 100; $i < 1000; $i++) 
	// { 
	// 	if(pan($i))
	// 	{
	// 		echo $i."\n";
	// 	}	
	// }
	function shu($m){
		return $m * $m * $m;
	}
	function pan($n){
		$bai = floor($n / 100);
		$shi = $n / 10 % 10;
		$ge = $n % 10;
		return (bool)(shu($bai) + shu($shi) + shu($ge) == $n);
	}
	for ($i=100; $i < 1000; $i++) { 
		if (pan($i)) {
			echo $i."<br/>";
		}
	}
 ?>