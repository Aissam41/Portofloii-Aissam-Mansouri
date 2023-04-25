
<?php

session_start();
if(!isset($_SESSION['visits'])){
    $_SESSION['visits'] = 1;
} else {
    $_SESSION['visits']++;
}
setcookie('visits', $_SESSION['visits'], time() + (86400 * 30), "/"); // cookie valable 30 jours
// echo "Nombre de visiteurs : " . $_SESSION['visits'];

if(empty($_SESSION['name'])&&empty($_SESSION['email'])&&empty($_SESSION['msg']))
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Aissam Mansouri</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <!-- Bootstrap CSS -->
    <!-- Inclusion des fichiers CSS et JS de Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" href="style.css"> -->
<style>
    body {
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      height: 100%;
    }
    /* Styles pour le contenu */
    .container {
      padding-top: 20px;
      text-align: center;
      border: #000 solid 2px;
      background-color: #808080;
      
    }
    h1 {
      font-size: 3em;
      font-weight: bold;
      text-shadow: 2px 2px #000;
    }
    p {
      font-size: 2em;
      text-shadow: 1px 1px;
    }
   
    .container{
      margin-top: 60px;
    }
    .clr{
      color: #1a0000;
    }
    h3{
      color: #000;
    }
    a{
      color: #000;
      font-size: 19px;



    }
    
</style>
	
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Aissam Mansouri</a>
        <button class="navbar-toggler" onclick="afficherMenu()" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="fin.php">Page final</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- -->
    <script>
      
function afficherMenu() {
  var menu = document.getElementById("navbarNav");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
}
        </script>
    
    <!-- -->
    <br><br><br><br><br>
	<div class="container my-4 text-center">
		<div class="row">
			<div class="col">
				<h2>Je vous remercie pour votre considération</h2>
			<p>Merci beaucoup <span class='clr'><?php echo $_SESSION['name'];?> </span>pour votre message ,n'hésiter Pas votre message Sera traité prochainement par retour de Mail <span class='clr'> <?php echo $_SESSION['email'];?></span>.</p>
			</div>
		</div>
	</div>
<br><br><br><br>
  <footer class="bg-dark text-light py-4">
  <div class="container ">
    <h3>Pour d'autre information Conectez avec nous</h3>
  <div class="row">
    <div class="col-sm-4">
      <h3><a href="https://www.facebook.com/issaam.mansouri/"><img src="R.png" width="20px"/> Facebook</a></h3>
    </div>
    <div class="col-sm-4">
      <h3><a href="https://www.instagram.com/issam_mansouri____7/"><img src="O.jpeg" width="20px"/> Instagram</a></h3>
    </div>
    <div class="col-sm-4">
      <h3><a href="https://www.linkedin.com/in/issam-mansouri-2411b222a/"><img src="L.png" width="20px"/> LinkedIn</a></h3>        
    </div>
  </div>
  
</div>
<div class="text-center ">
                <p><div>&copy; 2023 Aissam Mansouri</div></p>
              </div>
 </footer>



  </body>
</html>

