<header>
	<div class="header-wrapper">
		<div class="logo d-none d-md-block">
			<a href="index.php">
				<img src="img/logo-desktop.svg" alt="" class="logo-full" />
				<img src="img/honeyglow-logo.svg" alt="" class="logo-half" />
				<img src="img/honeyglow-logo-alt.svg" alt="" class="logo-half-alt" />
				<div class="alt-logo">
					<img src="img/alt-logo.svg" alt="" />
				</div>
			</a>
		</div>
		<div class="navigation">
			<div class="logo d-md-none">
				<a href="index.php">
					<img class="logo-mobile" src="img/logo-mobile.svg" alt="" />
					<div class="alt-logo">
						<img src="img/logo-mobile.svg" alt="" />
					</div>
				</a>
			</div>
			<a href="" class="mobile-nav-toggle" href="">
				<img class="burger-icon" src="img/burger-icon.svg" />
				<img class="close-icon" src="img/close-icon.svg" />
			</a>
			<nav class="navbar">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About Us</a>
					</li>
					<li>
						<a href="recipes.php">Recipes</a>
					</li>
					<li>
						<a href="promotions.php">Promotions</a>
					</li>
					<li>
						<a href="where-to-buy.php">Where to Buy</a>
					</li>
					<li>
						<a href="videos.php">Videos</a>
					</li>
				</ul>
				<div class="show-nav">
					<a href="">More</a>
				</div>
			</nav>
			<div class="search">
				<div class="search-container">
					<form action="search-results.php">
						<label for="search" class="sr-only">Search the site</label>
						<div>
							<input type="search" class="form-control" id="search" placeholder="Search the site" />
						</div>
					</form>
					<!--<button>
						<div class="hex"></div>
						<picture>
							<source srcset="img/search-mobile.svg" media="(max-width:1000px)" />
							<img src="img/search-desktop.svg" alt="" />
						</picture>
						<div class="search-alt">
							<img src="img/search-mobile.svg" alt="" />
						</div>
					</button>-->
				</div>
			</div>
		</div>
		<div class="mobile-footer">
			<ul class="mobile-footer__social">
			<li>
					<a href="https://www.instagram.com/delmontefresh" target="_blank">
						<div class="hex">
							<img src="img/instagram-yellow.svg" alt="" />
						</div>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/DelMonteFreshProduce" target="_blank">
						<div class="hex">
							<img src="img/facebook-yellow.svg" alt="" />
						</div>
					</a>
				</li>
				<li>
					<a href="https://www.pinterest.com/delmontefresh" target="_blank">
						<div class="hex">
							<img src="img/pinterest-yellow.svg" alt="" />
						</div>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/delmontefresh" target="_blank">
						<div class="hex">
							<img src="img/twitter-yellow.svg" alt="" />
						</div>
					</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/company/del-monte-fresh-produce-n-a--inc" target="_blank">
						<div class="hex">
							<img src="img/linkedin-yellow.svg" alt="" />
						</div>
					</a>
				</li>
			</ul>
			<nav class="mobile-footer__nav">
				<ul>
					<li>
						<a href="">Credits</a>
					</li>
					<li>
						<a href="">Cookies</a>
					</li>
					<li>
						<a href="">Privacy Policy</a>
					</li>
					<li>
						<a href="">Terms and Conditions</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
			</nav>
			<p class="mobile-footer__copyright">DEL MONTE and the Shield Logo are registered trademarks of Del Monte Foods Inc. used under license. HONEYGLOW and WHEN WE SAY SWEET, WE MEAN SWEET are trademarks of Del Monte International GmbH &copy; 2021 All rights reserved.</p>
		</div>
	</div>
</header>
<div class="modal search-modal fade hidden-md-up" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<form action="search-results.php">
					<label for="search-mobile" class="sr-only">Search the site</label>
					<div>
						<input type="search" class="form-control" id="search-mobile" placeholder="Search the site" />
						<span></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>