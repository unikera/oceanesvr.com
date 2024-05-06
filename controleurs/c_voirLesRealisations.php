<?php
$action = $_REQUEST['action'];
switch($action)
{
	//voir toute les réalisations en général
	case 'voirLesRealisations':
	{
  	$lesRealisations = $pdoFolio->getLesRealisations();
		include("vues/v_realisations.php");
  		break;
	}
	

}
?>

<body>

<script>
$(document).ready(function() {
    $(".realisation").each(function() {
        var versoHeight = $(this).find(".verso").outerHeight();
        $(this).css("height", versoHeight + "px");
    });
});
</script>

</body>