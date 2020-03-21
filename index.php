<?php 
session_start();
											

      require('includes/database.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
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




	<?phpb require('includes/header.php'); ?>

<!-- 	<br><br>
		<section class="hero-slider"  >
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="images/slider-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Vous êtes vendeur ?</h1>h2
                            <h2>Créer un compte et vender gratuitement vos produits.</h2>
                            <a href="#" class="primary-btn">Commençer maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="images/slider_2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="images/slider_3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(images/ecommerce.webp)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<br><br><br>
					<div class="main_slider_content">
						<h3>Vous êtes vendeur ?<br><br></h3>
						<h1>Créer un compte et vender gratuitement vos produits.</h1>

						<br>
						<div ><a href="client_fournisseur/inscription.php" class="btn btn-danger">Commencer maintenant</a></div>
					</div>
				</div>
			</div>
		</div>
	</div> 

	<!-- Banner -->
	<div>
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="banner_item align-items-center" style="background-image:url(images/banner_1.jpg);">
							<div class="banner_category">
								<a href="client/categories.php?categories=vetement">Vêtements</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item align-items-center" style="background-image:url(images/banner_2.jpg);">
							<div class="banner_category">
								<a href="client/categories.php?categories=chaussure">Chaûssures</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item align-items-center" style="background-image:url(images/banner_3.jpg);">
							<div class="banner_category">
								<a href="client/categories.php?categories=Telephone">Telephone</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="banner_item align-items-center" style="background-image:url(images/banner_1.jpg);">
							<div class="banner_category">
								<a href="client/categories.php?categories=accessoires">Accessoires</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item align-items-center" style="background-image:url(images/banner_2.jpg);">
							<div class="banner_category">
								<a href="client/categories.php?categories=Informatique">Informatiques</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item align-items-center" style="background-image:url(images/banner_3.jpg);">
							<div class="banner_category">
								<a href="client/categories.php?categories=autres">Autres</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

	</div>
	
	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Nouvel arrivage</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">Tout</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">Femmes</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessoires</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">Hommes</li>
						</ul>
					</div>
				</div>
			</div>


						
				<!-- 	<i class="fa fa-plus" aria-hidden="true" style="cursor: pointer;" onclick="deletearticle();"></i>

					<script type="text/javascript">
						
						function deletearticle(){
							document.getElementById('search').innerHTML='<div><?php $id="14";
	 $suipprimer=$base->query("DELETE FROM article WHERE id=$id"  ); ?>
</div>'
						}

					</script>
			<div id="search"></div>
 -->

<!-- 
			<i class="fa fa-plus" aria-hidden="true" style="cursor: pointer;" onclick="searchAdd();"></i>

<br><br> 
			<i class="fa fa-search" aria-hidden="true" style="cursor: pointer;" onclick="search();"></i>
<?php $a=9000000000; ?>
					<script type="text/javascript">
						
						function search(){
							document.getElementById('search').innerHTML='<input style=" transition: 0.2s" type="search" placeholder="Recherche..." name="recherche" class="form-control"  value="<?=$a;?>">'
						}

						function closeSearch(){
							document.getElementById('search').innerHTML=''
						}

							function searchAdd(){
							document.getElementById('searchAdd').innerHTML='<input style=" transition: 0.2s" type="search" placeholder="Recherche..." name="recherche" class="form-control"  value="<?=$a;?>">'
						}


					</script>

			<div id="search"></div>
			<div id="searchAdd"></div>
 -->




			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->
						<?php 

								 	$requete=$base->query('SELECT * FROM article ORDER BY dateenregistrement desc');
				      				$retourrequete=$requete->fetchAll();
								   			foreach ($retourrequete as $key => $value) 
								   			{


								   				$a=date('d',time());
								   				$b=date('d',$value['dateenregistrement']);
								   				$c=$a-$b;



								if ($c<=30) 
								{
	
										
					?>

						<div class="product-item *" style="margin-bottom: 20%; max-height: 300px">

							<div class="product discount product_filter">
								<div class="product_image">
									<a href="images/<?=$value['image']?>"><img class=" img img-responsive" src="images/<?=$value['image']?>" alt=""  style="max-height: 300px; padding: 10%"></a>
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
								   			}

						?>
						

						<!-- Product 2 -->
						<?php 

								 	$requetewomen=$base->query('SELECT * FROM article WHERE Genre="Femme" ORDER BY dateenregistrement desc');
				      				$retourrequetewomen=$requetewomen->fetchAll();
								   			foreach ($retourrequetewomen as $key => $valuewomen) 
								   			{
								   				
								   				$o=date('d',time());
								   				$p=date('d',$valuewomen['dateenregistrement']);
								   				$x=$o-$p;


								if ($x<=30) 
								{

								
	
										
					?>
<div class="bondesign">
							<div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
									<a href="images/<?=$valuewomen['image']?>"><img class="img img-responsive"  src="images/<?=$valuewomen['image']?>" alt=""  style="max-height: 300px; padding: 5%; max-width: 400px"></a>
								</div>
								<div class="favorite"></div>
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
									<div class="product_price"><?=number_format($valuewomen['prix'])  ?> Eco<!-- <span><?=$valuewomen['prix']?></span> --></div>

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
											<a id="panier" href="client/viewarticle.php?articlenumero=<?=$valuewomen['id']?>" <?php if (isset($_SESSION['idvendeur'])) 
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
</div>
						<?php 

							}
								}
						 ?>


						<!-- Product 3 --> 
						<?php 

								 $requeteaccessoires=$base->query('SELECT * FROM article WHERE categorie="accessoires" ORDER BY dateenregistrement desc');
				      			$retourrequeteaccessoires=$requeteaccessoires->fetchAll();
								   			foreach ($retourrequeteaccessoires as $key => $valueaccessoires) 
								   			{
								   				$s=date('d',time());
								   				$z=date('d',$value['dateenregistrement']);
								   				$v=$s-$z;

								if ($v<=30) 
								{

								

						?>
						<div class="product-item accessories">
							<div class="product product_filter">
								<div class="product_image">
									<a href="images/<?=$valueaccessoires['image']?>"><img class="img img-responsive"  src="images/<?=$valueaccessoires['image']?>" alt="" ></a>
								</div>
								<?php 
											if ($valueaccessoires['Etat']=='Neuf') 
											{
												?>
												<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
													<span><?=$valueaccessoires['Etat']?></span>
												</div>
												<?php
											}
											else
											{
												?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span><?=$valueaccessoires['Etat']?></span>
												</div>
												<?php
											}

									 ?>
								
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<div class="product_price"><?=$valueaccessoires['quantite']?></div>
									<h6 class="product_name"><a href="single.html"><?=$valueaccessoires['description']?></a></h6>
									<div class="product_price"><?=$valueaccessoires['nom']?></div>
									<div class="product_price"><?=number_format($valueaccessoires['prix'])  ?> Eco<!-- <span><?=$valueaccessoires['prix']?></span> --></div>
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
											<a id="panier" href="client/viewarticle.php?articlenumero=<?=$valueaccessoires['id']?>" <?php if (isset($_SESSION['idvendeur'])) 
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
						<!-- Product 5 -->

							<?php 

								 $requetemen=$base->query('SELECT * FROM article WHERE Genre="Homme" ORDER BY dateenregistrement desc');
				      			$retourrequetemen=$requetemen->fetchAll();
								   			foreach ($retourrequetemen as $key => $valuemen) 
								   			{
								   				$l=date('d',time());
								   				$m=date('d',$value['dateenregistrement']);
								   				$n=$l-$m;

								if ($l<=10) 
								{}
	
										
						?>

						<div class="product-item men">
							<div class="product product_filter">
								<div class="product_image">
									<a href="images/<?=$valuemen['image']?>"><img class="img img-responsive"  src="images/<?=$valuemen['image']?>" alt=""  style="max-height: 300px; padding: 5%; max-width: 400px"></a>
								</div>
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
								
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<div class="product_price"><?=$valuemen['quantite']?></div>
									<h6 class="product_name"><a href="single.html"><?=$valuemen['description']?></a></h6>
									<div class="product_price"><?=$valuemen['nom']?></div>
									<div class="product_price"><?=number_format($valuemen['prix'])  ?> Eco<!-- <span><?=$valuemen['prix']?></span> --></div>
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

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>LIVRAISON GRATUITE PARTOUT ABIDJAN</h6>

						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>PAYER A LA LIVRAISON</h6>
							<p>verification possible de l'article</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>14 JOURS POUR RETOURNER UN ARTICLE</h6>
							<p></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>OUVERT TOUT LES WEEK-END</h6>
							<p> DE 8H-14H</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blogs -->

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Latest Blogs</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_1.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_2.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_3.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
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

<script type="text/javascript">


	

			function ouvrir(){
				document.getElementById("mysidnav").style.width="100%";
				
				document.getElementById("nav").style.marginleft="100%";
			}

			function fermer(){
				document.getElementById("mysidnav").style.width="0";

				document.getElementById("nav").style.marginleft="0";
			}

			

</script>
	  <script src="vendor/jquery/jquery.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/js/demo/chart-area-demo.js"></script>
  <script src="js/js/demo/chart-pie-demo.js"></script>


  <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap/popper.js"></script>
<script src="styles/bootstrap/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
