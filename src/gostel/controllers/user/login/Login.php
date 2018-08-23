<?php

namespace Gostel\controllers\user\login;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;


class Login {

	public function showForm(Application $app) {
		return $app['twig']->render('user/login.twig');
	}

	public function submitForm(Request $request, Application $app) {


	}
}