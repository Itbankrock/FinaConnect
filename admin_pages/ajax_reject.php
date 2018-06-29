<?php 

	require_once("../connectPDO.php");
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$updateActive = $db->prepare("UPDATE client SET isActive = 2 WHERE clientID = :id");
		$updateActive->bindParam(":id", $id);
		$updateActive->execute();

		echo "<table>
			<thead>
				<tr>
					<td>Firstname</td>
					<td>Lastname</td>
					<td> </td>
					<td> </td>
				</tr>
			</thead>
			<tbody>";

		$selectUsers = $db->prepare("SELECT clientID, fName, lName FROM client WHERE isActive = 0");
		$selectUsers->execute();
		while($rows = $selectUsers->fetch(PDO::FETCH_ASSOC)){
			$clientID = $rows['clientID'];
			$fName = $rows['fName'];
			$lName = $rows['lName'];
			echo "<tr>";
			echo "<td>$fName</td>";	
			echo "<td>$lName</td>";	
			echo "<td><button type='button' class='acceptBtn' id='$clientID'>Accept</button></td>";
			echo "<td><button type='button' class='rejectBtn' id='$clientID'>Reject</button></td>";				
			echo "</tr>";
		}

		echo "</tbody>
		</table>";
		exit();
	}

?>