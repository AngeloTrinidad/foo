<?php

$sentence =  array("the", "quick", "brown", "fox", "jumps", "over", "the", "lazy", "dog" );

foreach ($sentence as $val) {
	if($val != "the"){

		echo($val . " ");

	}
}

  ?>