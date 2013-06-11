<?php
namespace Repair\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
class homeController extends Controller
{
	public function homeAction(Request $request)
    	{
	return $this->render('RepairLoginBundle:login:home.html.php');

	}
}
