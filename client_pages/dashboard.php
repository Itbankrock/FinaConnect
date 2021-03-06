<!DOCTYPE html>
<html>
    
<?php 
	require_once('../connectPDO.php');
	if(isset($_POST['login_user'])){
        $username= $_POST['login_username'];
        echo $username;
    }
?>

<head>
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
<style>
body {
 //  margin-top: 2em;
}

.transwhite{
background-color: rgba(255, 255, 255, 0.7);
}

#quote {
font-family: "Roboto", sans serif;
font-weight: 300;
  color:white;
}

.bannerimg{
height:100%;
}

.articletitle{
text-shadow: 2px 2px black;
}

</style>
</head>
<body>

<div>
	<!-- NAVBAR -->
	<!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="#!">Edit Info.</a></li>
	  <li class="divider"></li>
	  <li><a href="#!">Logout</a></li>
	</ul>
	<nav>
	  <div class="nav-wrapper">
		<a href="#!" class="brand-logo bannerimg"><img class="bannerimg" src="../assets/logo.png" /></a>
		 <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
		<li><a href="#">View Adviser</a></li>
		<li><a href="#">View Offers</a></li>
		<li><a href="#">View Articles</a></li>
		<li><a href="#">Financial Profiling</a></li>
		  <!-- Dropdown Trigger -->
		  <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
	  </div>
	</nav>
	
	<ul class="sidenav" id="mobile-demo">
    <li><a href="#">View Adviser</a></li>
		<li><a href="#">View Offers</a></li>
		<li><a href="#">View Articles</a></li>
		<li><a href="#">Financial Profiling</a></li>
		<li class="divider"></li>
		<li><a href="#!">Edit Info.</a></li>
	  <li><a href="#!">Logout</a></li>
  </ul>
	<!-- NAVBAR END -->
	
	<div class="row container" style="margin-top:2em;">
		<div class="col s4 m2">
			<a data-target="modal1" class="waves-effect waves-light btn-large btn modal-trigger"><i class="material-icons left">cloud</i>POST</a>
		</div>
	</div>
	
	<div class="row container">
		<div class="col s12 m12">
			<h3>News Articles</h3>
			<hr>
		</div>
	</div>
	
	<div class="row container">
		<div class="col s4 m3">
			<div class="card small">
				<div class="card-image">
				  <img src="../assets/article1.jpg">
				  <span class="card-title articletitle">How to Stocks</span>
				</div>
				<div class="card-content">
				  <p>A professional talks about the stock market in his show. This is especially important since Filipinos don't know how to invest in the stock market.</p>
				</div>
				<div class="card-action">
				  <a href="#" class="waves-effect waves-light btn white black-text">READ MORE</a>
				</div>
			  </div>
		</div>
		
		<div class="col s4 m3">
			<div class="card small">
				<div class="card-image">
				  <img src="../assets/article2.jpg">
				  <span class="card-title articletitle">Religious Impact</span>
				</div>
				<div class="card-content">
				  <p>Eli Soriano talks about the impact of the Church to the industry. His audience had a lot of interesting questions about the impact of the Church.</p>
				</div>
				<div class="card-action">
				  <a href="#" class="waves-effect waves-light btn white black-text">READ MORE</a>
				</div>
			  </div>
		</div>
		
		<div class="col s4 m3">
			<div class="card small">
				<div class="card-image">
				  <img src="../assets/article3.jpg">
				  <span class="card-title articletitle">The Mobile Industry</span>
				</div>
				<div class="card-content">
				  <p>The emergence of the mobile industry is inevitable. Smartphones are becoming more useful than personal computers nowadays.</p>
				</div>
				<div class="card-action">
				  <a href="#" class="waves-effect waves-light btn white black-text">READ MORE</a>
				</div>
			  </div>
		</div>
		
		<div class="col s4 m3">
			<div class="card small">
				<div class="card-image">
				  <img src="../assets/article4.jpg">
				  <span class="card-title articletitle">Humans Will be Irrelevant?</span>
				</div>
				<div class="card-content">
				  <p>Will the rise of Artificial Intelligence make the existence of humans irrelevant?</p>
				</div>
				<div class="card-action">
				  <a href="#" class="waves-effect waves-light btn white black-text">READ MORE</a>
				</div>
			  </div>
		</div>
		
		
	</div>
      

</div>



  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
          

</body>
</html>


<script>
$( document ).ready(function() {
    console.log( "ready!" );
	$(".dropdown-trigger").dropdown();
	$('.sidenav').sidenav();
	$('.modal').modal();
});

</script>