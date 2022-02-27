<!doctype html>
<html lang="en">
    <head>
        <title>Recipe Details | Del Monte Honeyglow Pineapple</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="recipe-details">
        <div class="page-container">
			<?php include('includes/preloader.php'); ?>	
			<?php include('includes/browserupgrade.php'); ?>
			<?php include('includes/header.php'); ?>
			<main>
				<div class="hero animatedParent animateOnce">
					<div class="hero__img animated fadeInDownShort">
						<div class="hex">
							<div class="hex-inner">
								<div class="hex-link">
									<img class="hex-link__img-desktop" src="img/DMHoneyglow_CauliflowerFriedRice_HorizontalBranded.png" alt="">
									<img class="hex-link__img-mobile" src="img/DMHoneyglow_CauliflowerFriedRice_VerticalBranded.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="navigation-btns animatedParent animateOnce">
					<a href="" class="navigation-btns__prev animated fadeInRightShort slow delay-750">Prev</a>
					<a href="" class="navigation-btns__next animated fadeInLeftShort slow delay-750">Next</a>
				</div>
				<section class="recipe-content">
					<div class="page-wrapper">
						<div class="animatedParent animateOnce">
							<h1 class="animated heading3D delay-250">Cauliflower Fried “Rice” With Honeyglow<sup>&reg;</sup> Pineapple</h1>
							<div class="recipe-content-buttons animated fadeIn slow delay-750">
								<div class="dropdown">
									<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div class="hex"></div>
										<img src="img/sharing.svg" alt="" />
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a href="http://pinterest.com/pin/create/button/?url=<?php //the_permalink(); ?>&media=<?php //the_field("image"); ?>&description=<?php //the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" class="dropdown-item">Pinterest</a>
										<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php //the_permalink(); ?>&t=<?php //the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" title="Share on Facebook" class="dropdown-item">Facebook</a>
										<a href="https://twitter.com/share?url=<?php //the_permalink(); ?>&text=<?php //the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter" class="dropdown-item">Twitter</a>
									</div>
								</div>
								<button onclick="window.print();">
									<div class="hex"></div>
									<img src="img/printer.svg" alt="" />
								</button>
							</div>
						</div>
						<div class="animatedParent animateOnce">
							<div class="row recipe-info animated fadeInUpShort slow">
								<div class="col-md-5 prep-info">
									<span class="servings">4 servings</span> 
									<span class="prep-time">Prep Time: 15 minutes</span>
									<span class="cook-time">Cook Time: 15 minutes</span>
								</div>
								<div class="col-md-6 offset-md-1 directions-heading">
									<span>Directions:</span>
								</div>
								<div class="col-md-5 ingredients">
									<p>1 large head cauliflower (1½-2 pounds)</p>
									<p>4 large eggs</p>
									<p>½ teaspoon fine sea salt</p>
									<p>3 tablespoons preferred vegetable oil, divided</p>
									<p>1 red bell pepper, seeded and cut into ½” pieces</p>
									<p>1 cup Del Monte<sup>&reg;</sup> Honeyglow<sup>&reg;</sup> Pineapple, cut into ½” cubes</p>
									<p>½ cup green peas, fresh or frozen</p>
									<p>1 tablespoon soy sauce or tamari</p>
									<p>1 tablespoon oyster sauce (or use 1 extra tablespoon soy sauce or tamari)</p>
									<p>3 green onions, finely chopped</p>
									<p>Toasted sesame seeds, for garnish</p>
								</div>
								<div class="col-md-6 offset-md-1 directions">
									<ol>
										<li>Break cauliflower apart into bite-sized florets. Pulse in batches in a food processor until chopped into small, rice-sized pieces, transferring each batch to a medium bowl. Set aside.</li>
										<li>In a medium bowl, beat eggs with salt.</li>
										<li>Heat a large nonstick skillet over medium heat. Add 1 tablespoon oil and swirl pan to coat. Add eggs to pan. As eggs cook, use a silicone spatula to push the set edges into the center, and tilt the pan to redistribute the uncooked egg. Once egg is set, transfer to a bowl and set aside.</li>
										<li>Add remaining 2 tablespoons oil to skillet. Add cauliflower and bell pepper to pan and cook until pepper is just tender, about 5 minutes. Add Honeyglow<sup>&reg;</sup> pineapple and peas and cook, stirring occasionally, 5 minutes more.</li>
										<li>Stir in cooked egg, soy sauce, and oyster sauce and stir to coat cauliflower.</li>
										<li>Serve topped with green onion and sesame seeds.</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="nutrition-info animatedParent animateOnce">
					<div class="row animated fadeInUpShort slow delay-250">
						<div class="col-md-4 nutrition-hexagon-img">
							<picture>
								<source srcset="img/nutrition-hexagons-top-mobile.png" media="(max-width:650px)" />
								<img src="img/nutrition-hexagons-left.png" alt="" />
							</picture>
						</div>
						<div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
							<div class="recipes-nutrition">
								<div class="hex">
									<img src="img/recipe-nutrition-facts.svg" alt="" />
								</div>
							</div>
						</div>
						<div class="col-md-4 nutrition-hexagon-img">
							<picture>
								<source srcset="img/nutrition-hexagons-bottom-mobile.png" media="(max-width:650px)" />
								<img src="img/nutrition-hexagons-right.png" alt="" />
							</picture>
						</div>
					</div>
				</section>
				<section class="recipe-video animatedParent animateOnce">
					<div class="page-wrapper animated fadeInUpShort slow delay-250">
						<div class="video" id="recipe-video">
							<div class="content">
								<div id="player"></div>
								<iframe src="https://www.youtube.com/embed/NpEaa2P7qZI?enablejsapi=1" id="video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<div class="video__poster">
									<picture class="video__poster__img">
										<source media="(max-width: 650px)" srcset="img/recipe-poster-mobile.png">
										<img src="img/recipe-poster-desktop.png" alt="">
									</picture>
									<div class="play-btn">
										<img src="img/play.svg" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
			<?php include('includes/prefooter.php'); ?>
			<?php include('includes/instagram.php'); ?>
			<?php include('includes/footer.php'); ?>
		</div>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>