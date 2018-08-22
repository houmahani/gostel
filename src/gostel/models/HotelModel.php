<?php
namespace Gostel\models;

use Doctrine\DBAL\Connection;

class HotelModel {

	public function getListHotel($app)
	{
		$sql = "SELECT * 
				FROM `Hotel` ";

		return $app['db']->fetchAll($sql);
	}

}
