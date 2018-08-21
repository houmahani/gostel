<?php

namespace Gostel\controllers\booking;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application AS App;

class Booking {

	public function showForm() {
		return $app['twig']->render('');
	}

	public function submitForm(Request $request, App, $app) {

		return $app['twig']->render('');
	}
}