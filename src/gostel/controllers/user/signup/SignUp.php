<?php 
namespace Gostel\controllers;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;


class SignUp {

	public function showForm() {
		return $app['twig']->render('signup.twig');
	}

	public function submitForm(Request $request, Application $app) {
		
		return $app['twig']->render(
			'signup.twig',
			[
				'firstname' => $request->get('firstname'),
				'lastname' => $request->get('lastname')
			]
		);
	}
}