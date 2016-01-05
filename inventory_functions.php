<?php
function getItemCount($upc){
	//in reality, this data would be coming from a database
	$items = array('12345'=>5,'19283'=>100,'23489'=>'234');
	return $items[$upc];
}
function getSum($value1,$value2){
	//in reality, this data would be coming from a database
	
	return $value1 + $value2;
}

?>