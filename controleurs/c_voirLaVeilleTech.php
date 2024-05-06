<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'voirLaVeilleTech':
	{
  	$lesVeillesTech = $pdoFolio->getLesVeillesTech();
		include("vues/v_veilleTech.php");
  		break;
	}
	

}
?>