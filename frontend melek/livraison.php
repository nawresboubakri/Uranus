<?php

session_start();
include "../../core/commandeF.php";
$clientC=new ClientCore();
	$resultat1=$clientC->AfficherClients1($_SESSION['email']);
	foreach($resultat1 as $row){
		$users=$row['Pseudo'];
	}

if (isset($_GET['ref_cmd'])){
	$commandeF=new commandeF();
    $result=$commandeF->recuperertComm($_GET['ref_cmd']);
	foreach($result as $row){
		$ref_cmd=$row['ref_cmd'];
		$ref_prod=$row['ref_prod'];
		$username=$row['username'];
		$categorie=$row['categorie'];
		$prix_total=$row['prix_total'];
		$jour_arrivee=$row['jour_arrivee'];
      
        $_SESSION['ref_cmd']=$row['ref_cmd'];
        $_SESSION['prix_total']=$row['prix_total'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div>
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Livraison gratuite pour une commande standard de plus de 100 $
					</div>

					

				
				</div>
			</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li >
								<a href="home.php">Acceuil</a>
								<!--<ul class="sub-menu">
									<li><a href="index.html">Homepage 1</a></li>
									<li><a href="home-02.html">Homepage 2</a></li>
									<li><a href="home-03.html">Homepage 3</a></li>
								</ul>-->
							</li>

							<li class="active-menu">
								<a href="product.php">Catalogue</a>
																<ul class="sub-menu">
									<li><a href="product.php">Produits</a></li>
									<li><a href="home-02.php">Coaching</a></li>
									<li><a href="AfficherClub.php">Nos clubs</a></li>
								</ul>
							</li>

							<li class="active-menu">
								<a href="Evenement.php">Actualité</a>
																<ul class="sub-menu">
									<li><a href="Evenement.php">Nos événements</a></li>
									<li><a href="Offres.php">Nos Offres</a></li>
								</ul>
							</li>


							

							<li class="label1" data-label1="hot">
								<a href="shoping-cart.php">Commande</a>
							</li>


							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
							<li class="main-menu">
								<a href="#">
									Mon Compte
							  
								</a>
								<ul class="sub-menu">
									<li><a href="s'inscrire.php">s'inscrire</a></li>
									<li><a href="login.php">se connecter</a></li>
									<li><a href="home.php">se déconnecter</a></li>
									<li><a href="Espace-client.php">votre espace</a></li>
									
						
								</ul>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="home.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="home.php">Home</a>
					<ul class="sub-menu-m">
						<li><a href="home.php">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/about2.jpg');">
			<h2 class="ltext-105 cl0 txt-center">
			livraison
			</h2>
		</section>



	
	   
             <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    
						<h4 class="mtext-109 cl2 p-b-30">
							Commande Totale
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Prix:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
								<?php echo $_SESSION['prix_total']; ?>
								</span>
							</div>
						</div>
						
				
						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Livraison:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									Aucune méthode de livraison n'est disponible. Veuillez vérifier votre adresse ou contactez-nous si vous avez besoin d'aide.

								</p>
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Calculer Totale
									</span>
									
									        <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
											<form method="POST" action="livraison.php" id="tab"  >
												<table>
												<tr>
												  <td> <div class="bor8 bg0 m-b-22">
												  <div class="form-group">
												  <label  for="Code_Postale" >Code_Postale</label>
										               <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="Code_Postale" id="Code_Postale" >
													   <div id="Code_Postale1" style="color: red;"></div>
                                                   </div>
									              </div> </td>
												   </tr>
													<tr>
                                                 <td> 
												 <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
													 <select name="destination" size="1" id="select" onchange="change_valeur();" class="js-select2" >
                                                     <option value="sfax">sfax</option>
                                                     <option value="tunis">tunis</option>
                                                     <option value="sousse">sousse</option>
												   </select>
												   <div class="dropDownSelect2"></div>
									                  </div>
													  </td>
													  </tr>
													  <tr>
													   <td>
													  <input type="radio" id="espece" name="gender" value="espece">
                                                      <label for="espece">espece</label></td>
													  <td>
													  <input type="radio" id="carte" name="gender" value="carte">
                                                      <label for="carte">par carte </label>
													  </td>
                                                 </tr>
												
												   <tr>
												   <td> <input class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer js-addwish-b2" type="submit" name="envoyer" id="envoye"  > </td> 
												  </tr>
                                                </table>
												   </form>
									
								</div>		
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Totale:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
								<?php echo $_SESSION['prix_total']; ?>
								</span>
							</div>
						</div>
					
					
						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						   <a href="ajouterlivraison.php?ref_cmd=<?php   echo $_SESSION['ref_cmd']; ?>&destination=<?php   echo $_POST['destination']; ?>&code_postal=<?php echo  $_POST['Code_Postale'];?>&periode_arrivee=<?php echo date('Y-m-d', strtotime(' + 2 days')); ?> &mode_payement=<?php echo $_POST['gender'] ?> " >passer la caisse </a>
                        </button>
                    
					</div>
					<form action="facture.php" method="GET">
			<input type="submit" name="pdf" style="float :right;padding-top: 5px;padding-left: 5px;padding-bottom: 5px;padding-right: 5px; background-color: #282828; color: #ffffff" value="Facture" class="btn btn-sm">
				
          </form>

                </div>
			
                <footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
    </footer>
    <!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	
	
	</script>
	</script>
	<script src="vendor/sweetalert/sweetalert.min.js"></script>

	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
		function change_valeur() {
document.getElementById('select').value=document.getElementById('').value;
}
</script>
<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			$(this).on('click', function(){
				swal( "votre livraison a ete t'ajouter avec sucess", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});
</script>
<script type="text/javascript">

    function verif_Produit(){
     var x=0;

      var erreur;
        var r;

        var Code_Postale = document.getElementById("Code_Postale");
      
          
      
      
      
          
        }
          if(!Code_Postale.value){
       
            document.getElementById("Code_Postale").style.backgroundColor = "#FFA07A" ;
            document.getElementById("Code_Postale1").textContent = " *Code_Postale est obligatoire!!!" ;
            if(x==0)
            {
                  x=1;
            }
        }

      
        


      
          
      
          if(Code_Postale.value.length <2 ||Code_Postale.value.length>25 )
        {
            document.getElementById("Code_Postale").style.backgroundColor = "#FFA07A" ;
            document.getElementById("Code_Postale1").textContent = " *Code_Postale non acceptable!!!" ;
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
</body>
</html>