<?php

namespace Gostel\models;

use Doctrine\DBAL\Connection;
use Silex\Application;

class UserModel {
	
	public function signUp(Application $app, array $aUserData) {
		
			$app['db']->insert('User', $aUserData);
		
	}
	
	public function signIn(Application $app, $sEmail) {
		

		$sql = 'SELECT `FirstName`, `LastName`, `Password`, `Email` 
		FROM `User`
		WHERE `Email` = ?';
		
		return $app['db']->fetchAssoc($sql, [$sEmail]);
			
	}
	
}