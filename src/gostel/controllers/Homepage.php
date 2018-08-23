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
		
		/* Slider */
	$aFiles = [];
	$aImages = glob("../public/asset/images/header/*.{jpg,png,gif}", GLOB_BRACE);

		foreach($aImages as $sPathImage) {
			$aFiles[] = pathinfo($sPathImage, PATHINFO_BASENAME);
		}

		return $app['twig']->render(
			'home.twig',
			[
			'files' => $aFiles,
			'hotels'=> $list
			]
		);

	}
	

}
