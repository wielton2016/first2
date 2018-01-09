<!DOCTYPE html>
<html>
<head>
<style>

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});

</script>
</head>
 <body>

<?php
$ver = ($_GET['ver']);
$q = ($_GET['q']);
$qu = ($_GET['qu']);
$zam = ($_GET['zam']);//nr zamównienia
  $comm = ($_GET['comm']);//komentarz
$comm=str_replace("?_?","+",$comm);
$qu=str_replace("?_?","+",$qu);
	 	$comm=str_replace("'","&#039;",$comm);
    $comm=str_replace("?a?","&#039;",$comm);
   //$comm=str_replace("&#039;","'",$comm);
 include 'tabela_1.php';
//echo htmlspecialchars($comm);
 //saveorder($q,$qu,$zam);
// echo "<div class='se-pre-con'></div>";
//echo "<div id='loader1'></div>";

// echo "<div style='display:none;' id='tabPL' class='animate-bottom'>";
$col=loadorder_live($user_check,4,$zam);
//print_r($comm);
showtableIT($q,$qu,$zam,$comm,$ver);
//print_r($comm);
// print_r('sd');
// echo "</div>";

?>
</body>
</html>
