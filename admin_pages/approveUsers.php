<html>
	<div class ="table">
		<table>
			<thead>
				<tr>
					<td>Firstname</td>
					<td>Lastname</td>
					<td> </td>
					<td> </td>
				</tr>
			</thead>
			<tbody>
				
				
<?php 

	require_once('../connectPDO.php');

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

?>

			</tbody>
		</table>
	</div>

	<script src="../jquery-3.2.1.min.js"></script>
	<script>
		function refresh(){
			$(".acceptBtn").click(function(){
							var wew = this.id;
							$.ajax({
								
								type: 'POST',
								url: 'ajax_approve.php', //then oopen yung page na yan
								data:{
									id: wew
								},

								success: function(response){
									$(".table").html(response);
								}
							});
						});

						$(".rejectBtn").click(function(){
							var wew = this.id;
							$.ajax({
								
								type: 'POST',
								url: 'ajax_reject.php', //then oopen yung page na yan
								data:{
									id: wew
								},

								success: function(response){
									$(".table").html(response);
								}
							});
						});
		}

		$(document).ready(function(){
			$(".acceptBtn").click(function(){
				var wew = this.id;
				$.ajax({
					
					type: 'POST',
					url: 'ajax_approve.php', //then oopen yung page na yan
					data:{
						id: wew
					},

					success: function(response){
						$(".table").html(response);
						refresh();
					}
				});
			});

			$(".rejectBtn").click(function(){
				var wew = this.id;
				$.ajax({
					
					type: 'POST',
					url: 'ajax_reject.php', //then oopen yung page na yan
					data:{
						id: wew
					},

					success: function(response){
						$(".table").html(response);
						refresh();
					}
				});
			});
		});
	</script>

</html>