<?php

namespace Gostel\controllers\user\login;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application AS App;


class Login {

	public function showForm() {
		return $app['twig']->render('');
	}

	public function submitForm(Request $request, App, $app) {

		return $app['twig']->render('');
	}
}