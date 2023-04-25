<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">

  <head>
    <title>Aissam Mansouri</title>
    <meta charset="UTF-8">
    <meta name="portfoloi" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
      #navbarNav{
      font-size: 20px;
    } 

      .span
  {
     color : red;
     font-family: Arial, Helvetica, sans-serif;
     box-shadow: red 2px 2px 10px;
    }
    .navbar-toggler-icon{
      color: black;
      box-shadow: black 2px 2px 2px;
      font-size: 40px;
    }

    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"> Aissam Mansouri</a>
        <button class="navbar-toggler" onclick="afficherMenu()" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">À propos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
 
      </section>  
      <form method="POST" action="contact.php">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" value="" class="form-control" name='name' id="name" placeholder="Enter your name">
          <span> <?php VerifNam(); ?></span>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name='email' id="email" placeholder="Enter your email">
          <span> <?php  $a=1; VerifEmail();$a=ValidEmail();?></span>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name='msg' rows="5" placeholder="Enter your message"></textarea>
          <span> <?php VerifMsg(); ?></span>
        </div>
        <button type="submit" name='sub' class="btn btn-primary">Submit</button>
      </form>
      
  <?php ValiderForm(); ?>

</body>
</html>
<?php 
function VerifNam()
{
  if(isset($_POST['sub']))
  { 
  if(empty($_POST['name']))
  {
    echo 'Le nom doit être rempli!!';
  }elseif(!empty($_POST['name'])){
    echo ' ';
  }
  }

}
function VerifMsg()
{
  if(isset($_POST['sub']))
  { 
  if(empty($_POST['msg']))
  {
    echo 'Le message doit être rempli !!';
  }elseif(!empty($_POST['msg'])){
    echo ' ';
  }
  }

}function VerifEmail(){
  if(isset($_POST['sub']))
  { 
  if(empty($_POST['email']))
  {
    echo 'Le email doit être rempli !!';
  }elseif(!empty($_POST['email'])){
    echo ' ';
  }
  }
}
ValiderForm();
function ValiderForm(){
  if(isset($_POST['sub'])){
  if($GLOBALS['a']!=0 && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg']))
  {
   require'user.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    $_SESSION['email']=$email;
    $_SESSION['name']=$name;
    $_SESSION['msg']=$msg;
    $personne=new user($name,$email,$msg);
    $personne->EnvoiyeeEmail();
    unset($personne);
   unset($_POST['sub']);
  //  header("location:fin.php");
 echo "<script>
  window.location.href='fin.php'
  </script>";
  }
}
}
function ValidEmail(){
$email=0;
if(isset($_POST['sub'])&&!empty($_POST['email']))
{
$email=$_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL) && strpos($email, '@gmail.com') !== false) {
   return 1;
} else {
  echo "Ce n'est pas une adresse Gmail valide";
  return 0;
}
}
}
?>
    <!-- -->

<script>
function afficherMenu() {
  var menu  = document.getElementById("navbarNav");

  if (menu.style.display === "none") {
    menu.style.display = "block";
    menu.style.fontSize='60px';
  } else {
    menu.style.display = "none";
    menu.style.fontSize='20px';
  }
}
 function boutonAffiche(identifiant) {
  var bouton = document.getElementById(identifiant);
  if (bouton && bouton.offsetParent !== null) {
    return true;
  } else {
    return false;
  }
}
  var a=boutonAffiche('butm');

function changeFontSize() {
  var inputs = document.getElementsByTagName("input");
  var labels = document.getElementsByTagName("label");

  for (var i = 0; i < inputs.length; i++) {
    labels[i].style.fontSize = 30 + "px";
    inputs[i].style.width=   500 + 'px';
    inputs[i].style.height = 100+ 'px';

  }

}

changeFontSize();
// var i = document.getElementsByTagName("input");
// var  b = document.getElementsByTagName("textarea");
// i[2].style.fontSize='50px';
// b.style.fontSize='50px';




        </script>
    <!-- -->      