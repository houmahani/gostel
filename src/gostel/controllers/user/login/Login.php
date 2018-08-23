<?php

namespace Gostel\controllers\user\login;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Silex\Application;
use Gostel\models\UserModel;


class Login {

	public function showForm(Application $app) {
		return $app['twig']->render('user/login.twig');
	}

	public function submitForm(Request $request, Application $app) {
		
		$email = $request->get('email');
		$password = $request->get('password');
		
		if (!empty($email) && !empty($password)) {
			
			$oUser = new UserModel();
			$aUser = $oUser->signIn($app, $email);
		}
		
		
		// Session
		// Create session 
		$app['session']->start();
		
		if (!empty($email) && !empty($password)) {
	
			$app['session']->set(
				'user',
				 array(
					 'email' => $email,
					 'firstname' => $aUser['FirstName'],
					 'lastname' => $aUser['LastName']
				 )
			);
			
		}
		
		$user = $app['session']->get('user');

		$app['session']->getFlashbag()->add('notice', 'Hello '.$aUser['FirstName'].' '.$aUser['LastName'].'! Content de te revoir !');

		$app['session']->getFlashBag();
		
		
		return $app->redirect($app['url_generator']->generate('home'));
	}
}