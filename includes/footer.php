  <footer>
    <div class="social">

      <a href="https://github.com/BRichardson2993" target="_blank"><img src="images/GitHub-Logos/GitHub_Logo.png" alt="github icon" class="socialIcon"></a>
    
      <a href="https://www.linkedin.com/in/brian-richardson-7054676" target="_blank"><img src="images/LI-Logo.png" alt="linked in icon" class="socialIcon"></a>
      
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
  <script type="text/javascript" src="js/modal.js"></script>
</body>
</html>
