<?php

namespace Gostel\controllers;

use Silex\Application;
use Gostel\models\HotelModel;

class Homepage {

	public function showPage(Application $app) {
		$olistHotel = new HotelModel();
		$list = $olistHotel->getlistHotel($app);

		return $app['twig']->render('home.twig', array('hotels'=> $list));
	}


}
