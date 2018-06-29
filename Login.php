<!DOCTYPE html>
<html>
<?php 
	require_once('connectPDO.php');
    if (isset($_POST['login_user'])){
        $username= $_POST['login_username'];
        $password= $_POST['login_password'];
        
        $checkExist = $db->prepare("SELECT fName, lName from client WHERE email = :username AND password = :password");
        $checkExist->bindParam(":username", $username);
        $checkExist->bindParam(":password", $password);
		$checkExist->execute();
		$rows = $checkExist->fetch(PDO::FETCH_ASSOC);
		$match = "".$rows['fName']."".$rows['lName']."";
        if ($rows > 0) {
            header("Location: client_pages/dashboard.php");
        }
    }
	else if(isset($_POST['submit'])){
		$fName = $_POST['first_name'];
		$mName = $_POST['middle_name'];
		$lName = $_POST['last_name'];
		$bldg = $_POST['bldg'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$region = $_POST['region'];
		$contact = $_POST['contact'];
		$username = $_POST['email'];
		$password = $_POST['password'];
		
		$addQuery = $db->prepare("INSERT INTO buildingnumber (bldgNoName) VALUES (:bldg)");
		$addQuery->bindParam(":bldg", $bldg);
		$addQuery->execute();

		$addQuery = $db->prepare("INSERT INTO city (cityName) VALUES (:city)");
		$addQuery->bindParam(":city", $city);
		$addQuery->execute();

		$addQuery = $db->prepare("INSERT INTO street (streetName) VALUES (:street)");
		$addQuery->bindParam(":street", $street);
		$addQuery->execute();

		$addQuery = $db->prepare("INSERT INTO region (regionName) VALUES (:region)");
		$addQuery->bindParam(":region", $region);
		$addQuery->execute();

		$selectStreet = $db->prepare("SELECT streetID from street ORDER BY streetID DESC LIMIT 1");
		$selectStreet->execute();
		$rows = $selectStreet->fetch(PDO::FETCH_ASSOC);
		$streetNo = $rows['streetID'];

		$selectBldg = $db->prepare("SELECT bldgNoID from buildingnumber ORDER BY bldgNoID DESC LIMIT 1");
		$selectBldg->execute();
		$rows = $selectBldg->fetch(PDO::FETCH_ASSOC);
		$bldgNo = $rows['bldgNoID'];

		$selectCity = $db->prepare("SELECT cityID from city ORDER BY cityID DESC LIMIT 1");
		$selectCity->execute();
		$rows = $selectCity->fetch(PDO::FETCH_ASSOC);
		$cityNo = $rows['cityID'];

		$selectRegion = $db->prepare("SELECT regionID from region ORDER BY regionID DESC LIMIT 1");
		$selectRegion->execute();
		$rows = $selectRegion->fetch(PDO::FETCH_ASSOC);
		$regionNo = $rows['regionID'];

		$addQuery = $db->prepare("INSERT INTO address (bldgNoID, streetID, cityID, regionID) VALUES (:bldg,:street,:city,:region)");
		$addQuery->bindParam(":bldg", $bldgNo);
		$addQuery->bindParam(":street", $streetNo);
		$addQuery->bindParam(":city", $cityNo);
		$addQuery->bindParam(":region", $regionNo);
		$addQuery->execute();

		$selectAddress = $db->prepare("SELECT addressID from address ORDER BY addressID DESC LIMIT 1");
		$selectAddress->execute();
		$rows = $selectAddress->fetch(PDO::FETCH_ASSOC);
		$addressNo = $rows['addressID'];

		$addQuery = $db->prepare("INSERT INTO client (fName, mName, lName, email,password, mobileNo,age, address) VALUES (:firstName, :middleName, :lastName, :username, :password, :contact,0, :address)");
		$addQuery->bindParam(":firstName", $fName);
		$addQuery->bindParam(":middleName", $mName);
		$addQuery->bindParam(":lastName", $lName);
		$addQuery->bindParam(":username", $username);
		$addQuery->bindParam(":password", $password);
		$addQuery->bindParam(":address", $addressNo);
		$addQuery->bindParam(":contact", $contact);
		$addQuery->execute();

	}	

?>
<head>
  <meta charset="utf-8">
   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
<style>
body {
   background-image: url("assets/loginbg.jpg");
   margin-top: 2em;
}

.transwhite{
background-color: rgba(255, 255, 255, 0.7);
}

#quote {
font-family: "Roboto", sans serif;
font-weight: 300;
  color:white;
}

</style>
</head>
<body>

<div class="row container">
      <div class="col s6 m4">
		<img src="assets/logo.png" width="70%" height="70%" />
		<h1 id="quote">We connect you to the best advisors</h1>
	  </div>
	  <div class="col s6 m4 offset-s2 offset-m4">
		<div class="card darken-1" style="background-color: rgba(255, 255, 255, 0.7);">
			<div class="card-content black-text">
				<span class="card-title" style="text-align: center;">LOGIN</span>
				
				  <div class="row">
					<form action="" method="POST"  class="col s12">
					  <div class="row">
					  
						<div class="input-field col s12">
						  <i class="material-icons prefix">account_circle</i>
						  <input id="icon_uname" type="text" class="validate" value="<?php if(isset($_POST['login_username'])) echo $_POST['login_username'];?>" name="login_username">
						  <label for="icon_uname">Username</label>
						</div>
						
						<div class="input-field col s12">
						  <i class="material-icons prefix">lock</i>
						  <input id="icon_password" type="password" class="validate" value="" name="login_password">
						  <label for="icon_password">Password</label>
						</div>
						
						<div class="input-field col s12 center">
						    <button class="btn waves-effect waves-light col s12" type="submit" name="login_user">LOGIN</button>
						</div>
						
						<div class="col s12 center">
						    <button class="btn waves-effect waves-light col s12" type="submit" name="login_ubank">LOGIN WITH UBANK ACCOUNT</button>
						</div>
						
					  </div>
					  
					</form>
				  </div>
        
				
			</div>
			<div class="card-action" style="background-color: rgba(255, 255, 255, 0.7);">
			  Don't have an account yet? Sign up as:
			  
			  <div class="row">
				  <div class="input-field col s12 center">
						<a href="sign_up/user.php"><button class="btn waves-effect waves-light col s12" type="submit" name="action">CLIENT</button></a>
					</div>
					<div class="col s12 center">

                        <a href="sign_up/fa.php"><button class="btn waves-effect waves-light col s12" type="submit" name="action">ADVISOR</button></a>
					</div>
			  </div>
				
			</div>
		</div>
	  
	  </div>
</div>



</body>
</html>


<script>

</script>