<?php

namespace Gostel\controllers;

use Silex\Application;
use Gostel\models\HotelModel;
use Symfony\Component\HttpFoundation\Request;

class Homepage {

	public function showPage(Application $app, Request $request) {

		$olistHotel = new HotelModel();

		$search =  $request->get('search','');
		if(empty($search)) {
			$list = $olistHotel->getlistHotel($app);
		} else {
			$list = $olistHotel->getSearchHotel($app,$search);
		}

		return $app['twig']->render('home.twig', array('hotels'=> $list));
	}


}
