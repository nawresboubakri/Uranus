<?php
include "../../core/produitC.php";
include "../../core/categorieC.php";
//include "core/offresC.php";
$prod= new produitC();
$listeProduits=$prod->afficherProduits();
$Catc= new categorieC();
$listeCategories=$Catc->afficherCategories();

//$liste_offres=$offresc->afficherOffres();
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
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
   

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
  
</head>
<style>.table-sortable th {
  cursor: pointer;
}

.table-sortable .th-sort-asc::after {
  content: "\25b4";
}

.table-sortable .th-sort-desc::after {
  content: "\25be";
}

.table-sortable .th-sort-asc::after,
.table-sortable .th-sort-desc::after {
  margin-left: 5px;
}

.table-sortable .th-sort-asc,
.table-sortable .th-sort-desc {
  background: rgba(0, 0, 0, 0.1);
}
.buscar-caja { 
  position: absolute; 
  
  top:10% ;
  background: #fff; 
  border-radius: 40px; 
  padding: 10px; 
} 
.buscar-caja:hover > .buscar-txt 
{
  width: 240px; 
  padding: 0 6px; 
} 
.buscar-caja:hover > .buscar-btn {
  background: white; 
  color: black; 
} 

.buscar-btn { 
  
  float: right; 
  width: 40px; 
  height: 40px; 
  border-radius: 50%; 
  
  display: flex; 
  justify-content: center; 
  align-items: center; 
  transition: 0.4s; 
  color: white; 
  cursor: pointer; 
} 
.buscar-btn > i 
{ 
  font-size: 18px; 
} 
.buscar-txt { 
  border: none; 
  background: none; 
  outline: none; 
  float: left; 
  padding: 0; 
  color: #333; 
  font-size: 16px; 
  transition: 0.4s; 
  line-height: 40px; 
  width: 0px; 
  font-weight: bold; 
}

.btn-primary{
    background: #fff;
    color: #CB356B;
    border: none;
}

</style>
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
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="Gra_offres.php"> Graphique_Offres</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="calandrier.php"> calender</a></li>
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

                                 <a onclick="window.print();" class="btn btn-primary" id="print-btn"> <img alt="avatar" src="images/avatar/print.png" height="30" width="30"></a>
                           
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

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Produits </strong>
                            </div>
                            <div class="card-body">
                               <!--Bouton recherche                               -->
                               <div style=" transform:translate(0%,5%); ">
                                    <div class="buscar-caja" > 
        <input type="text" class="buscar-txt" id="myInput2" onkeyup="myFunction2()" placeholder="Search for idc.."  title="Type in a name"/> 
        <a class="buscar-btn"> <i class="fa fa-search"></i> </a>

</div> 
    </div> 
    <br>
    <br>
    <br>
                                
                                <table  id="selectedColumn2" class="table table-striped table-bordered table-sm table-sortable "cellspacing="0" width="100%" >
                                    <thead>
                                        <tr>
                                           <th> Référence produit </th>
                                            <th>Nom de produit</th>
                                            
                                            <th>Quantité </th>
                                            <th>Description de produit</th>
                                            <th>Disponibilité de produit</th>
                                            <th>Prix</th>

                                            <th>Nom de la  Catégorie</th>
                                            <th> Image </th>
                                            <th> Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody id="cher">
                                        <tr>
                                    <!--  MEN HNA------------------------------------->
                                    <?PHP
                                      foreach($listeProduits as $row){
                                     ?>
                                 
                                              <td><?PHP echo $row['ref_prod']; ?></td>
                                            <td><?PHP echo $row['nom_prod']; ?></td>
                                            <td><?PHP echo $row['quantite']; ?></td>
                                            <td><?PHP echo $row['description_prod']; ?></td>
                                            <td><?PHP echo $row['disponibilite']; ?></td>
                                            <td><?PHP echo $row['prix_prod']; ?></td>
                                            <td><?PHP echo $row['cat']; ?></td>
                                            <td><img src ="<?php echo $row['src']?>"style="width:200px;height:150px;border-radius;:500px;" alt="" /><br/></td>
                                            
                                          
                                               <td> 
                                               <form action="supprimerProduit.php" method="POST">
                                               <button type="submit" class="btn btn-primary btn-lg" style="margin-top:3%;margin-left:5%;border-radius: 5%;"onclick="return confirm('Etes-vous sur de vouloir supprimer ce commentaire ?')">
                                                    <img src="supprimer.png" style="height: 30px;" >
                                                </button>
                                               
                                                  <input  value="<?PHP echo $row['ref_prod']; ?>" name="ref_prod" type="hidden">
                                                </form>
                                           
                                                <button type="button" class="btn btn-primary btn-lg" style="margin-top:3%;margin-left:5%;border-radius: 5%;">
                                                    <a href="modifProduit.php?ref_prod=<?PHP echo $row['ref_prod']; ?>" >   <img src="modifier.png" style="height: 30px;" > </a>
                                                </button></td>
                                            <script type="text/javascript">
    function popup(str) {
    var x=document.getElementsByClassName("cd-popup");
    if (str=="") {
        
        x[0].innerHTML =""
       
        xmlhttp.send(); 
       
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               x[0].innerHTML = this.responseText;
                 
            }


        };
        
         xmlhttp.open("GET","popup.php?id="+str,true);
        xmlhttp.send(); 
    }

}
</script>

                                            
                                        </tr>
                                       
                                   
                                    <?PHP
                                         }
                                    ?>
                                     </tbody>
                                </table>
                                <!---------------chercher------------------------------------------------------
                                <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#cher tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
