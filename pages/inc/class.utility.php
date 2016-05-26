<?php 


class Tools{
	private $filePath = 'Test';
		
	public static function loadFile($filePath){
		
		if(file_exists($filePath)){
			require_once( $filePath );
		} else {
			echo 'File Not Exist:<br/>';
			echo $filePath;	
		}
	}
	
	static function dropDown($i=0,$end=12,$incr=1,$selected=0){	
		$option = '';
		for($i; $i <= $end; $i+=$incr) {
			$option .= '<option';
			$option .= ( $selected == $i) ? ' selected' : '';
			$option .= '>'. sprintf('%02d', $i ) .'</option>';	
		}
		return $option;
	}
	
	static function bdCurrencyFormat($tk){
		return number_format( $tk, 2 );
	}
	
	static function Calculation($previousBalance,$newAmount,$operate = '-'){
		
		
		return ($operate == '+') 
				? $previousBalance + $newAmount
				: $previousBalance - $newAmount;
				
		/* 
		if($operate == '+'){
			return $previousBalance + $newAmount;
		} elseif($operate == '*' ) {
			return $previousBalance - $newAmount;
		} elseif($operate == '/' ) {
			return $previousBalance - $newAmount;
		} elseif($operate == '-' ) {
			return $previousBalance - $newAmount;
		} else {
			return 'Unknown';
		} 
		
		switch ($operate){
			case '+'
				return $previousBalance + $newAmount;
				break
			case '-'
				return $previousBalance - $newAmount;
				break;
			default
				return 0;
		} 
		*/
		
		//return ($previousBalance +  $operate + $newAmount);
	}
			
}













