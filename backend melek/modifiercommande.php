<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i> Espace Admin </a>
                    </li>
                    <h3 class="menu-title"> Éléments IU</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li> -->
                            <li><i class="fa fa-table"></i><a href="table-client.html">Client</a></li>
                            <li><i class="fa fa-table"></i><a href="table-panier.html">Panier</a></li>
                            <li><i class="fa fa-table"></i><a href="table-produit.html">Produit</a></li>
                            <li><i class="fa fa-table"></i><a href="table-coaching.html">Coaching</a></li>
                            <li><i class="fa fa-table"></i><a href="table-marketing.html">Marketing</a></li>
                            <li><i class="fa fa-table"></i><a href="table-service.html">Service après-vente</a></li>
                        </ul>
                    </li>
                

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Graphiques</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="Gra_produit.html"> GraphiqueProduit</a></li>
                        
                        </ul>
                    </li>
                    
                    <h3 class="menu-title">Suppléments</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">S'identifier</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">S'inscrire</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Mot De Passe Oublier</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->
   

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
       
                </div>

            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row" style="justify-content: center;">
                    <div class="col-lg-6" >
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Catégorie</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <?PHP
include "../../entities/commandes.php";
include "../../core/commandeF.php";
if (isset($_GET['ref_cmd'])){
    
	$commandeF=new commandeF();
    $result=$commandeF->recuperertComm($_GET['ref_cmd']);
    $reference=$_GET['ref_cmd'];
    echo $reference;
  
	foreach($result as $row){
       
		$ref_prod=$row['ref_prod'];
		$username=$row['username'];
		$categorie=$row['categorie'];
        $prix_total=$row['prix_total'];
        $jour_arrivee=$row['jour_arrivee'];
      
    

   
?>
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Modifier Commande </h3>
                                        </div>
                                        <hr>
                                          <form action="modifier_co.php" method="post"   name="f" enctype="multipart/form-data" novalidate  id="f" onsubmit="return verif_commande()"  >
                                        
                                          
                                            <div class="form-group">
                                                <label >ref_prod</label>
                                                <input  class="form-control" type="number" name="ref_prod"  id="ref_prod" value="<?PHP echo $ref_prod ?>">
                                                <div id="ref_prod1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >prix total</label>
                                                <input  class="form-control" type="number" name="prix_total" id="prix_total" value="<?PHP echo $prix_total ?>">
                                                <div id="prix_total1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >jour d'arrivee</label>
                                                <input type="date" class="form-control" name="jour_arrivee" id="jour_arrivee"  value="<?PHP echo $jour_arrivee ?>" >
                                                <div id="jour_arrivee1" style="color: red;"></div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label> username</label>
                                                <input type="text" class="form-control" name="username" id="username"  value="<?PHP echo $username ?>" >
                                                <div id="username1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label> categorie</label>
                                                <input type="text" class="form-control" name="categorie" id="categorie"   value="<?PHP echo $categorie ?>" >
                                                <div id="categorie1" style="color: red;"></div>
                                            </div>
                                           
                                            
                                                <div>
                                                    <button type="submit" name="modifier" class="btn btn-lg btn-info btn-block"  value="modifier">
                                                       
                                                        <span >Modifier </span>
                                                        
                                                    </button>
                                                </div>
                                              
                                        </form>
                                        <?php
    }
}
                                        ?> 
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                 

                    <script >

function verif_commande(){
 var x=0;

  var erreur;
    var r;

    var ref_prod = document.getElementById("ref_prod");
    var prix_total = document.getElementById("prix_total");
    var jour_arrivee = document.getElementById("jour_arrivee");
    var username = document.getElementById("username");
    var categorie = document.getElementById("categorie");

      
      if(!ref_prod.value){
   
        document.getElementById("ref_prod").style.backgroundColor = "#FFA07A" ;
        document.getElementById("ref_prod1").textContent = " *La ref_prod est obligatoire!!!" ;
        if(x==0)
        {
              x=1;
        }
    }

    if(!prix_total.value){
       // erreur =" Veuillez renseigner un prix unitaire !!!";
        document.getElementById("prix_total").style.backgroundColor = "#FFA07A" ;
          document.getElementById("prix_total1").textContent = " *prix_total est obligatoire!!!" ;
        if(x==0)
        {
              x=1;
        }
    }
     if(!jour_arrivee.value){
        //erreur =" Veuillez renseigner la disponibilite !!!";
        document.getElementById("jour_arrivee").style.backgroundColor = "#FFA07A" ;
        document.getElementById("jour_arrivee1").textContent = " *La jour_arrivee est obligatoire!!!" ;
        if(x==0)
        {
              x=1;
        }
    }

    if(!username.value){
       // erreur =" Veuillez renseigner une description !!!";
        document.getElementById("username").style.backgroundColor = "#FFA07A" ;
          document.getElementById("username1").textContent = " *La username est obligatoire!!!" ;
        if(x==0)
        {
              x=1;
        }
    }

    if(!categorie.value){
       // erreur =" Veuillez renseigner une quantitée !!!";
        document.getElementById("categorie").style.backgroundColor = "#FFA07A" ;
         document.getElementById("categorie1").textContent = " *La categorie est obligatoire!!!" ;
        if(x==0)
        {
              x=1;
        }
    }
      
    
      if(username.value.length <2 ||username.value.length>25 )
    {
        document.getElementById("username").style.backgroundColor = "#FFA07A" ;
        document.getElementById("username1").textContent = " *username de catégorie non acceptable!!!" ;
        if(x==0)
        {
              x=1;
        }   
    }
    if(isNaN(categorie.value.length <2)|| categorie.value.length>25)
    {
        document.getElementById("categorie").style.backgroundColor = "#FFA07A" ;
        document.getElementById("categorie1").textContent = " * pricategoriex  non acceptable!!!" ;
        if(x==0)
        {
              x=1;
        }
    }
   
    

      if(x==1)
{
   return false;
}
else
{
   return true;

    }

}
</script>
                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
                     
</body>
</html>
