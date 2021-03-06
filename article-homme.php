<!DOCTYPE html>
<html>
<head>
	<title>menu</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php 
        session_start();
        if(isset($_GET['p1'])){
            $para=$_GET['p1'];
        }
        if (isset($_SESSION['username'])){
            $recupsexe=$_SESSION['sexe'];
            if ($recupsexe=="feminin"){
                    echo"<link rel='stylesheet' type='text/css' href='site-menu1.css'>";
            }else{
                    echo"<link rel='stylesheet' type='text/css' href='site-menu2.css'>";
            }

        }else{
            echo"<link rel='stylesheet' type='text/css' href='site-menu.css'>";
        }

        ?>
        
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script href="bootstrap.min.js"></script>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
  <!--Menu-->
  <div class="container-fluid">
  <div class="row">
	<nav class="col-md-12 navbar navbar-expand-lg navbar-dark">
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
      		<li class="nav-item active">
        		<a class="nav-link" href="index.html">Accueil</a>
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

<!--galerie-->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-3.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-4.jpg">
                    </a>
                    
                    <a class="add-to-cart" href="">Ajouter au panier</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Vêtement haut 1</a></h3>
                    <span class="price">59.99 E</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
              <div class="product-image2">
                  <a href="#">
                      <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-7.jpg">
                      <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-8.jpg">
                  </a>
                  
                  <a class="add-to-cart" href="">Ajouter au panier</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Vêtement haut 2</a></h3>
                    <span class="price">54.99 E</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-5.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-6.jpg">
                    </a>
                    
                    <a class="add-to-cart" href="">Ajouter au panier</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Vêtement haut 3</a></h3>
                    <span class="price">32.99 E</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-5.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-6.jpg">
                    </a>
                    
                    <a class="add-to-cart" href="">Ajouter au panier</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Vêtement haut 4</a></h3>
                    <span class="price">25.99 E</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-2.jpg">
                    </a>
                    
                    <a class="add-to-cart" href="">Ajouter au panier</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Vêtement haut 5</a></h3>
                    <span class="price">52.99 E</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
              <div class="product-image2">
                  <a href="#">
                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-3.jpg">
                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-4.jpg">
                  </a>
                  
                  <a class="add-to-cart" href="">Ajouter au panier</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Vêtement haut 6</a></h3>
                    <span class="price">28.99 E</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-3.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-4.jpg">
                    </a>
                    
                    <a class="add-to-cart" href="">Ajouter au panier</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Vêtement haut 7</a></h3>
                    <span class="price">78.99 E</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-2.jpg">
                    </a>
                    
                    <a class="add-to-cart" href="">Ajouter au panier</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Vêtement haut 8</a></h3>
                    <span class="price">8.99 E</span>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

    <!--Footer-->
        <section id="footer">
        <div class="container-fluid">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
          <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
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
