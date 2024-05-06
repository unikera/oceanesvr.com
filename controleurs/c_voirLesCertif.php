<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'voirLesCertif':
	{
  	$lesCertifications = $pdoFolio->getLesCertifications();
		include("vues/v_certifications.php");
  		break;
	}
	

}
?>