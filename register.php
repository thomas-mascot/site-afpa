<?php

if(isset($_POST['submit']))
{
  $username=trim(stripslashes(strip_tags($_POST['username'])));
  $sexe=trim(stripslashes(strip_tags($_POST['sexe'])));
	$mail=trim(stripslashes(strip_tags($_POST['mail'])));
	$password=trim(stripslashes(strip_tags($_POST['password'])));
	$repeatpassword=trim(stripslashes(strip_tags($_POST['repeatpassword'])));

    //Variable utilisée pour la connexion à la bdd
        $serveur="localhost";
        $login="root";
        $pass="";
		$id='';
	// Vérifie si la chaine ressemble à un email
  if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {	
      // verifie si les variables sont vides
      if($username&&$mail&&$password&&$repeatpassword)
      {
        // verifie si la saisie du mot de passe est = au mot de passe répété
        if($password==$repeatpassword)
        {
          /*$password=md5($password);*/

          try{
          //Connexion à la base de donnée phplogin
                $connexion= new PDO("mysql:host=$serveur;dbname=boutique1",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
          //preparation de la requete qui recherche si le nom saisi existe
              $reg=$connexion->prepare("SELECT * FROM users WHERE username='$username'");
              $reg->execute();
              $rows= $reg->rowCount();
          echo $rows;
          
          // si le nombre de ligne = 0 on ajoute les données du formulaire dans la table users
                if($rows==0)
                {
          
                $requete=$connexion->prepare("INSERT INTO users(username,sexe,mail,password) VALUES('$username','$sexe','$mail','$password')");

          $requete->execute();
          $_SESSION['username']=$username;
          

            header("location:login1.php");

              }else{
            // pseudo indisponible nombre de ligne > 0 il existe dejà dans la table users
                echo"Ce pseudo n'est pas disponible";
              }


              


            }

            catch(PDOExeption $e){
                echo 'Echec : ' .$e->getMessage();
            }

          
          

          
        }else{
          //password=!repeatpasword
          echo"Les 2 passwords doivent être identique";

        }
      }else{
        // champ obligatoire non saisie
        echo"Remplissez tous les champs";

      }
  }else{
    $message='Votre mail est invalide !';
    header("location:register.php?p1=".$message);
  }
}


?>




<!DOCTYPE html>

<html>


<head>
<title>menu</title>
<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="site-menu.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script href="bootstrap.min.js"></script>		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body align="center">
<!-- fieldset permet d'entourée en arrondi -->
<fieldset style="width:100%;">
<!-- legend permet de mettre un titre au fieldset -->
<legend><FONT color="white">Inscription</FONT></legend>

<!-- Formulaire d'inscription-->
	<form method="POST">
		
		<input type="text" name="username" placeholder="pseudo">

 
		<input type="text" name="mail" placeholder="mail">
		<SELECT name="sexe" size="2">
        <OPTION>feminin
        <OPTION>masculin

    </SELECT>
		
		<input type="password" name="password"placeholder="mot de passe">

		<input type="password" name="repeatpassword" placeholder="répétez le mot de passe"></br></br>

		<input type="submit" value="s'inscrire" name="submit">


	</form>
</fieldset>

<!--Footer-->
<section id="footer">
        <div class="container-fluid">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>IMPORTANT</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fas fa-arrow-right"></i>Qui sommes-nous?</a></li>
              <li><a href="javascript:void();"><i class="fas fa-question"></i>FAQ</a></li>
              <li><a href="javascript:void();"><i class="fas fa-video"></i>Videos</a></li>
              <li><a href="javascript:void();"><i class="fas fa-at"></i>Nous contacter</a></li>            
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>UTILE</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fas fa-truck"></i>Retours & Livraisons</a></li>
              <li><a href="javascript:void();"><i class="fas fa-money-check-alt"></i>Remboursements</a></li>
              <li><a href="javascript:void();"><i class="fab fa-cc-mastercard"></i>Mastercard</a></li>
              <li><a href="javascript:void();"><i class="fab fa-cc-visa"></i>Visa</a></li>
              <li><a href="javascript:void();"><i class="fab fa-paypal"></i>Paypal</a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>SECURITE</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fas fa-user"></i>Votre compte</a></li>
              <li><a href="javascript:void();"><i class="fas fa-lock"></i>Connecxion sécurisée</a></li>
              <li><a href="javascript:void();"><i class="fas fa-star"></i>Club Premium</a></li>            
            </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="https://www.afpa.fr/centre/centre-d-arras">Afpa Arras</a></u></p>
          <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Afpa web 2018</a></p>
        </div>       
     </hr>
      </div>  
    </div>
      </section>
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
