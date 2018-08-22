<?php

namespace Gostel\models;

use Doctrine\DBAL\Connection;
use Silex\Application;

class UserModel {
	
	public function signUp(Application $app, array $aUserData) {
		
			$app['db']->insert('User', $aUserData);
		
	}
	
}