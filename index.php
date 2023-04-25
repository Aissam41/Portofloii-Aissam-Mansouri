<?php $_SESSION=array();


?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Aissam Mansouri</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap\css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="c.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 

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
    }
    h1 {
      font-size: 2em;
      font-weight: bold;
      text-shadow: 2px 2px #000;
    }
    p {
      font-size: 2em;
      text-shadow: 1px 1px;
    }
    .fixed-menu {
    position: fixed;
    top: 0;
    width: 100%;
    background-color: #fff;
    z-index: 999;
}
.mobile-nav-active .mobile-nav{
  opacity:1;
  visibility: visible;
}
.mobile-nav-active {
overflow:hidden;
}
.fixed-menu ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 10px;
}
button{
  background-color: #808080;
  font-size: 18px;
  font-weight: bold;
}

.fixed-menu li {
  margin: 0 10px;
}

.fixed-menu a {
  text-decoration: none;
  font-weight: bold;
  font-size: 18px;
  
}






  </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-menu">
        <a class="navbar-brand" href="#">Aissam Mansouri</a>
        <button class="navbar-toggler" onclick="afficherMenu()"  type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#apropos">À propos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#projets">Projets</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#CV">Curriculum Vitae</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
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
    </header>
    <main>
      <section id="apropos" class="container my-5">
      <div class="container">
      <div align='center'>
    <img src="Aissam.JPG" alt="Ma superbe image"  width="200px" height="200px"><br>
        <h1>À propos de moi</h1>
        <p>Bonjour, je m'appelle Mansouri Aissam et je suis développeur web.
           J'aime construire des applications web et mobiles,
            et je suis toujours à la recherche de nouveaux projets sur lesquels travailler.</p>
            </div></div>
      </section>
      
      <section id="projets" class="container my-5">
        <h1>Mes projets</h1><br>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4">
              <img class="card-img-top" src="cafe.jpg" alt="Capture d'écran du projet 1">
              <div class="card-body">
                <h5 class="card-title">Gestion de cafée</h5>
                <p class="card-text">Description du projet 1.</p>
                <a href="rapp.pdf" download="rapp.pdf" class="btn btn-primary">Voir le rapport de Gestion de cafée</a>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-6">
            <div class="card mb-4">
               <img class="card-img-top" src="projet2.jpg" alt="Capture d'écran du projet 2"> 
               <div class="card-body">
                <h5 class="card-title">Projet 2</h5>
                <p class="card-text">Description du projet 2.</p>
                <a href="#" class="btn btn-primary">Voir le projet</a>
              </div>
            </div>
          </div> 
         </div>  -->
</section>
<section id="CV" class="container my-5">
  <h1>Curriculum Vitae</h1>
   <p class="text-senter">Je vous invite cordialement à consulter mon CV.
     Vous y trouverez des informations détaillées sur mon parcours
     professionnel, mes compétences, mes réalisations et mes qualifications.
     Télécharger mon CV est facile et rapide, il vous suffit de  cliquer
     sur ce bouton de <a href="Cv.pdf" download="Cv.pdf" id="Tel">
     <button>téléchargement </button></a>. 
     Je suis convaincu que vous apprécierez l'expérience et 
     les connaissances que j'ai acquises au cours de ma carrière,
      et que mon CV vous donnera une bonne idée de ce que 
      je peux apporter à votre entreprise .</p>
</section>
      <footer class="bg-dark text-white">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5">
                  <h5>À propos de moi</h5>
                  <p></p><div>travaller sur Back-End .</div><p>
                </div>
                <div class="col-md-3">
                  <h5>Liens pour conecter avec moi</h5>
                  <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/issaam.mansouri/"><img src="R.png" width="20px"/> Facebook</a></li>
                    <li><a href="https://www.instagram.com/issam_mansouri____7/"><img src="O.jpeg" width="20px"/> Instagram</a></li>
                    <li><a href="https://www.linkedin.com/in/issam-mansouri-2411b222a/"><img src="L.png" width="20px"/> LinkedIn</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h5></h5>
                  <ul class="list-unstyled">
                    <li>Adresse   : Marrackech sidi Abad 2</li>
                    <li>Téléphone : +212650324741</li>
                    <li>Courriel  : aissammansouri1999@gmail.com</li>
                  </ul>
                </div>
              </div>
              <hr>
              <div class="text-center">
                <p>&copy; 2023 Aissam Mansouri</p>
              </div>
            </div>
          </footer>
</body>
</html>
