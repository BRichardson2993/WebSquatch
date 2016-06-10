<footer>
	<div class="social">

		<a href="https://github.com/BRichardson2993" target="_blank"><img src="images/github.png" alt="github icon" class="socialIcon"></a>
		<a href="http://facebook.com/WebSquatch" target="_blank"><img src="images/facebook.png" alt="facebook icon" class="socialIcon"></a>
		<a href="https://www.linkedin.com/in/brian-richardson-7054676"><img src="images/linkedin.png" alt="linked in icon" class="socialIcon"></a>
		<a href="https://brianlrichardson.wordpress.com/" target="_self"><img src="images/wordpress.png" alt="wordpress icon" class="socialIcon"></a>
		<a href="https://plus.google.com/u/0/108291644060002457367/posts" target="_blank"><img src="images/google.png" alt="google icon" class="socialIcon"></a>
		<a href="http://twitter.com/@WebSquatch" target="_blank"><img src="images/twitter.png" alt="twitter icon" class="socialIcon"></a>
	</div>
	<p>
		&copy;
		<?php
		$startYear = 2016;
		$thisYear = date('Y');
		if ($startYear == $thisYear) {
			echo $startYear;
		} else {
			echo "{$startYear}&ndash;{$thisYear}";
		}
	?>
			WebSquatch.com
	</p>
</footer>

</body>

</html>
