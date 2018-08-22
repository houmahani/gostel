<?php
/**
 * Dans ce fichier je vais gérer mes différentes routes
 */
//  Création d’une route
// ->get correspond à un appel HTTP en method GET
// ici “/” correspond à la page d’accueil (index.php) 
// et donc à l’url
// SuperProjet\controllers\Homepage correspond à 
// la classe (controller) visée
// httpGetMethod est la méthode qui sera appelée
$app->get('/', 'Gostel\controllers\Homepage::showPage')
// bind permet de nommer cette route et vous permettra de générer l’url depuis ce nom
->bind('home');

// Page contact 
$app->get('/contact', 'Gostel\controllers\Contact::showForm')
->bind('contact');

$app->post('/contact', 'Gostel\controllers\Contact::submitForm'); 

// Sign Up
$app->get('/signup', 'Gostel\controllers\SignUp::showForm')
->bind('signup');

$app->post('/signup', 'Gostel\controllers\SignUp::submitForm'); 
