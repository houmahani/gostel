<?php

namespace Gostel\controllers;

class Homepage {

	public function showPage() {
		
		return $app['twig']->render('homepage.twig');
	}
}