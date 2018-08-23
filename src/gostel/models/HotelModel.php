<?php
namespace Gostel\models;
 
use Doctrine\DBAL\Connection;
use Silex\Application;


class HotelModel {

	public function getListHotel(Application $app)
	{
		$sql = "SELECT * 
		      FROM `Hotel` ";

		return $app['db']->fetchAll($sql);
	}

    public function getSearchHotel(Application $app,$terme)
    {
		//pour supprimer les espaces dans la requête de l'internaute
		$terme = trim($terme); 
		//pour supprimer les balises html dans la requête
		$terme = strip_tags($terme); 

	 	if (!empty($terme))
		{
			$sql = "
		 		SELECT * 
		 		FROM `Hotel` 
		 		WHERE `Country` 
		 		LIKE ? 
		 		OR `City` 
		 		LIKE ?";

		 return $app['db']->fetchAll($sql, array("%".$terme."%", "%".$terme."%"));
		}
		
		return [];
    }

}
