<?php 

namespace Gostel\controllers\user\signup;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Gostel\models\UserModel;

class SignUp {

	public function showForm(Application $app) {
		return $app['twig']->render('user/signup.twig');
	}

	public function submitForm(Request $request, Application $app) {
		
		$oUser = new UserModel();
		$oUser->signUp($app, array(
			'Gender' => $request->get('gender','male'),
			'Firstname' => $request->get('firstname'),
			'Lastname' => $request->get('lastname'),
			'Birthdate' => $request->get('birthdate'),
			'Email' => $request->get('email'),
			'Phone' => $request->get('phone'),	
			'City' => $request->get('city'),
			'Zipcode' => $request->get('zipcode'),
			'Country' => $request->get('country'),
			'Address' => $request->get('address',''),
			'Password' => $request->get('password'),
			'CreationTimestamp' => date("Y-m-d H:i:s")
		));
			
		return $app->redirect($app['url_generator']->generate('home'));


	}
}