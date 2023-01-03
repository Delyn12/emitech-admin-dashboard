<?php

if(!function_exists('CURRENT_DATE')){
	function CURRENT_DATE(){
		$full_date = getdate(date("U"));
		$today_date = "$full_date[weekday], $full_date[month] $full_date[mday], $full_date[year]";
		return ($today_date);
	}
}

?>