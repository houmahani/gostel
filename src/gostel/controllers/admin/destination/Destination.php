<?php

namespace Gostel\controllers\admin\destination;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application AS App;

class Destination {

	public function showForm() {
		return $app['twig']->render('');
	}

	public function submitForm(Request $request, App, $app) {

		return $app['twig']->render('');
	}
}