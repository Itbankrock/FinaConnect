<html>


<?php 

	require_once('connectPDO.php');

	$selectUsers = $db->prepare("SELECT clientID, fName, lName FROM client WHERE isActive = 0");
	$selectUsers->execute();
	while($rows = $selectAddress->fetch(PDO::FETCH_ASSOC)){
		$clientID = $rows['clientID'];
		$fName = $rows['fName'];
		$lName = $rows['lName'];

	}

?>

</html>