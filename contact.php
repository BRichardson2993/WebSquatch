<?php include('includes/head.php');?>
	<?php include('includes/header.php');?>

		<div id="wrapper">

			<h1>contact me!</h1>

			<div class="intro">
				<p class="introParagraph">Would you like to hire me? Want to collaborate? Have questions about my work? I&rsquo;m happy you&rsquo;ve decided to contact me! I typically respond to contacts within 24 hours. Please use the form below.</p>
			</div>

			<script type="text/javascript">
				// split your email into two parts and remove the @ symbol
				var first = "brian";
				var last = "websquatch.com";
			</script>

			<div class="contactForm">
				<form method="post" action="submit.php">

					<p>Your name:
						<br>
						<input name="name">
					</p>

					<p>Your email:
						<br>
						<input name="email" type="email">
					</p>

					<p>You phone number:
						<br>
						<input name="phone" type="number">
					</p>
					<!-- Important: if you add any fields to this page, you will also need to update the php script -->

					<p class="antispam">Leave this empty:
						<br>
						<input name="url">
					</p>

					<p>Your message:
						<br>
						<textarea name="message" rows="10" cols="50"></textarea>
					</p>

					<button type="submit">Make Contact!</button>


				</form>

				<p class="wsEmail">My e-mail address:
					<script type="text/javascript">
						document.write('<a href="mailto:' + first + '@' + last + '">' + first + '@' + last + '<\/a>');
					</script>
					<noscript>
						Please enable javascript or use the contact form.
					</noscript>
				</p>
			</div>
		</div>

		<?php include('includes/footer.php');?>
