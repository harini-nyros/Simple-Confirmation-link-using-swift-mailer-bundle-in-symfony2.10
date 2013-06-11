<?php

namespace Repair\registerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Repair\StoreBundle\Entity\users;
use Repair\StoreBundle\Entity\affliates;

class confirmationController extends Controller
{
  public function confirmAction(Request $request)
    {
	$status=$_GET['activelinkactivated'];
	$name=$_GET['wecomename'];
	$role=$_GET['role'];
	if($role==0)
	{
		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('RepairStoreBundle:users');
		$res=$repository->activeuser($status,$name);
	}
	else
	{
		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('RepairStoreBundle:affliates');
		$res=$repository->activeaffliate($status,$name);
	}
		
	return $this->render('RepairLoginBundle:login:thank.html.php');

    }
}
