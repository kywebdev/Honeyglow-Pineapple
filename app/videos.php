<!doctype html>
<html lang="en">
    <head>
        <title>Videos | Del Monte Honeyglow Pineapple</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="videos-page yellow-hero alt-nav">
        <div class="page-container">
			<?php include('includes/preloader.php'); ?>
			<?php include('includes/browserupgrade.php'); ?>
			<?php include('includes/header.php'); ?>
			<main>
				<div class="hero animatedParent animateOnce">
					<h1 class="animated heading3D delay-250">Video / Content Page</h1>
					<div class="page-wrapper animated fadeIn slow delay-750">
						<div class="hero-text">
							<p class="hero-heading">No Need to Shake the Trees</p>
							<p>Despite our limited harvest, there’s enough sweetness to go around. You can try the exclusive experience of the Honeyglow<sup>&reg;</sup> at a fine retailer near you today.</p>
						</div>
					</div>
				</div>
				<section class="video-thumbs animatedParent animateOnce">
					<div class="page-wrapper animated fadeInUpShort delay-1000">
						<div class="hex">
							<div class="hex-inner">
								<a href="" class="hex-link" data-toggle="modal" data-target="#videoModal">
									<img src="img/video-thumb-1.png" alt="">
									<div class="color-overlay"></div>
									<div class="play">
										<img src="img/play.svg" alt="" />
									</div>
								</a>
							</div>
						</div>
						<div class="hex">
							<div class="hex-inner">
								<a href="" class="hex-link" data-toggle="modal" data-target="#videoModal">
									<img src="img/video-thumb-2.png" alt="">
									<div class="color-overlay"></div>
									<div class="play">
										<img src="img/play.svg" alt="" />
									</div>
								</a>
							</div>
						</div>
						<div class="hex">
							<div class="hex-inner">
								<a href="" class="hex-link" data-toggle="modal" data-target="#videoModal">
									<img src="img/video-thumb-3.png" alt="">
									<div class="color-overlay"></div>
									<div class="play">
										<img src="img/play.svg" alt="" />
									</div>
								</a>
							</div>
						</div>
						<div class="hex">
							<div class="hex-inner">
								<a href="" class="hex-link" data-toggle="modal" data-target="#videoModal">
									<img src="img/video-thumb-2.png" alt="">
									<div class="color-overlay"></div>
									<div class="play">
										<img src="img/play.svg" alt="" />
									</div>
								</a>
							</div>
						</div>
						<div class="hex">
							<div class="hex-inner">
								<a href="" class="hex-link" data-toggle="modal" data-target="#videoModal">
									<img src="img/video-thumb-3.png" alt="">
									<div class="color-overlay"></div>
									<div class="play">
										<img src="img/play.svg" alt="" />
									</div>
								</a>
							</div>
						</div>
						<div class="hex">
							<div class="hex-inner">
								<a href="" class="hex-link" data-toggle="modal" data-target="#videoModal">
									<img src="img/video-thumb-1.png" alt="">
									<div class="color-overlay"></div>
									<div class="play">
										<img src="img/play.svg" alt="" />
									</div>
								</a>
							</div>
						</div>
						<div class="hex">
							<div class="hex-inner">
								<a href="" class="hex-link" data-toggle="modal" data-target="#videoModal">
									<img src="img/video-thumb-2.png" alt="">
									<div class="color-overlay"></div>
									<div class="play">
										<img src="img/play.svg" alt="" />
									</div>
								</a>
							</div>
						</div>
						<div class="hex">
							<div class="hex-inner">
								<a href="" class="hex-link" data-toggle="modal" data-target="#videoModal">
									<img src="img/video-thumb-3.png" alt="">
									<div class="color-overlay"></div>
									<div class="play">
										<img src="img/play.svg" alt="" />
									</div>
								</a>
							</div>
						</div>
						<div class="hex">
							<div class="hex-inner">
								<a href="" class="hex-link" data-toggle="modal" data-target="#videoModal">
									<img src="img/video-thumb-2.png" alt="">
									<div class="color-overlay"></div>
									<div class="play">
										<img src="img/play.svg" alt="" />
									</div>
								</a>
							</div>
						</div>
						<div class="hex add-hex">
							<div class="hex-inner">
								<a href="" class="hex-link">
									<div class="color-overlay"></div>
									<div class="play">
										<img src="img/add.svg" alt="" />
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>
				<div class="modal video-modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<div class="video" id="recipe-video">
									<div class="content">
										<div id="player"></div>
										<iframe src="https://www.youtube.com/embed/NpEaa2P7qZI?enablejsapi=1" id="video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<div class="video__poster" id="test">
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
						</div>
					</div>
				</div>
				<section class="recipes-section">
					<?php include('includes/recipes-slider.php'); ?>
				</section>
			</main>
			<?php include('includes/prefooter.php'); ?>
			<?php include('includes/instagram.php'); ?>
			<?php include('includes/footer.php'); ?>
		</div>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>