
<?php
//Connexion de l'utilisateur

//Démarage de la session
session_start();

//si le bouton submit est activé
if(isset($_POST['submit']))
{
	//recupération du mail
	$mail=$_POST['mail'];
	$_SESSION['mail']=$mail;
	$password=$_POST['password'];
	$serveur="localhost";
    $login="root";
    $pass="";
	$id='';
	
	//Vérifie si les variables sont renseignés
	if($mail&&$password)
	{
			try{
			//connexion à la bdd via pdo
            $connexion= new PDO("mysql:host=$serveur;dbname=boutique1",$login,$pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			//Requete recherchant le mail et le mot de passe associé à l'utilisateur
            $reg=$connexion->prepare("SELECT * FROM users WHERE mail='$mail' && password='$password'");
           	$reg->execute();
           	$rows= $reg->rowCount();



				// nombre de ligne = 1 utilisateur trouvé
	            if($rows==1)
	            {

					$row=$reg->fetch(PDO::FETCH_ASSOC);

				//Récupération des données dans la variable globale $_SESSION
				$_SESSION['id']=$row['id'];
				$_SESSION['username']=$row['username'];
				$_SESSION['sexe']=$row['sexe'];
				$_SESSION['password']=$row['password'];	
					
				//page redirigé vers l'index	
				header("Location: index.php");


	        	}else{
					//erreur de saisie
	        		echo"Pseudo ou password incorrect";
	        	}


           


        	}

        catch(PDOExeption $e){
            echo 'Echec : ' .$e->getMessage();
        }
	}
}


?>

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
 <!--Menu-->
 <div class="container-fluid">
  <div class="row">
	<nav class="col-md-12 navbar navbar-expand-lg navbar-dark">
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
      		<li class="nav-item active">
        		<a class="nav-link" href="index.html">Accueuil</a>
      		</li>
      		<li class="nav-item active">
       			 <a class="nav-link" href="article-femme.html">Femme</a>
      		</li>
      		<li class="nav-item active">
        		<a class="nav-link" href="article-homme.html">Homme</a>        
     		</li>
     		<li class="nav-item active">
             <?php
           
            //Si la variable $_SESSION est renseigné
            if (isset($_SESSION['username'])){
                    // lien vers le fichier deconnexion 
                    echo"<a class='nav-link' href='logout.php'>Deconnexion</a>";
                    echo"</li>";
                    echo"<li class='nav-item active'>";
                    echo"<a class='nav-link'>Bienvenue ".$_SESSION['username']."</a>";
                    
                }else{
                    // lien vers le fichier connexion
                    echo"<a class='nav-link' href='login1.php'> Connexion</a>";
                    echo"</li>";
                    echo"<li class='nav-item active'>";
                    echo"<a class='nav-link' href='register.php'>Inscription</a>";

            }
            ?>
        		      
     		</li>      
      </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-none my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>
</div>
</div>
<fieldset>
<legend align="center"><FONT color="black">Connectez-vous</FONT></legend>
	<form method="POST" action="login1.php">
		<div align="center" margin-top="400px%">
		<br/>
	
		<input type="text" name="mail" placeholder="Mail">
		</br>
		</br>
		<input type="password" name="password" placeholder="Mot de passe">
		<br/>
		<br/>



		<input type="submit" value="Se connecter" name="submit">

	</div>
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