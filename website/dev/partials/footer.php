  <footer>
    <div class="legal-bar txt-center palette-highlight">
        &copy <?=date('Y');?> Tread Setters LLC - All Rights Reserved <br>
        <a href="">Privacy Policy</a> -
        <a href="">Terms of Use</a>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="/scripts/scripts.js"></script>
<?php
    for($i = 0; $i < count($scripts); $i++){
?>
  <script src="/scripts/<?=$scripts[$i];?>.js"></script>
<?php
    }
?>
</body>
</html>
