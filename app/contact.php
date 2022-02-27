<!doctype html>
<html lang="en">
    <head>
        <title>Contact | Del Monte Honeyglow Pineapple</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="contact yellow-hero alt-nav">
        <div class="page-container">
			<?php include('includes/preloader.php'); ?>	
			<?php include('includes/browserupgrade.php'); ?>
			<?php include('includes/header.php'); ?>
			<main>
				<div class="hero animatedParent animateOnce">
					<h1 class="animated heading3D delay-250">Let's Chat</h1>
					<div class="page-wrapper animated fadeIn slow delay-750">
						<div class="form-text">
							<p class="form-heading">Get in Touch…</p>
							<p>Questions, comments, concerns - we want to hear it all! We are always interested in hearing from our customers on how we can improve.</p>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6 form-group">
									<div>
										<label for="fname" class="sr-only">First Name</label>
										<input type="text" id="fname" placeholder="First Name" />
									</div>
								</div>
								<div class="col-md-6 form-group">
									<div>
										<label for="lname" class="sr-only">Last Name</label>
										<input type="text" id="lname" placeholder="Last Name" />
									</div>
								</div>
								<div class="col-md-6 form-group">
									<div>
										<label for="email" class="sr-only">Email Address</label>
										<input type="email" id="email" placeholder="Email Address" />
									</div>
								</div>
								<div class="col-md-6 form-group">
									<div>
										<label for="phone" class="sr-only">Phone Number</label>
										<input type="tel" id="phone" placeholder="Phone Number" />
									</div>
								</div>
								<div class="col-md-6 form-group">
									<div>
										<label for="reason" class="sr-only">Reason for Contact</label>
										<input type="text" id="reason" placeholder="Reason for Contact" />
									</div>
								</div>
								<div class="col-md-6 form-group">
									<div>
										<label for="country" class="sr-only">Country</label>
										<select id="country">
											<option selected disabled>Country</option>
											<option>United States</option>
											<option>Canada</option>
											<option>France</option>
											<option>Japan</option>
											<option>Austrailia</option>
										</select>
									</div>
								</div>
								<div class="col-12 form-group tall">
									<div>
										<label for="message" class="sr-only">Type something</label>
										<textarea id="message" placeholder="Type something"></textarea>
									</div>
								</div>
								<div class="col-md-8 form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Please note that any communication with The Ashcroft Law Firm (ALF) via e-mail through this website does not constitute or create an attorney-client relationship with ALF. Please do not send any confidential information. A conflicts-of-interest check must be completed by our attorneys prior to establishment of an attorney-client relationship. When you execute an engagement letter with ALF you will be our client, and you may then exchange information freely with an ALF attorney.</label>
								</div>
								<div class="col-md-4 form-group">
									<div class="submit">
										<input type="submit" id="submit" value="Send" />
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<section class="contact-info animatedParent animateOnce">
					<div class="page-wrapper animated fadeIn slow delay-500">
						<div class="text-center">
							<p><strong>Please feel free to contact the Consumer Affairs Department directly.<br />
							<a href="mailto:consumers@freshdelmonte.com">consumers@freshdelmonte.com</a></strong></p>
							<p>305-520-8668<br />
							Del Monte Fresh Produce N.A., Inc.<br />
							P.O. Box 149222<br />
							Coral Gables, FL 33114-9222 USA</p>
						</div>
					</div>
				</section>
			</main>
			<?php include('includes/instagram.php'); ?>
			<?php include('includes/footer.php'); ?>
		</div>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>