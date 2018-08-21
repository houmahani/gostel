<?php

namespace Gostel\controllers\admin\booking;

class Homepage {

	public function showPage() {
		
		return $app['twig']->render('homepage.twig');
	}
}