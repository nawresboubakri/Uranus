
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
    <!--Icone bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
<style type="text/css">
.table-sortable th {
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
    <?php
     
     include "../../core/commandeF.php";
      include "notifications.php";   
            $commande1F=new commandeF();
          $listeCommandes=$commande1F->afficherComs();
          $livraison1F=new livraisonF();
          $listelivraison=$livraison1F->afficherlis();
          $comml1iC=new commliC();
          $listeCommandesli=$comml1iC->afficherComsli();
        
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
                            <li><i class="fa fa-table"></i><a href="Affclient.php">Client</a></li>
                            <li><i class="fa fa-table"></i><a href="table-panier.php">Panier</a></li>
                            <li><i class="fa fa-table"></i><a href="table-produit.php">Produit</a></li>
                            <li><i class="fa fa-table"></i><a href="table-coaching.php">Coaching</a></li>
                            <li><i class="fa fa-table"></i><a href="table-marketing.php">Marketing</a></li>
                            <li><i class="fa fa-table"></i><a href="table-service.php">Service après-vente</a></li>
                            <li><i class="fa fa-table"></i><a href="AfficherClub.php">Nos Clubs</a></li>
                        </ul>
                    </li>
                

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Graphiques</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="Gra_comm.php"> Graphiqucommande</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="Gra_produit.php"> GraphiqueProduit</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="Gra_club.php"> GraphiqueClub</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="Gra_offres.php"> Graphique_Offres</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="calandrier.php"> calender</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href=" Gra_rec.php">  Gra_rec</a></li>
                           
                        </ul>
                       
                    </li>
                   
                
                    
                    <h3 class="menu-title">Suppléments</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.php">S'identifier</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="registeruser.php">S'inscrire</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="logout.php">Se Déconnecter</a></li>
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
                 
        <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin1.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="espace_admin.php"><i class="fa fa-user"></i> Mon Profile</a>

                            <a class="nav-link" href="page-login.php"><i class="fa fa-user"></i> se connecter </a>

                            <a class="nav-link" href="registeruser.php"><i class="fa fa-cog"></i> s'inscrire</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Se déconnecter</a>
                        </div>
                    </div>

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
                                <?php

                                   $query = "SELECT * from notifications where status = 'unread' order by date DESC";
                                    if(count(fetchAll($query))>0){
                                         ?>
                                        <span class="badge badge-danger badge-counter"><?php echo count(fetchAll($query)); ?></span>
                                              <?php
                                                 } 
                                                ?>
                             </button>
                             <div class="dropdown-menu" aria-labelledby="notification">
                                                    <?php
                                                    
                                                        $query = "SELECT * from notifications  order by date DESC";
                                                       if (count(fetchAll($query))>0){
                                                      foreach(fetchAll($query) as$i){
                                                      ?>
                        
                                                  
                                                      <p class="red"> <?php echo count(fetchAll($query)); ?> </p>
                                                         <a style="<?php if($i['status']=='unread'){ echo "font-weight:bold;"; } ?> " class="dropdown-item d-flex align-items-center"?id=<?php echo $i['id']  ?> href="<?php echo $i['lien'] ?>">
                                                                     <div class="mr-3">
                                                                         <div class="icon-circle bg-primary">
                                                                              <i class="fas fa-file-alt text-white"></i>
                                                                         </div>
                                                                     
                                                            <div>
                                                                <div class="small text-gray-500"><?php echo $i['date']?></div>
                                                                    <span class="font-weight-bold"><?php echo $i['message']?></span>
                                                              </div>
                                                         </a>
                                                                     <div class="dropdown-divider"></div>
                                                                    
                                                                        
                           
                                   
                                     <?php
                                                                           }
                                                                            }
                                       
                                       ?>
                                         </div>
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

        <a onclick="window.print();" class="btn btn-primary" id="print-btn">print</a>
          <!-- debut tab1 -->
          <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Commandes</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                         
                                    
                                            <th class="th-sm">ref_cmd</th>
                                            <th class="th-sm">ref_prod</th>
                                            <th class="th-sm">username</th>
                                            <th class="th-sm">categorie</th>
                                            <th class="th-sm">prix_total</th>
                                            <th class="th-sm">jour_arrivee</th>
                                           
                                            <th> action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <?php
                                           foreach($listeCommandes as $row){
                                        ?>
                                      
                                        
                                      
                             <td><?PHP echo $row['ref_cmd']; ?></td>
	                     <td><?PHP echo $row['ref_prod']; ?></td>
	                     <td><?PHP echo $row['username']; ?></td>
	                      <td><?PHP echo $row['categorie']; ?></td>
                         <td><?PHP echo $row['prix_total']; ?></td>
                     <td><?PHP echo $row['jour_arrivee']; ?></td>
                          
             
                                          
                      <td> 
                      

                   <form method="POST" action="supprimercommandes.php">
                   <center>
      
                         <button class="btn" type="submit" name="supprimer"  style="background-color:none ;" ><i class="fa fa-trash" style="background-color:none ;" onclick="return confirm('voulez vous vraiment supprimer ?')" ></i></button>
                         <input type="hidden" name="ref_cmd" value="<?PHP echo $row['ref_cmd']; ?>">
                     
                      </form>
                            
                             <a href="modifiercommande.php?ref_cmd=<?PHP echo $row['ref_cmd']; ?>">
                             <img src="modifier.png" style="height:30px"/></a>
                             </center>
                  
                                           </td>
                                      
                                           </tr>
                                       
                                  
                                    <?php
                                       }
        
                                      ?>
                                     </tbody>
                                </table>
                          
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
                                <strong class="card-title">Livraison</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export1" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Num_Livraison</th>
                                            <th class="th-sm">ID_Commande</th>
                                            <th class="th-sm">Destination</th>
                                            <th class="th-sm">code postal</th>
                                            <th class="th-sm">periode_arrivee</th>
                                            <th class="th-sm">mode_paiement</th>
                                            <th class="th-sm">actions</th>
                                        
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php
                              
                         foreach($listelivraison as $row){
                                        ?>
                                      
                                      
                           
	                     <td><?PHP echo $row['num_livraison']; ?></td>
	                     <td><?PHP echo $row['ref_cmd']; ?></td>
	                      <td><?PHP echo $row['destination']; ?></td>
                         <td><?PHP echo $row['code_postal']; ?></td>
                          <td><?PHP echo $row['periode_arrivee']; ?></td>
                          <td><?PHP echo $row['mode_payement']; ?></td>
                          
                          
                                           <td>

<form method="POST" action="supprimerlivraison.php">
     <center>

      <button class="btn" type="submit" name="supprimer"  style="background-color:none ;" ><i class="fa fa-trash" style="background-color:none ;"onclick="return confirm('voulez vous vraiment supprimer ?')"></i></button>
      <input type="hidden" name="num_livraison" value="<?PHP echo $row['num_livraison']; ?>">
    
   </form>
   <a href="modifierlivraison.php?num_livraison=<?PHP echo $row['num_livraison']; ?>">
                             <img src="modifier.png" style="height:30px"/></a>
                             </center>
   </td>

                                        </tr>
                                       
                                   
                                    <?php
          }
     
                   ?>
                    </tbody>
                                </table>
                                <!-- fin affichage tableau 2-->
                                    <!-- debut tab3 -->
                                    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Cours</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export2" class="table table-striped table-bordered">
                                  
                                    <thead>
                                        <tr>
                                            <th>ref_Commande</th>
                                            <th>ref_prod</th>
                                            <th>username</th>
                                            <th>prix_total</th>
                                            <th>num_livraison</th>
                                            <th>periode_arrivee</th>
                                            <th>mode_payement</th>
                                        
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                              
                         foreach($listeCommandesli as $row){
                                        ?>
                                        <tr>
                                      
                           
	                     <td><?PHP echo $row['ref_cmd']; ?></td>
                         <td><?PHP echo $row['ref_prod']; ?></td>
                         <td><?PHP echo $row['username']; ?></td>
                         <td><?PHP echo $row['prix_total']; ?></td>
                          <td><?PHP echo $row['num_livraison']; ?></td>
                          <td><?PHP echo $row['periode_arrivee']; ?></td>
                          <td><?PHP echo $row['mode_payement']; ?></td>
                          
                          
    

                                        </tr>
                                       
                                    </tbody>
                                    <?php
          }
     
                   ?>
                                </table>
                                <!-- fin affichage tableau 3-->
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        </div>
    <!-- /#right-panel -->

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

document.querySelectorAll(".table-sortable th").forEach(headerCell => {
    headerCell.addEventListener("click", () => {
        const tableElement = headerCell.parentElement.parentElement.parentElement;
        const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
        const currentIsAscending = headerCell.classList.contains("th-sort-asc");

        sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
    });
});

</script>

    <script>
(function ($) {
    //    "use strict";


    /*  Data Table
    -------------*/

    $('#bootstrap-data-table').DataTable({
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
    });

    $('#bootstrap-data-table-export').DataTable({
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    });

	$('#row-select').DataTable( {
        initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);

							column
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						} );

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		} );

})(jQuery);
</script>
<script>
(function ($) {
    //    "use strict";


    /*  Data Table
    -------------*/

    $('#bootstrap-data-table1').DataTable({
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
    });

    $('#bootstrap-data-table-export1').DataTable({
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    });

	$('#row-select').DataTable( {
        initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);

							column
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						} );

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		} );

})(jQuery);
</script>
<script>
(function ($) {
    //    "use strict";


    /*  Data Table
    -------------*/

    $('#bootstrap-data-table2').DataTable({
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
    });

    $('#bootstrap-data-table-export2').DataTable({
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    });

	$('#row-select').DataTable( {
        initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);

							column
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						} );

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		} );

})(jQuery);
</script>


</body>

</html>