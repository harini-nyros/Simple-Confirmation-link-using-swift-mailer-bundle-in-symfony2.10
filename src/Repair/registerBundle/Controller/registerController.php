<?php

namespace Repair\registerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Repair\StoreBundle\Entity\users;

class registerController extends Controller
{
    public function clientAction(Request $request)
    {
	$register = new users();
	$form = $this->createFormBuilder($register,array('validation_groups' => array('registration')))
	 ->add('name', 'text', array('required' => false))
         ->add('username', 'text', array('required' => false))
         ->add('password', 'password', array('required' => false))
         ->add('email', 'text', array('required' => false))
          ->getForm();
	  $em = $this->getDoctrine()->getManager();
	if ($request->getMethod() == 'POST') 
	  {
		$form->bind($request);
	        
		$repository = $em->getRepository('RepairStoreBundle:users');
		if ($form->isValid()) 
		{
			$name = $form["name"]->getData();
			$username = $form["username"]->getData();
	        	$password = $form["password"]->getData();
	        	$email = $form["email"]->getData();
			$role='0';
			$register->setUsername($username);
    			$register->setPassword($password);
    			$register->setRole($role);
    			$register->setName($name);
			$register->setEmail($email);
			$register->setNote('');
			$register->setTitle('');
                	$register->setAccno('');
                	$register->setScore('');
			$register->setParentId('');
			$register->setStatus('0');
			$em = $this->getDoctrine()->getManager();
    			$em->persist($register);
    			$em->flush();
			$message = \Swift_Message::newInstance()
        			->setSubject('You have registered Succesfully')
        			->setFrom('send@example.com')
        			->setTo($email)
				->setContentType('text/html')
				->setBody($this->renderView('RepairregisterBundle:register:email.html.php',array('name'=>$username)));
			$this->get('mailer')->send($message);
			return $this->redirect($this->generateUrl('login'));
					
		}
		else
		{ 
			return $this->render('RepairregisterBundle:register:client.html.php', array(
            'form' => $form->createView(),));
	
		}
	}
	else
	{
		return $this->render('RepairregisterBundle:register:client.html.php', array(
            'form' => $form->createView(),));
        }
    }

}
