<?php 

class Ledger extends CRUD{	
	
	function ledgerList($ID=0){
		$this->query('SELECT `ID`,`ledgerName`,`taka` FROM `ledger`');
		$ledgers 	= $this->resultList();		
		$option = '<option value="0">--Select Ledger--</option>';
		foreach($ledgers as $ledger){
			$option .= '<option value="'. $ledger->ID .'"';
			$option .= ($ledger->ID == $ID) ? 'selected' : '';
			$option .= '>'. $ledger->ledgerName .' ('. $ledger->taka .')</option>';			
		}		
		return $option;
	}
	
	function ledgerBalanceUpdate($ledgerID, $amount, $type){
				
		$previousBalance 	= $this->getLederBalance( $ledgerID );
		$updateBalance 		= Tools::Calculation( $previousBalance,$amount,$type );
					
		$this->query('UPDATE `ledger`  SET `taka` = :taka WHERE `ID` = :ID');
		$this->bind(':taka', 	$updateBalance);
		$this->bind(':ID', 		$ledgerID);
		return $this->execute();				
	}
	
	
	function getLederBalance( $ledgerID ){
		
		$this->query('SELECT `taka` FROM `ledger` WHERE `ID` = :ID');		
		$this->bind(':ID', 	$ledgerID);
		return isset($this->single()->taka) 
				? $this->single()->taka 
				: 0;
	}
	
	
}

















