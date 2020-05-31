
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

   
    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

    
        <!-- Header-->


        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row" style=" justify-content: center;">
                    <div class="col-lg-6" >
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Payement en ligne</strong>
                            </div>
                            <div class="card-body" >
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Payement </h3>
                                        </div>
                                        <hr>
                                        <form action="ajout_Payement1.php" method="GET" novalidate="novalidate">
                                            
                                            <div class="form-group">
                                                <label  for="nom_carte" >Nom de la carte</label>
                                                <input type="text" class="form-control" name="nom_carte"  id="nom_carte">
                                                <div id="nom_carte_1" style="color : red; font-size : 12px;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label  for="num_carte" >Numero de la carte</label>
                                                <input type="number" class="form-control" name="num_carte" id="num_carte" >
                                                <div id="num_carte_1" style="color : red; font-size : 12px;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label  for="date_exp">Date d'expiration</label>
                                                <input type="date" class="form-control" name="date_exp" id="date_exp">
                                                <div id="date_exp_1" style="color : red; font-size : 12px;"></div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label  for="code_secu">Code de sécurité</label>
                                                <input type="number" class="form-control" name="code_secu" id="code_secu">
                                                <div id="code_secu_1" style="color : red; font-size : 12px;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label  for="code_postal">Code postal</label>
                                                <input type="number" class="form-control" name="code_postal" id="code_postal">
                                                <div id="code_postal_1" style="color : red; font-size : 12px;"></div>
                                            </div>
                                            <div class="form-group">
                                                
                                                <input type="hidden" class="form-control" name="ref_cours" value="<?PHP echo $_GET['ref_cours']; ?>">
                                            </div>
                                           
                                          
                                                <div>
                                               <input type="submit" name="ajouter" value="PAYER"class="btn btn-lg btn-info btn-block" onclick="return saisie()">  
                                                </div>
                                                
                                        </form>
                                   


                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                 


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
                            <script src="saisie_payement.js"></script>
</body>
</html>
