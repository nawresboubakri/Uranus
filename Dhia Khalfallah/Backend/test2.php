

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
    <link rel="stylesheet" type="text/css" href="controle.css">
    <style>


.list-form-container {
    background: #F0F0F0;
    border: #e0dfdf 1px solid;
    padding: 20px;
    border-radius: 2px;
}

.column {
    float: left;
    padding: 10px 0px;
}


table {
    width: 100%;    
    background: #FFF;
}

td, th {
    border-bottom: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    width: auto;
      
}

.content-div {
    position:relative;
}

.content-div span.column {
    width: 90%;
}

.date {
    position: absolute;
    right: 8px;
    padding: 10px 0px;
    color: green ;
}
</style>
    <style>
      body
      {
        margin:0;
        padding:0;
        background-color:#f1f1f1;
      }
      .box
      {
        width:1270px;
        padding:20px;
        background-color:#fff;
        border:1px solid #ccc;
        border-radius:5px;
        margin-top:25px;
      }
    </style>



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
                            <li><i class="fa fa-table"></i><a href="table-produit.php">Produit</a></li>
                            <li><i class="fa fa-table"></i><a href="table-coaching.html">Coaching</a></li>
                            <li><i class="fa fa-table"></i><a href="table-marketing.html">Marketing</a></li>
                            <li><i class="fa fa-table"></i><a href="table-service.php">Service après-vente</a></li>
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

                                        
                                        <h1>Liste des Emails reçus</h1>
      <?php
    if (! function_exists('imap_open')) {
        echo "IMAP is not configured.";
        exit();
    } else {
        ?>
    <div id="listData" class="list-form-container">
            <?php

        /* Connecting Gmail server with IMAP */
        $connection = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', 'serviceclients.sport@gmail.com', 'Dhia123698745') or die('Cannot connect to Gmail: ' . imap_last_error());

        /* Search Emails having the specified keyword in the email subject */
        $emailData = imap_search($connection, ' ALL ');
        
        if (! empty($emailData)) {
            ?>
            <table>
            <?php
            foreach ($emailData as $emailIdent) {
                
                $overview = imap_fetch_overview($connection, $emailIdent, 0);
                $message = imap_fetchbody($connection, $emailIdent, '1');
                $messageExcerpt = substr($message, 0, 150);
                $partialMessage = trim(quoted_printable_decode($messageExcerpt)); 
                $date = date("d F, Y", strtotime($overview[0]->date));
                ?>
                <tr>
                        <td style="width:15%; color : red ;"><span class="column"><?php echo $overview[0]->from; ?></span></td>
                        <td class="content-div" "><span class="column">Subject : <?php echo $overview[0]->subject; ?> - <br><br> <?php echo $message; ?></span><span class="date"><?php echo $date; ?></span></td>
                </tr>
                <?php
            } // End foreach
            ?>
            </table>
            <?php
        } // end if
        
        imap_close($connection);
    }
    ?>


                    </div>



</script>
<script type="text/javascript">

    function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            return false;
        }

        return true;

} 

     function verif_Personels(){
       var x= 0 ;
     

        var nom = document.getElementById("nom");
        var prenom = document.getElementById("prenom");
        var cin = document.getElementById("cin");
        var mail = document.getElementById("mail");
        var tel = document.getElementById("tel");
        
        var test = validateEmail(mail);
          
         if(!cin.value){
          document.getElementById("cin").style.backgroundColor = "#FFA07A" ;
            document.getElementById("cin").textContent = " Le numero de CIN est necessaire !!!" ;
           if(x==0)
            {
                  x=1;
            }

        }

         if(cin.value.length<8 || cin.value.length>8 ){
          document.getElementById("cin").style.backgroundColor = "#FFA07A" ;
            document.getElementById("cin").textContent = " Le numero de CIN est erroné !!!" ;
         if(x==0)
            {
                  x=1;
            }

        }


         if(!nom.value){
            document.getElementById("nom").style.backgroundColor = "#FFA07A" ;
            document.getElementById("nom1").textContent = " *Le nom est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }

        }

         if(nom.value.length <4 ||nom.value.length>25 )
        {
            document.getElementById("nom").style.backgroundColor = "#FFA07A" ;
            document.getElementById("nom1").textContent = " *nom non acceptable!!!" ;
            if(x==0)
            {
                  x=1;
            }   
        }
         if(!tel.value){
           // erreur =" Veuillez renseigner une quantitée !!!";
            document.getElementById("tel").style.backgroundColor = "#FFA07A" ;
             document.getElementById("tel1").textContent = " *Le numero de telephone est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
         if(isNaN(tel.value) || tel.value.length<8)
        {
            document.getElementById("tel").style.backgroundColor = "#FFA07A" ;
            document.getElementById("tel1").textContent = " veillez saisir un numero de telephone valide !!!" ;
            if(x==0)
            {
                  x=1;
            }
        }
         if(!mail.value){
          
            document.getElementById("mail").style.backgroundColor = "#FFA07A" ;
            document.getElementById("mail1").textContent = " *Le mail est obligatoire!!!"; 
            if(x==0)
            {
                  x=1;
            }
        }

        if(!test)
            {
          
            document.getElementById("mail").style.backgroundColor = "#FFA07A" ;
            document.getElementById("mail1").textContent = " *Le format de mail est erroné!!!"; 
            if(x==0)
            {
                  x=1;
            }
        }

        

         if(!prenom.value){
          
            document.getElementById("prenom").style.backgroundColor = "#FFA07A" ;
            document.getElementById("prenom1").textContent = " *Le prenom est obligatoire!!!" ;
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

