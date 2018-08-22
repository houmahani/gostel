<?php

namespace Gostel\controllers\user\login;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;


class Login {

	public function showForm() {
		return $app['twig']->render('signup.twig');
	}

	public function submitForm(Request $request, App, $app) {

		return $app['twig']->render(
			'signup.twig',
			[
				'firstname' => $request->get('firstname'),
				'lastname' => $request->get('lastname'),
			]
		);
	}
}