-->

                                <!-- ------------------------ TOUFA LAHNA----------------------->
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div>
            <button type="button" class="btn btn-primary btn-lg"  style="margin-top:3%;margin-left:5%;border-radius: 5%;">
                <a href="ajoutProduit.php">Ajouter</a>
            </button>

          </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Catégories</strong>
                            </div>
                            <div class="card-body">
                     
                                 <div style=" transform:translate(0%,5%); ">
                                    <div class="buscar-caja" > 
                                     <input type="text" class="buscar-txt" id="myInput1" onkeyup="myFunction1()" placeholder="Search for idc.."  title="Type in a name"/> 
                                     <a class="buscar-btn"> <i class="fa fa-search"></i> </a> 

                                    </div> 
                                </div>


   
    </br>
</br>
</br>

                



                                <table  id="selectedColumn1" class="table table-striped table-bordered table-sm table-sortable "cellspacing="0" width="100%" >
                                    <thead>
                                        <tr>
                                            <th> Nom de la categorie </th>
                                            <th> Référence de la categorie </th>
                                            <th> Génération</th>
                                            <th> Marque</th>
                                            <th> Size </th>
                                            <th> Couleur</th>
                                            <th> Stock</th>
                                            <th> Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                         
                        <?php   foreach($listeCategories as $row)  
                        {
                        ?>                  <tr>
                                            <td><?PHP echo $row['cat']; ?></td>
                                            <td><?PHP echo $row['ref_cat']; ?></td>
                                            <td><?PHP echo $row['generation']; ?></td>
                                            <td><?PHP echo $row['marque']; ?></td>
                                            <td><?PHP echo $row['size']; ?></td>
                                            <td><?PHP echo $row['couleur']; ?></td>
                                            <td><?PHP echo $row['stock']; ?></td>
                                            <td>
                                            <form action="supprimerCategorie.php" method="POST">
                                                <button type="submit" class="btn btn-primary btn-lg" style="margin-top:3%;margin-left:5%;border-radius: 5%;" onclick="return confirmDelete_off()">
                                                <img src="supprimer.png" style="height: 30px;" >
                                                </button>
                                                 <input  value="<?PHP echo $row['ref_cat']; ?>" name="ref_cat" type="hidden">
                                           </form>
                                               
                                                <button type="submit" class="btn btn-primary btn-lg" style="margin-top:3%;margin-left:5%;border-radius: 5%;" >
                                                    <a href="modifCategorie.php?ref_cat=<?PHP echo $row['ref_cat']; ?>">   <img src="modifier.png" style="height: 30px;" ></a>
                                                </button>
                                               


                                           </td>
                                        </tr>
                                       
                                   
                    <?php  }?>
                                <!-- ------------------------ TOUFA LAHNA----------------------->
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div>
            <button type="button" class="btn btn-primary btn-lg"  style="margin-top:3%;margin-left:5%;border-radius: 5%;">
                <a href="ajoutCategorie.html">Ajouter</a>
            </button>
          </div>
          

    </div><!-- /#right-panel -->

    <!-- Right Panel -->
   <!--triiiiiiiiiiiiiiiiiii-->
  
   <script type="text/javascript">
  
  /**
 * Sorts a HTML table.
 * 
 * @param {HTMLTableElement} table The table to sort
 * @param {number} column The index of the column to sort
 * @param {boolean} asc Determines if the sorting will be in ascending
 */
function sortTableByColumn(table, column, asc = true) {
    const dirModifier = asc ? 1 : -1;
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll("tr"));

    // Sort each row
    const sortedRows = rows.sort((a, b) => {
        const aColText = a.querySelector(`td:nth-child(${ column + 1 })`).textContent.trim();
        const bColText = b.querySelector(`td:nth-child(${ column + 1 })`).textContent.trim();

        return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
    });

    // Remove all existing TRs from the table
    while (tBody.firstChild) {
        tBody.removeChild(tBody.firstChild);
    }

    // Re-add the newly sorted rows
    tBody.append(...sortedRows);

    // Remember how the column is currently sorted
    table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));
    table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-asc", asc);
    table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-desc", !asc);
}

document.querySelectorAll(".table-sortable  th").forEach(headerCell => {
    headerCell.addEventListener("click", () => {
        const tableElement = headerCell.parentElement.parentElement.parentElement;
        const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
        const currentIsAscending = headerCell.classList.contains("th-sort-asc");

        sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
    });
});

</script>
<script>
 function myFunction2() {
                                        var input, filter, table, tr, td, i, txtValue;
                                        input = document.getElementById("myInput2");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById("selectedColumn2");
                                        tr = table.getElementsByTagName("tr");
                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName("td")[0];
                                            if (td) {
                                                txtValue = td.textContent || td.innerText;
                                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                    tr[i].style.display = "";
                                                } else {
                                                    tr[i].style.display = "none";
                                                }
                                            }       
                                        }
                                    }

</script>
<script>
 function myFunction1() {
                                        var input, filter, table, tr, td, i, txtValue;
                                        input = document.getElementById("myInput1");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById("selectedColumn1");
                                        tr = table.getElementsByTagName("tr");
                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName("td")[0];
                                            if (td) {
                                                txtValue = td.textContent || td.innerText;
                                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                    tr[i].style.display = "";
                                                } else {
                                                    tr[i].style.display = "none";
                                                }
                                            }       
                                        }
                                    }

</script>


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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>


</body>

</html>
