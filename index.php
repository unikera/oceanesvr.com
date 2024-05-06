<?php
session_start();
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;
require_once("util/class.PDO.monportfolio.php");


$uc = isset($_REQUEST['uc']) ? $_REQUEST['uc'] : 'accueil';



switch($uc)
{
	case 'accueil':
		{
			include("vues/v_accueil.php");
			break;
		}

	case 'realisations' :
		{
			include("vues/v_realisations.php");
            break;
		}
		
	case 'certifications' :
	  { 
        include("vues/v_certifications.php");
        break;  
		
        
          }

	 case 'veilleTech' :
			{ 
                include("vues/v_veilleTech.php");
			  break;  
			  
			  
			}
	case 'stages':
		{
			
			include("vues/v_stages.php");

			break;
		}

     case 'apropos':
         {
                
             include("vues/v_apropos.php");
    
              break;
        }

	case 'cvEnLigne':
		 {
				include("vues/v_cvEnLigne.php");

				break;
		}

		case 'tutoftp':
			{
				   include("vues/v_tutoftp.php");
   
				   break;
		   }

		   case 'projetShare':
			{
				   include("vues/v_projetShare.php");
   
				   break;
		   }

		   case 'htAuto':
			{
				   include("vues/v_htAuto.php");
   
				   break;
		   }

		   case 'ssWashAuto':
			{
				   include("vues/v_ssWashAuto.php");
   
				   break;
		   }

		   case 'greenGood':
			{
				   include("vues/v_greenGood.php");
   
				   break;
		   }
}
include("vues/v_pied.php") ;


?>
