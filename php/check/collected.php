<?php
	require_once('../../../resources/php/sql.php');
	
	$sql = new query("UPDATE dhs16_problem SET collected = 1 WHERE id = '".$_GET['id']."';");	
	$sql->execute();
	
	header('Location: ../../receipt.php?social='.$_GET['checkOut']);
?>