
<?php 

session_start();
 require_once('includes/database.php'); 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Black </title>
<link rel="icon" href="Black.png" type="image/png">
<title>Black </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="styles/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="styles/bootstrap/js/popper.js"></script>
<script src="styles/bootstrap/js/bootstrap.js"></script> 
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>

<div class="super_container">

	<?php require_once('includes/header.php'); ?>

		<br><br><br><br><br><br><br><br>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<div class="h1" id="indicboutique"> Bienvenue dans la boutique Black </div>
						<div class="h3" id="sousindicboutique"></div>
					</div>
				</div>
			</div>

			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">Tout</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">Femmes</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">Hommes</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Enfant">Enfants</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

										<!-- Article à afficher lorsqui'il n'y a pas de code vendeur transmis a la page -->
						<?php 

							if (!isset($_GET['codevendeur'])) 
							{

							


								 	$requete=$base->query('SELECT * FROM article ORDER BY dateenregistrement desc');
				      				$retourrequete=$requete->fetchAll();
								   			foreach ($retourrequete as $key => $value) 
								   			{

	
										
					?>

						<div class="product-item *" style="margin-bottom: 20%; max-height: 300px">

							<div class="product discount product_filter">
								<div class="product_image">
									<a href="images/<?=$value['image']?>"><img class="img-responsive" src="images/<?=$value['image']?>" alt=""  style="max-height: 300px; padding: 10%"></a>
								</div>
								<div class="favorite favorite_left"></div>
								<?php 
											if ($value['Etat']=='Neuf') 
											{
												?>
												<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
													<span><?=$value['Etat']?></span>
												</div>
												<?php
											}
											else
											{
												?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span><?=$value['Etat']?></span>
												</div>
												<?php
											}

									 ?>
								<div class="product_info">
									<div class="product_price"><?=$value['quantite']?></div>
									<h6 class="product_name"><a href="single.html"><?=$value['description']?></a></h6>
									<div class="product_price"><?=$value['nom']?></div>
									<div class="product_price"><?=number_format($value['prix'])  ?> Eco<!-- <span><?=$value['prix']?></span> --></div>
								</div>
							</div>
								

							<div class="red_button add_to_cart_button">
									<?php 
											if (empty($_SESSION)) 
											{
												?>
											<a href="client/connexion.php"> <i class="glyphicon glyphicon-plus"></i> Au panier</a>
											<?php 	
											}
											else
											{
												?>
											<a id="panier" href="client/viewarticle.php?articlenumero=<?=$value['id']?>" <?php if (isset($_SESSION['idvendeur'])) 
											{
												?>
												 onclick="alert('Dèsolé, vous ne pouvez pas passer de commande avec un compte vendeur !')"
												<?php	

											}
											?> > <i class="glyphicon glyphicon-plus"></i> Au panier</a>	
												<?php 
											}




									 ?>
												
							</div>
						</div>



		   				<?php
		   							}
							


							$requete=$base->query('SELECT * FROM article WHERE Genre="Femme" ORDER BY dateenregistrement desc');
				      		$retourrequete=$requete->fetchAll();

								   			foreach ($retourrequete as $key => $valuewomen) 

								   			{
								   				?>
						<div class="product-item women" style="margin-bottom: 20%; max-height: 300px">

							<div class="product discount product_filter">
								<div class="product_image">
									<a href="images/<?=$valuewomen['image']?>"><img class="img-responsive" src="images/<?=$valuewomen['image']?>" alt=""  style="max-height: 300px; padding: 10%"></a>
								</div>
								<div class="favorite favorite_left"></div>
								<?php 
											if ($valuewomen['Etat']=='Neuf') 
											{
												?>
												<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
													<span><?=$valuewomen['Etat']?></span>
												</div>
												<?php
											}
											else
											{
												?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span><?=$valuewomen['Etat']?></span>
												</div>
												<?php
											}

									 ?>
								<div class="product_info">
									<div class="product_price"><?=$valuewomen['quantite']?></div>
									<h6 class="product_name"><a href="single.html"><?=$valuewomen['description']?></a></h6>
									<div class="product_price"><?=$valuewomen['nom']?></div>
									<div class="product_price"><?=number_format($valuewomen['prix'])  ?> Eco<!-- <span><?=$value['prix']?></span> --></div>
								</div>
							</div>
								

							<div class="red_button add_to_cart_button">
									<?php 
											if (empty($_SESSION)) 
											{
												?>
											<a href="client/connexion.php"> <i class="glyphicon glyphicon-plus"></i> Au panier</a>
											<?php 	
											}
											else
											{
												?>
											<a  id="panier" href="client/viewarticle.php?articlenumero=<?=$valuewomen['id']?>" <?php if (isset($_SESSION['idvendeur'])) 
											{
												?>
												 onclick="alert('Dèsolé, vous ne pouvez pas passer de commande avec un compte vendeur !')"
												<?php	

											}
											?> > <i class="glyphicon glyphicon-plus"></i> Au panier</a>	
												<?php 
											}




									 ?>
												
							</div>
						</div>

								   				<?php

								   			}


								   	$requete=$base->query('SELECT * FROM article WHERE Genre="Homme" ORDER BY dateenregistrement desc');
				      				$retourrequete=$requete->fetchAll();

								   			foreach ($retourrequete as $key => $valuemen) 

								   			{
								   				?>

						<div class="product-item men" style="margin-bottom: 20%; max-height: 300px">

							<div class="product discount product_filter">
								<div class="product_image">
									<a href="images/<?=$valuemen['image']?>"><img class="img-responsive" src="images/<?=$valuemen['image']?>" alt=""  style="max-height: 300px; padding: 10%"></a>
								</div>
								<div class="favorite favorite_left"></div>
								<?php 
											if ($valuemen['Etat']=='Neuf') 
											{
												?>
												<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
													<span><?=$valuemen['Etat']?></span>
												</div>
												<?php
											}
											else
											{
												?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span><?=$valuemen['Etat']?></span>
												</div>
												<?php
											}

									 ?>
								<div class="product_info">
									<div class="product_price"><?=$valuemen['quantite']?></div>
									<h6 class="product_name"><a href="single.html"><?=$valuemen['description']?></a></h6>
									<div class="product_price"><?=$valuemen['nom']?></div>
									<div class="product_price"><?=number_format($valuemen['prix'])  ?> Eco<!-- <span><?=$value['prix']?></span> --></div>
								</div>
							</div>
								

							<div class="red_button add_to_cart_button">
									<?php 
											if (empty($_SESSION)) 
											{
												?>
											<a href="client/connexion.php"> <i class="glyphicon glyphicon-plus"></i> Au panier</a>
											<?php 	
											}
											else
											{
												?>
											<a id="panier" href="client/viewarticle.php?articlenumero=<?=$valuemen['id']?>" <?php if (isset($_SESSION['idvendeur'])) 
											{
												?>
												 onclick="alert('Dèsolé, vous ne pouvez pas passer de commande avec un compte vendeur !')"
												<?php	

											}
											?> > <i class="glyphicon glyphicon-plus"></i> Au panier</a>	
												<?php 
											}




									 ?>
												
							</div>
						</div>


															   				<?php

								   			}


								   			$requete=$base->query('SELECT * FROM article WHERE Genre="Enfant" ORDER BY dateenregistrement desc');
				      				$retourrequete=$requete->fetchAll();

								   			foreach ($retourrequete as $key => $valuegoss) 

								   			{
								   				?>
						<div class="product-item Enfant" style="margin-bottom: 20%; max-height: 300px">

							<div class="product discount product_filter">
								<div class="product_image">
									<a href="images/<?=$valuegoss['image']?>"><img class="img-responsive" src="images/<?=$valuegoss['image']?>" alt=""  style="max-height: 300px; padding: 10%"></a>
								</div>
								<div class="favorite favorite_left"></div>
								<?php 
											if ($valuegoss['Etat']=='Neuf') 
											{
												?>
												<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
													<span><?=$valuegoss['Etat']?></span>
												</div>
												<?php
											}
											else
											{
												?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span><?=$valuegoss['Etat']?></span>
												</div>
												<?php
											}

									 ?>
								<div class="product_info">
									<div class="product_price"><?=$valuegoss['quantite']?></div>
									<h6 class="product_name"><a href="single.html"><?=$valuegoss['description']?></a></h6>
									<div class="product_price"><?=$valuegoss['nom']?></div>
									<div class="product_price"><?=number_format($valuegoss['prix'])  ?> Eco<!-- <span><?=$value['prix']?></span> --></div>
								</div>
							</div>
								

							<div class="red_button add_to_cart_button">
									<?php 
											if (empty($_SESSION)) 
											{
												?>
											<a href="client/connexion.php"> <i class="glyphicon glyphicon-plus"></i> Au panier</a>
											<?php 	
											}
											else
											{
												?>
											<a id="panier" href="client/viewarticle.php?articlenumero=<?=$valuegoss['id']?>" <?php if (isset($_SESSION['idvendeur'])) 
											{
												?>
												 onclick="alert('Dèsolé, vous ne pouvez pas passer de commande avec un compte vendeur !')"
												<?php	

											}
											?> > <i class="glyphicon glyphicon-plus"></i> Au panier</a>	
												<?php 
											}




									 ?>
												
							</div>
						</div>



					 <!-- Article à afficher lorsqui'il y a un de code vendeur transmis a la page -->

								   				<?php

								   			}




							 }

							

							 else
							 {

							 		$requete=$base->query('SELECT * FROM article WHERE idvendeur="'.$_GET['codevendeur'].'" ORDER BY dateenregistrement desc');
				      				$retourrequete=$requete->fetchAll();


									if (empty($retourrequete)) 
									{
										?>
										<script type="text/javascript">
											document.getElementById('indicboutique').innerText='Désolé cette boutique est vide';
										</script>
										<?php
									}
									elseif (!empty($retourrequete) && !isset($_SESSION['idclient'])) 
									{
										?>
										<script type="text/javascript">
											document.getElementById('sousindicboutique').innerText='Vous n\'êtes pas connecté. Veuillez vous connecter puis retaper l\'adresse du vendeur';
										</script>
										<?php
									}


								   			foreach ($retourrequete as $key => $value) 

								   			{	

								   					?>
						<!-- Tout(*) les articles -->
						<div class="product-item *" style="margin-bottom: 20%; max-height: 300px">

							<div class="product discount product_filter">
								<div class="product_image">
									<a href="images/<?=$value['image']?>"><img class="img-responsive" src="images/<?=$value['image']?>" alt=""  style="max-height: 300px; padding: 10%"></a>
								</div>
								<div class="favorite favorite_left"></div>
								<?php 
											if ($value['Etat']=='Neuf') 
											{
												?>
												<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
													<span><?=$value['Etat']?></span>
												</div>
												<?php
											}
											else
											{
												?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span><?=$value['Etat']?></span>
												</div>
												<?php
											}

									 ?>
								<div class="product_info">
									<div class="product_price"><?=$value['quantite']?></div>
									<h6 class="product_name"><a href="single.html"><?=$value['description']?></a></h6>
									<div class="product_price"><?=$value['nom']?></div>
									<div class="product_price"><?=number_format($value['prix'])  ?> Eco<!-- <span><?=$value['prix']?></span> --></div>
								</div>
							</div>
								

							<div class="red_button add_to_cart_button">
									<?php 
											if (empty($_SESSION)) 
											{
												?>
											<a href="client/connexion.php"> <i class="glyphicon glyphicon-plus"></i> Au panier</a>
											<?php 	
											}
											else
											{
												?>
											<a id="panier" href="client/viewarticle.php?articlenumero=<?=$value['id']?>" <?php if (isset($_SESSION['idvendeur'])) 
											{
												?>
												 onclick="alert('Dèsolé, vous ne pouvez pas passer de commande avec un compte vendeur !')"
												<?php	

											}
											?> > <i class="glyphicon glyphicon-plus"></i> Au panier</a>	
												<?php 
											}




									 ?>
												
							</div>
						</div>


								   					<?php


								   			}



								   			$requete=$base->query('SELECT * FROM article WHERE idvendeur="'.$_GET['codevendeur'].'" and Genre="Femme" ORDER BY dateenregistrement desc');
				      				$retourrequete=$requete->fetchAll();

								   			foreach ($retourrequete as $key => $valuewomen) 

								   			{
								   				?>
								   				<!-- Tout les articles feminin -->
						<div class="product-item women" style="margin-bottom: 20%; max-height: 300px">

							<div class="product discount product_filter">
								<div class="product_image">
									<a href="images/<?=$valuewomen['image']?>"><img class="img-responsive" src="images/<?=$valuewomen['image']?>" alt=""  style="max-height: 300px; padding: 10%"></a>
								</div>
								<div class="favorite favorite_left"></div>
								<?php 
											if ($valuewomen['Etat']=='Neuf') 
											{
												?>
												<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
													<span><?=$valuewomen['Etat']?></span>
												</div>
												<?php
											}
											else
											{
												?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span><?=$valuewomen['Etat']?></span>
												</div>
												<?php
											}

									 ?>
								<div class="product_info">
									<div class="product_price"><?=$valuewomen['quantite']?></div>
									<h6 class="product_name"><a href="single.html"><?=$valuewomen['description']?></a></h6>
									<div class="product_price"><?=$valuewomen['nom']?></div>
									<div class="product_price"><?=number_format($valuewomen['prix'])  ?> Eco<!-- <span><?=$value['prix']?></span> --></div>
								</div>
							</div>
								

							<div class="red_button add_to_cart_button">
									<?php 
											if (empty($_SESSION)) 
											{
												?>
											<a href="client/connexion.php"> <i class="glyphicon glyphicon-plus"></i> Au panier</a>
											<?php 	
											}
											else
											{
												?>
											<a  id="panier" href="client/viewarticle.php?articlenumero=<?=$valuewomen['id']?>" <?php if (isset($_SESSION['idvendeur'])) 
											{
												?>
												 onclick="alert('Dèsolé, vous ne pouvez pas passer de commande avec un compte vendeur !')"
												<?php	

											}
											?> > <i class="glyphicon glyphicon-plus"></i> Au panier</a>	
												<?php 
											}




									 ?>
												
							</div>
						</div>

								   				<?php

								   			}


								   			$requete=$base->query('SELECT * FROM article WHERE idvendeur="'.$_GET['codevendeur'].'" and Genre="Homme" ORDER BY dateenregistrement desc');
				      				$retourrequete=$requete->fetchAll();

								   			foreach ($retourrequete as $key => $valuemen) 

								   			{
								   				?>
							<!-- Tout les articles masculin-->
						<div class="product-item men" style="margin-bottom: 20%; max-height: 300px">

							<div class="product discount product_filter">
								<div class="product_image">
									<a href="images/<?=$valuemen['image']?>"><img class="img-responsive" src="images/<?=$valuemen['image']?>" alt=""  style="max-height: 300px; padding: 10%"></a>
								</div>
								<div class="favorite favorite_left"></div>
								<?php 
											if ($valuemen['Etat']=='Neuf') 
											{
												?>
												<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
													<span><?=$valuemen['Etat']?></span>
												</div>
												<?php
											}
											else
											{
												?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span><?=$valuemen['Etat']?></span>
												</div>
												<?php
											}

									 ?>
								<div class="product_info">
									<div class="product_price"><?=$valuemen['quantite']?></div>
									<h6 class="product_name"><a href="single.html"><?=$valuemen['description']?></a></h6>
									<div class="product_price"><?=$valuemen['nom']?></div>
									<div class="product_price"><?=number_format($valuemen['prix'])  ?> Eco<!-- <span><?=$value['prix']?></span> --></div>
								</div>
							</div>
								

							<div class="red_button add_to_cart_button">
									<?php 
											if (empty($_SESSION)) 
											{
												?>
											<a href="client/connexion.php"> <i class="glyphicon glyphicon-plus"></i> Au panier</a>
											<?php 	
											}
											else
											{
												?>
											<a id="panier" href="client/viewarticle.php?articlenumero=<?=$valuemen['id']?>" <?php if (isset($_SESSION['idvendeur'])) 
											{
												?>
												 onclick="alert('Dèsolé, vous ne pouvez pas passer de commande avec un compte vendeur !')"
												<?php	

											}
											?> > <i class="glyphicon glyphicon-plus"></i> Au panier</a>	
												<?php 
											}




									 ?>
												
							</div>
						</div>

								   				<?php

								   			}


								   			$requete=$base->query('SELECT * FROM article WHERE idvendeur="'.$_GET['codevendeur'].'"  and Genre="Enfant" ORDER BY dateenregistrement desc');
				      				$retourrequete=$requete->fetchAll();

								   			foreach ($retourrequete as $key => $valuegoss) 

								   			{
								   				?>
								   				<!-- Tout les articles pour enfant -->
						<div class="product-item Enfant" style="margin-bottom: 20%; max-height: 300px">

							<div class="product discount product_filter">
								<div class="product_image">
									<a href="images/<?=$valuegoss['image']?>"><img class="img-responsive" src="images/<?=$valuegoss['image']?>" alt=""  style="max-height: 300px; padding: 10%"></a>
								</div>
								<div class="favorite favorite_left"></div>
								<?php 
											if ($valuegoss['Etat']=='Neuf') 
											{
												?>
												<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
													<span><?=$valuegoss['Etat']?></span>
												</div>
												<?php
											}
											else
											{
												?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span><?=$valuegoss['Etat']?></span>
												</div>
												<?php
											}

									 ?>
								<div class="product_info">
									<div class="product_price"><?=$valuegoss['quantite']?></div>
									<h6 class="product_name"><a href="single.html"><?=$valuegoss['description']?></a></h6>
									<div class="product_price"><?=$valuegoss['nom']?></div>
									<div class="product_price"><?=number_format($valuegoss['prix'])  ?> Eco<!-- <span><?=$value['prix']?></span> --></div>
								</div>
							</div>
								

							<div class="red_button add_to_cart_button">
									<?php 
											if (empty($_SESSION)) 
											{
												?>
											<a href="client/connexion.php"> <i class="glyphicon glyphicon-plus"></i> Au panier</a>
											<?php 	
											}
											else
											{
												?>
											<a id="panier" href="client/viewarticle.php?articlenumero=<?=$valuegoss['id']?>" <?php if (isset($_SESSION['idvendeur'])) 
											{
												?>
												 onclick="alert('Dèsolé, vous ne pouvez pas passer de commande avec un compte vendeur !')"
												<?php	

											}
											?> > <i class="glyphicon glyphicon-plus"></i> Au panier</a>	
												<?php 
											}




									 ?>
												
							</div>
						</div>

								   				<?php

								   			}


						 }

						

						?>
						


					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deal of the week -->

	<!-- <div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="images/deal_ofthe_week.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Deal Of The Week</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="#">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->

							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
											<div class="product_price">$520.00<span>$590.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 2 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/product_2.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
											<div class="product_price">$610.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 3 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/product_3.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
											<div class="product_price">$120.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 4 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product">
										<div class="product_image">
											<img src="images/product_4.png" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
											<div class="product_price">$410.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 5 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women men">
									<div class="product">
										<div class="product_image">
											<img src="images/product_5.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
											<div class="product_price">$180.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 6 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_6.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
											<div class="product_price">$520.00<span>$590.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 7 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/product_7.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
											<div class="product_price">$610.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 8 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product">
										<div class="product_image">
											<img src="images/product_8.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
											<div class="product_price">$120.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 9 -->

							<div class="owl-item product_slider_item">
								<div class="product-item men">
									<div class="product">
										<div class="product_image">
											<img src="images/product_9.png" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
											<div class="product_price">$410.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 10 -->

							<div class="owl-item product_slider_item">
								<div class="product-item men">
									<div class="product">
										<div class="product_image">
											<img src="images/product_10.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
											<div class="product_price">$180.00</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
