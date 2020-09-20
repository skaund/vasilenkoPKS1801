<?php 
 
	$arrayNumbers = [1, 2, 36, 92, 100, 3, 34];

	$arrayNumbers_1 = [10, 9, 2, 77, 99, 45, 19];

	function summ_two_array ($array_1, $array_2) {

		if (is_array($array_1) && is_array($array_2)) {

			$iSumNumber = array_sum($array_1) + array_sum($array_2);

			return $iSumNumber;
		}

		else {

			echo "error";

		}
	}

	function type_arr ($array_1) {

		if (is_array($array_1)) {
			
			foreach ($array_1 as $item) {

				$sType = gettype($item);
				echo $sType;
				echo "<br>";
			}
			
		} else {

			echo "error";

		}	
	}

	/*$summ_two_array = summ_two_array($arrayNumbers, $arrayNumbers_1);
	echo $summ_two_array*/

	$iNumber = 8;
	$dNumber = 1.5;
	$sText = "vasilenkotest";
	$arNumbers = [1, 2, 45, 87, 99, 3, 20];
	$bFlag = true;
	$arPerson = array(
		'Name' => "vasilenko", 
		"age" => 19
	);

	$arType = [$iNumber, $dNumber, $sText, $arNumbers, $bFlag, $arPerson];

	type_arr($arType);


	

?>