<?php

require_once './vendor/autoload.php';
require_once './models/data.php';

$loader = new \Twig\Loader\FilesystemLoader('./views');

$twig = new \Twig\Environment($loader, []);

$json = new Data;
$data = $json->getAll();


echo $twig->render('index.twig', compact('data'));