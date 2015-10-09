<?php

require_once('lib/Twig/Autoloader.php');
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('.');

$twig = new Twig_Environment($loader, array(
  'cache' => 'cache',
));

	
$config = array();
$config['assets_path'] = 'assets';
$config['media_path'] = 'media';

echo $twig->render('templates/index.twig', $config);

?>