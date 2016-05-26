<?php 

global $action,$id;	
$Ledger = new Ledger();
	$db = new CRUD();
	$db->query('SELECT * FROM `reporting` WHERE `ledger` = :ID');
	$db->bind(':ID', $id);
  	$results = $db->resultList();  
	
	
?>



<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
   <form method="get" id="filter" class="filter_box">
   		<input type="hidden" name="p" value="statement"/>
		<label>Select Ledger to See statement: 
        	<select onchange="document.getElementById('filter').submit();" name="id">
				<?php echo $Ledger->ledgerList( $id ); ?>
            </select>
        </label>
	</form>
  </div>
  
  <?php if($id == false){ echo '<div class="alert alert-warning" role="alert">
  Please Select a ledger to see statement!
  </div>';} ?>
  
  <?php if($id == true){  ?>
<table class="table">
  <tr>
    <th width="90">Date</th>
    <th width="75">Title</th>
    <th width="75">Description</th>
    <th width="75">Type</th>
    <th width="75">Ledge</th>
    <th width="75">Amount</th>
	<th width="70">Balance</th>
  </tr>  
 <?php foreach($results as $rows){ ?>		
  <tr>
    <td><?php echo $rows->date; ?></td>
    <td><?php echo $rows->title; ?></td>
    <td><?php echo $rows->description; ?></td>
    <td><?php echo $rows->type; ?></td>
    <td><?php echo $rows->ledger; ?></td>
    <td><?php echo $rows->amount; ?></td>   
	<td><?php echo $rows->balance; ?></td>
  </tr>  
  <?php } ?>
</table>
	<?php  } ?>

</div>


  
