<h1>Add Transection</h1>
<?php 




if(isset($_POST['insertMosque'])){	
	
	$date	 		= $_POST['date'];
	$title	    	= $_POST['title'];
	$description	= $_POST['description'];
	$ledger	 		= $_POST['ledger'];
	$amount	 		= $_POST['amount'];
	$type	 		= $_POST['type'];
	
	
	$city = new CRUD();	
	$city->query('INSERT INTO `reporting` SET 
					`date`   		= :date,
					`title`			= :title,
					`description` 	= :description,
					`ledger` 		= :ledger,
					`amount` 		= :amount,
					`type` 			= :type');
							
	$city->bind(':date', 		$date);
	$city->bind(':title', 		$title);
	$city->bind(':description', $description);
	$city->bind(':ledger', 		$ledger);
	$city->bind(':amount', 		$amount);
	$city->bind(':type', 		$type);
	
		
  	$city->execute(); 
	
	if($city->lastInsertId()){		
		echo '<p class="success">Report Added Successfully</p>';	
	}		
}


$Ledger = new Ledger();

?>


<form method="POST">
<table>
  
    <tr>
    <td width="120">Ledger</td>
    <td width="5">:</td>
    <td><select name="ledger"><?php echo $Ledger->ledgerList(); ?></select></td>
  </tr>
  <tr>
    <td>Type</td>
    <td>:</td>
      <td> <label> <input type="radio" name="type" value="earn" checked/> Earn</label>
           <label><input type="radio" name="type" value="spend"/> Spend</label>
      </td>
  </tr>  
<tr>
    <td>Date</td>
    <td>:</td>
    <td><input type="date" name="date" value="<?php echo date('Y-m-d') ?>" style="width: 146px;"/></td>
  </tr>  
  <tr>
    <td>Title</td>
    <td>:</td>
    <td><input type="text" name="title" /></td>
  </tr>
  <tr>
    <td>Amount</td>
    <td>:</td>
    <td><input type="text" name="amount" /></td>
  </tr>
  <tr>
    <td>Description</td>
    <td>:</td>
    <td><textarea style="width: 146px; height:16px;" name="description"></textarea></td>
  </tr>  
  <tr>
    <td>Action</td>
    <td>:</td>
    <td><input type="submit" name="insertMosque" value="Save"/></td>
  </tr>
</table>
</form>