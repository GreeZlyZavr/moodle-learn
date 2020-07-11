<?php 

echo '      <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>

<script>
  $(".button-collapse").sideNav();
</script>
<script>
  $(document).ready(function(){ $(\'.slider\').slider();});
</script>
<script>  
$( document ).ready(function(){
  $(".dropdown-button").dropdown();
  $(\'.parallax\').parallax();
});
</script>
</body>
</html>';

?>