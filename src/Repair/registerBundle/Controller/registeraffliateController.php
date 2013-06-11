<?php

namespace Repair\registerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Repair\StoreBundle\Entity\affliates;
class registeraffliateController extends Controller
{
  public function affliateAction(Request $request)
    {
  	 $affliate = new affliates();
         $form = $this->createFormBuilder($affliate,array('validation_groups' => array('registration')))
         ->add('username', 'text', array('required' => false))
         ->add('password', 'password', array('required' => false))
         ->add('email', 'text', array('required' => false))
          ->getForm();
	  $em = $this->getDoctrine()->getManager();
	if ($request->getMethod() == 'POST') 
	  {
		$form->bind($request);
		if ($form->isValid()) 
		{
			$username = $form["username"]->getData();
	        	$password = $form["password"]->getData();
			$email=	$form["email"]->getData();
			$role='2';
			$affliate->setUsername($username);
    			$affliate->setPassword($password);
			$affliate->setEmail($email);
			$affliate->setParentId('1');
			$affliate->setRole($role);
			$affliate->setStatus('0');
			$em = $this->getDoctrine()->getManager();
    			$em->persist($affliate);
			$em->flush();
			$message = \Swift_Message::newInstance()
        			->setSubject('You have registered Succesfully')
        			->setFrom('send@example.com')
        			->setTo($email)
				->setContentType('text/html')
				->setBody($this->renderView('RepairregisterBundle:register:email.html.php',array('name'=>$username,'role'=>$role)));
			$this->get('mailer')->send($message);
			return $this->redirect($this->generateUrl('login'));
		}
		else
		{
			return $this->render('RepairregisterBundle:register:affliate.html.php', array(
            'form' => $form->createView(),));
		}

	}
	else
	{
		return $this->render('RepairregisterBundle:register:affliate.html.php', array(
            'form' => $form->createView(),));
        }
   }
}
