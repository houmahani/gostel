<?php 

namespace Gostel\controllers;

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
			'Gender' => $request->get('gender','m'),
			'FirstName' => $request->get('firstname'),
			'LastName' => $request->get('lastname'),
			'Email' => $request->get('email'),
			'Password' => $request->get('password'),
			'BirthDate' => $request->get('birthdate'),
			'Address' => $request->get('address',''),
			'City' => $request->get('city'),
			'Zipcode' => $request->get('zipcode'),
			'Country' => $request->get('country'),
			'Phone' => $request->get('phone'),	
			'CreationTimestamp' => date("Y-m-d H:i:s")
		));
			
		return $app->redirect($app['url_generator']->generate('home'));


	}
}