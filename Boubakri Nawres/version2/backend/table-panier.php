
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
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
 
    <!-- Left Panel -->
    <?php
     
     include "../../core/commandeF.php";
         
           // $commande1F=new commandeF();
         //  $listeCommandes=$commande1F->afficherComs();
        
     ?>

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
                            <li><i class="fa fa-table"></i><a href="table-panier.php">Panier</a></li>
                            <li><i class="fa fa-table"></i><a href="table-produit.php">Produit</a></li>
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
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">vous avez 3 Notifications</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Serveur # 1 surchargé.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Serveur #2  surchargé.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Serveur # 1 surchargé.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">vous avez 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right"> Juste maintenant </span>
                                        <p>salut,c'est un  example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right"> Il y a 5 minutes</span>
                                        <p>salut,c'est un  example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right"> Il y a 10 minutes </span>
                                        <p>salut,c'est un  example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">Il y a 15 minutes </span>
                                        <p>salut,c'est un  example msg</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Mon Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> paramétre</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Se déconnecter</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        
     
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Espace Admin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Espace Admin</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active"> table de donnée  </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


          <!-- debut tab1 -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">COMMANDES</strong>
                            </div>
                            <div class="card-body">

                                <!-- debut trier -->
                            <table class="table table-striped jambo_table bulk_action" id="bootstrap-data-table-export" >
                        <thead>
                            <tr>
                                 <form  method="GET" action="table-panier.php" >
                        <select name="s" id="s" value="" placeholder="Street address" id="billing_address_1"  class="input-text ">
                                       <option value=""></option>
                                       <option value="ref_prod">ref_prod</option>
                                       <option value="username">username</option>
                                       <option value="prix_total">prix_total</option>
                                 </select>

                                      <input type="submit" name="trier" value="trier"> 
                                    

                                
                                     
 </form>
 <!-- choix de trier -->
 <?PHP  
                                  

                $commande1F=new commandeF();

               if (isset($_GET["s"])){
               
                $listecommandeF=$commande1F->trierCommande($_GET["s"]);
            
            
               }
               elseif(isset($_GET["k"])){
   
                $listecommandeF=$commande1F->searchCommande($_GET["k"]);
            
            
               }
               else
               {
                $listecommandeF=$commande1F->afficherComs();
               }


        ?>
                         
                        </thead>
                        </table>
                        <!-- fin trier ---> 


                        <!-- debut search tableau 1 -->
     

                        <form  method="GET" action="table-panier.php" >
                                    <div style="margin-top:3%;margin-left:5%;border-radius: 5%;">
                                    <label>Search : </label><input type="search" name="k">
                                    <input type="submit" name="search" value="search" style="margin-top:3%;margin-left:5%;border-radius: 5%;"> 
                                  </div>

            </form>
            
                        </thead>

                         <!-- fin search -->

                         
                                 <!-- debut affichage tableau 1 -->
                                <table   class="table table-striped table-bordered"  >
                                
                                <thead>
                                       
                                        <tr>
                                            <th>ref_cmd</th>
                                            <th>ref_prod</th>
                                            <th>username</th>
                                            <th>categorie</th>
                                            <th>prix_total</th>
                                            <th>jour_arrivee</th>
                                            <th>mod_paiement</th>
                                            <th> supprission</th>
                                            <th> modification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                    <?php
                                           foreach($listecommandeF as $row){
                                        ?>
                                      
                                        <tr>
                                      
                             <td><?PHP echo $row['ref_cmd']; ?></td>
	                     <td><?PHP echo $row['ref_prod']; ?></td>
	                     <td><?PHP echo $row['username']; ?></td>
	                      <td><?PHP echo $row['categorie']; ?></td>
                         <td><?PHP echo $row['prix_total']; ?></td>
                     <td><?PHP echo $row['jour_arrivee']; ?></td>
                            <td><?PHP echo $row['mod_paiement']; ?></td>
                            <td>
                            <form method="POST"
                    action="supprimercommandes.php">
	<input type="submit" name="supprimer"
           value="supprimer" class="btn btn-primary btn-lg" style="margin-top:3%;margin-left:5%;border-radius: 5%;">
                                           </td>
	<input  type="hidden" value="<?PHP echo $row['ref_cmd']; ?>" name="ref_cmd">
	</form>
    <td><a href="modifiercommande.php?ref_cmd=<?PHP echo $row['ref_cmd']; ?>">
	Modifier</a></td>
    

                                        </tr>

                                       
                                    </tbody>
                                    <?php
          }
        
          ?>
          
                                </table>
                                </form>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

  <!-- fin affichage tableau 1 -->
                     <!-- debut tab2 -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">LIVRAISON</strong>
                            </div>
                            <div class="card-body">
                                  <!-- debut trier tab2 -->
                            <table class="table table-striped jambo_table bulk_action" id="bootstrap-data-table-export" >
                        <thead>
                            <tr>
                                 <form  method="GET" action="table-panier.php" >
                        <select name="m" id="m" value="" placeholder="Street address" id="billing_address_1"  class="input-text ">
                                       <option value=""></option>
                                       <option value="ref_cmd">ref_cmd</option>
                                       <option value="Destination">Destination</option>
                                       <option value="code_postal">code postal</option>
                                 </select>

                                      <input type="submit" name="trier" value="trier"> 
                                    

                                
                                     
 </form>
 <!-- choix de trier tab 2 -->
 <?PHP  

              

                $livraison1F=new livraisonF();

               if (isset($_GET["m"])){
               
                $listelivraison=$livraison1F->trierli($_GET["m"]);
            
            
               }
               else
               {
                $listelivraison=$livraison1F->afficherlis();
               }


        ?>
        
                        </table>
                        <!-- fin trier tab2 ---> 
                                  <!-- debut affichage tableau2 -->
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Num_Livraison</th>
                                            <th>ID_Commande</th>
                                            <th>Destination</th>
                                            <th>code postal</th>
                                            <th>periode_arrivee</th>
                                            <th>suppression</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                              
                         foreach($listelivraison as $row){
                                        ?>
                                        <tr>
                                      
                           
	                     <td><?PHP echo $row['num_livraison']; ?></td>
	                     <td><?PHP echo $row['ref_cmd']; ?></td>
	                      <td><?PHP echo $row['destination']; ?></td>
                         <td><?PHP echo $row['code_postal']; ?></td>
                          <td><?PHP echo $row['periode_arrivee']; ?></td>
                          
                          <td>
                          <form method="POST"
                    action="supprimerlivraison.php">
	<input type="submit" name="supprimer"
           value="supprimer" class="btn btn-primary btn-lg" style="margin-top:3%;margin-left:5%;border-radius: 5%;">
                                           </td>
	<input  type="hidden" value="<?PHP echo $row['num_livraison']; ?>" name="num_livraison">
	</form>
                                           </td>

                                        </tr>
                                       
                                    </tbody>
                                    <?php
          }
     
                   ?>
                                </table>
                                <!-- fin affichage tableau 2-->
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>