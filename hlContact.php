<?php include('includes/hlHead.php');?>
	<?php include('includes/hlHeader.php');?>

		<div id="wrapper">

			<h1>Hobby Lobby!</h1>

			<div class="intro">
				<p class="introParagraph">Good Day, Hobby Lobby TEAM! I'm very excited about the opportunity to present my skills for your critique. Whether we move forward in the interview process or not, I'd love to hear from each and every one of the team about my work. Please feel free to use the contact form below!</p>
			</div>

			<script type="text/javascript">
				// split your email into two parts and remove the @ symbol
				var first = "richardson8662";
				var last = "gmail.com";
			</script>

			<div class="contactForm">
				<form method="post" action="submit.php">

					<p>your name:
						<br>
						<input name="name">
					</p>

					<p>your email:
						<br>
						<input name="email" type="email">
					</p>

					<p>your phone number:
						<br>
						<input name="phone" type="text">
					</p>
					<!-- Important: if you add any fields to this page, you will also need to update the php script -->

					<p class="antispam">Leave this empty:
						<br>
						<input name="url">
					</p>

					<p>your message:
						<br>
						<textarea name="message"></textarea>
					</p>

					<button type="submit">make contact!</button>


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
 <span class="top"><a href="#logo">back to top</a></span>
		<?php include('includes/hlFooter.php');?>
