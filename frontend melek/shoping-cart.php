	
<?php 
include "../../core/productC.php";
session_start();
if(empty($_SESSION["email"]))
{
    $_SESSION["email"]="";
}
else{
    $_SESSION["email"];
}

$clientC=new ClientCore();
	$resultat1=$clientC->AfficherClients1($_SESSION['email']);
	foreach($resultat1 as $row){
		$users=$row['Pseudo'];
	}

	if(empty($_SESSION["shopping_cart"]))
{
    $item_array = array(
        'item_ref_prod'			=>	 "",
        'item_nom_prod'			=>  "",
        'item_prix_prod'		=>"",
        'item_quantite'		=>	"",
        'item_src'  => ""
    );
    $_SESSION["shopping_cart"][0] = $item_array;
    unset(  $_SESSION["shopping_cart"][0]);
}
{
if (isset($_GET['ref_prod'])){
	$produitC=new ProduitC();
    $result=$produitC->recupererProduit($_GET['ref_prod']);
	foreach($result as $row){
		$ref_prod=$row['ref_prod'];
		$nom_prod=$row['nom_prod'];
		$quantite=$row['quantite'];
		$description_prod=$row['description_prod'];
		$disponibilite=$row['disponibilite'];
		$prix_prod=$row['prix_prod'];
		$src=$row['src'];

		
			
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_ref_prod = array_column($_SESSION["shopping_cart"], "item_ref_prod");
		if(!in_array($_GET["ref_prod"], $item_array_ref_prod))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_ref_prod'			=>	 $row['ref_prod'],
				'item_nom_prod'			=>	$row['nom_prod'],
				'item_prix_prod'		=>	$row['prix_prod'],
				'item_quantite'		=>	$row['quantite'],
				'item_src'  =>  $row['src'],
				
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			//echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_ref_prod'			=>	 $row['ref_prod'],
			'item_nom_prod'			=>	$row['nom_prod'],
			'item_prix_prod'		=>	$row['prix_prod'],
			'item_quantite'		=>	$row['quantite'],
			'item_src'  =>  $row['src']
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}


	

if(isset($_GET["action1"]))
{
	if($_GET["action1"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_ref_prod"] ==  $row['ref_prod'])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				
				echo '<script>window.location="shoping-cart.php"</script>';
			}
		}
	}
}
	
}

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
									<li><a href="logout.php">se déconnecter</a></li>
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

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php echo count($_SESSION["shopping_cart"]);?>">
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
						<li><a href="index.html">Homepage 1</a></li>
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

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
				<?php 
				$total = 0;
				     foreach($_SESSION["shopping_cart"] as $keys => $values)
					 {  
				 ?>
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
						<img src="image/<?php echo $values["item_nom_prod"]?>.jpg"> 
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							<?php echo $values["item_nom_prod"]; ?>
							</a>

							<span class="header-cart-item-info">
							<?php echo $values["item_prix_prod"]; ?>
							</span>
						</div>
					</li>
					<?php
					$total = $total + ( $values["item_prix_prod"]);
				    
					  } ?>
					
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
					<?php echo $total; ?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/about2.jpg');">
			<h2 class="ltext-105 cl0 txt-center">
				Panier
			</h2>
		</section>

	
	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Produit</th>
									<th class="column-2"></th>
									<th class="column-3">Prix</th>
									<th class="column-4">Quantité</th>
									<th class="column-5">Totale</th>
								</tr>
								<?php
									
									
					                  if(!empty($_SESSION["shopping_cart"]))
					                  {
						             $total = 0;
						               foreach($_SESSION["shopping_cart"] as $keys => $values)
						             {
									
					              ?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<!--<img src="images/item-cart-04.jpg" alt="IMG">-->
												<img src="image/<?php echo $values["item_nom_prod"]?>.jpg"> 
										</div>
									</td>
									<td class="column-2"><?php echo $values["item_nom_prod"]; ?></td>
									<td class="column-3"><?php echo $values["item_prix_prod"]; ?></td>
									<td class="column-4">
									<?php
									if(IsSet($_POST['gal'])) $gal = $_POST['gal']; else $gal = 1;
									if(IsSet($_POST['action'])) $action = $_POST['action']; else $action = '';
									$gal_plus = '';
									$gal_moins = '';
									//test des variables
									if($action == 'moins') {
									$gal_moins = 'checked="checked"';
									$gal--;
									}
									if($action == 'plus') {
									$gal_plus = 'checked="checked"';
									$gal++;
									}
									//affichage du resultat
									echo '<div>';
									echo '<form action="shoping-cart.php" method="post" enctype="multipart/form-data" >';
									echo '<input  type="submit" id="plus" name="action" value="plus" '.$gal_plus.' />
									<input id="moins" type="submit" name="action" value="moins" '.$gal_moins.' />';
									echo '<input type="text" name="gal" value="'.$gal.'" />';
									
									echo "</form></div>'";
									?>
									</td>
									<td class="column-5"><?php echo number_format(	$gal * $values["item_prix_prod"], 2);?></td>

									<td><a href="shoping-cart.php?action1=delete&ref_prod=<?php echo $values["item_ref_prod"]; ?>"><span class="text-danger"><i class="fa fa-trash" style="background-color:none ;"></i></span></a></td>
									<td name="username" id="username" type="hidden" value="<?php echo $users?>"></td>
									
                                    <td  type="hidden" name="categorie" id="categorie"value="mohsen" <?php $categorie="vetement"; echo $categorie;?>></td>
                                    
                                   
					            </tr>
					              <?php
                                  
								  $total = $total + ($gal * $values["item_prix_prod"]);
								
						           }
					               ?>
					               <tr>
						             <td colspan="3" align="right">Total</td>
						              <td align="right">$ <?php echo number_format($total, 2); ?></td>
						              <td></td>
					                </tr>
					               <?php
									 }
									 
					               ?>
					            </tr>
                                   
							
                                <tr  align="center" onclick=" return verif()">  
								<div id="username1"></div> 
                                   <td align="center" colspan="2"> <button class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10 "   ><a  href="ajoutercommandes.php?ref_prod=<?php echo $values["item_ref_prod"]; ?>&username=<?php echo $users; ?>&categorie=<?php echo $categorie;?>&prix_total=<?php echo $total; ?>&jour_arrivee=<?php echo date('Y-m-d', strtotime(' + 2 days')); ?>" >passer la commande </a></button> 
                                </tr>

								
							</table>
							
						</div>
					</div>
				</div>

				
			</div>
        </div>
		
        
	</form> 
	
	<form action="ajcomm.php" method="GET" novalidate="novalidate">
                                            
											<div class="form-group" >
																						<!--	<label  for="commentaire">Donnez votre avis </label> -->
																						   <br />
																							<textarea id="comment_verif"  type="text" class="form-control" name="commentaire" placeholder="votre commentaire" ></textarea>
																						</div>
																					<div id="alert_com" style="color : red ;"></div>
																					   
																					  
																							<div>
																						   <input class="btn btn-primary"  type="submit" name="ajouter" onclick="return verif_com() " value="Poster votre commentaire">  
																							</div>
																						   
																					</form>
	<!-- Footer -->
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
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				
					
				
	


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
 
	
	 
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
		</script>
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
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			$(this).on('click', function(){
				swal( "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});
</script>
<script>
function verif_com()
{
    var str=document.getElementById("comment_verif").value;
    var v= str.indexOf("bonjour");
    if(v>-1)
    {
        document.getElementById("alert_com").textContent= "*le mots ne peut pas etre dans ce commentaire";
        return false;
    }
    else{
        return true;
    }
}
</script>
<script>
function verif{
if(document.getElementById("username").value =="" ){

        document.getElementById("username1").textContent = "nom_carte obligatoire" ;
        return false;
    }else{
		return true;
	}
	
}
</script>

</body>
</html>