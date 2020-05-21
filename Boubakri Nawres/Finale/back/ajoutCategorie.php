<?PHP
include "../../entities/categorie.php";
/*include "../../core/categorieC.php";*/
include "../../core/productC.php";

if (isset($_GET['cat']) and isset($_GET['ref_cat']) and isset($_GET['generation']) and isset($_GET['marque']) and isset($_GET['size']) and isset($_GET['couleur']) and isset($_GET['stock']) ){
	
	$ref=rand(1000000000,9999999999).'.'.$_GET['cat'];



$categorie1=new Categorie($_GET['cat'],$ref,$_GET['generation'],$_GET['marque'],$_GET['size'],$_GET['couleur'],$_GET['stock']);

$categorie1C=new CategorieC();
$categorie1C->ajouterCategorie($categorie1);
/*header('Location: afficherProduit.php');*/

header('Location: table-produit.php');	
}


?>
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
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Ajouter Catégorie </h3>
                                        </div>
                                        <hr>
                                        <form action="ajoutCategorie.php"nom="f" id="f" method="GET" novalidate  onSubmit="return verif_Categorie()" >
                                            
                                            <div class="form-group">
                                                <label >Nom Catégorie</label>
                                                <input type="text" class="form-control" id="cat" name="cat" required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" placeholder="Entrez le nom de la catégorie " size="25" >
                                               <div id="cat1" style="color: red;"></div>
                                            </div>
                                             <div class="form-group">
                                                <label >Référence Catégorie</label>
                                                <input type="number" class="form-control" id="ref_cat" name="ref_cat" required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" placeholder="Entrez la référence de la catégorie" maxlength="10" minlength="2">
                                               <div id="ref1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Génération</label>
                                                <input type="text" class="form-control" id="generation" name="generation"required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" minlength="2" maxlength="10" >
                                                <div id="gen" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Marque</label>
                                                <input type="text" class="form-control" id="marque" name="marque" required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" minlength="2" maxlength="10">
                                                <div id="mrq" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Size</label>
                                                <input type="text" class="form-control" id="size" name="size" required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" minlength="2" maxlength="10">
                                                <div id="size1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Couleur</label>
                                                <input type="text" class="form-control" id="couleur"name="couleur" required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" minlength="2" maxlength="10">
                                                <div id="couleur1" style="color: red;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label >Stock</label>
                                                <input type="number" class="form-control" id="stock" name="stock" required="required" autocomplete='off' class="form-control col-md-7 col-xs-12" minlength="1" >
                                                <div id="stock1" style="color: red;"></div>
                                            </div>
                                            
                                           
                                            
                                                <div>
                                                    <button type="submit" class="btn btn-lg btn-info btn-block" name="ajouter" value="ajouter">
 
                                                        <span >Ajouter </span>
                                                        
                                                    </button>
                                                </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
<script type="text/javascript">
     function verif_Categorie(){
       var x= 0 ;
     

        var cat = document.getElementById("cat");
        var ref_cat = document.getElementById("ref_cat");
        var generation = document.getElementById("generation");
        var marque= document.getElementById("marque");
        var size = document.getElementById("size");
        var couleur = document.getElementById("couleur");
        var stock = document.getElementById("stock");
     
         

          
         if(!cat.value){
         
            document.getElementById("cat1").textContent = " * Le nom de la catégorie est obligatoire !!!" ;
            document.getElementById("cat").style.backgroundColor = "#FFA07A" ;

            if(x==0)
            {
                  x=1;
            }

        }

         if(!ref_cat.value){
            document.getElementById("ref_cat").style.backgroundColor = "#FFA07A" ;
            document.getElementById("ref1").textContent = " *La référence est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }

        }

         if(cat.value.length <2 ||cat.value.length>25 )
        {
            document.getElementById("cat").style.backgroundColor = "#FFA07A" ;
            document.getElementById("cat1").textContent = " *nom de catégorie non accepté!!!" ;
            if(x==0)
            {
                  x=1;
            }   
        }
         if(!generation.value){
        
            document.getElementById("generation").style.backgroundColor = "#FFA07A" ;
             document.getElementById("gen").textContent = " *L'indication de la génération est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
         if(isNaN(ref_cat.value) || ref_cat.value.length<2 || ref_cat.value.length>10 )
        {
            document.getElementById("ref_cat").style.backgroundColor = "#FFA07A" ;
            document.getElementById("ref1").textContent = " la référence n'est pas valide !!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
         if(!marque.value){
          
            document.getElementById("marque").style.backgroundColor = "#FFA07A" ;
            document.getElementById("mrq").textContent = " *L'indication de la marque est obligatoire!!!"; 
            if(x==0)
            {
                  x=1;
            }
        }
         if(!size.value){
          
            document.getElementById("size").style.backgroundColor = "#FFA07A" ;
            document.getElementById("size1").textContent = " *L'indication de la size est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
     
           if(!couleur.value){
       
            document.getElementById("couleur").style.backgroundColor = "#FFA07A" ;
              document.getElementById("couleur1").textContent = " *L'indication de couleur  est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
          if(isNaN(stock.value)|| stock.value<0 )
        {
            document.getElementById("stock").style.backgroundColor = "#FFA07A" ;
            document.getElementById("stock1").textContent = " * nombre de stock  non acceptable!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }

    
       if(!stock.value){
             document.getElementById("stock1").textContent = " *L'indication de stock est obligatoire!!!" ;
              document.getElementById("stock").style.backgroundColor = "#FFA07A" ;
           if(x==0)
           {
            x=1;
           }
          
        }
    
     if(cat.value.length <2 ||cat.value.length>25 )
        {
            document.getElementById("cat").style.backgroundColor = "#FFA07A" ;
            document.getElementById("cat1").textContent = " *nom de catégorie non acceptable!!!" ;
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
