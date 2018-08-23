<?php

// vous devez charger le fichier autoload en fonction 
// de la position ou se trouve votre fichier index.php
require_once '../vendor/autoload.php';

// On instancie la classe Application se trouvant 
// dans le namespace Silex
// $app est donc un objet contenant Silex
$app = new Silex\Application();

// Vous pouvez activer le mode debug comme ceci
$app['debug'] = true;

// __DIR__.'/views/' correspond au dossier de base 
// ou vous mettrez vos template
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views/',
));

// Connexion à la base de donnée
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'dbhost' => 'localhost',
        'dbname' => 'gostel',
        'user' => 'root',
        'password' => 'troiswa',
        'charset' => 'UTF8'    
        ),
    )
);

// Asset
$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.named_packages' => array(
        'css' => array('base_path' => 'asset/css/'),
        'images' => array('base_path' => 'asset/images/'),
				'js' => array('base_path' => 'asset/js/'),
    ),
));

// Session 
$app->register(new Silex\Provider\SessionServiceProvider());

// inclusion des routes
include 'route.php';


$app->run(); // INDISPENSABLE permet de démarrer “l’application”
