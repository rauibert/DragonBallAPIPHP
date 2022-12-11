<?php

require_once './vendor/autoload.php';
require_once './controller/dataController.php';

$loader = new \Twig\Loader\FilesystemLoader('./views');

$twig = new \Twig\Environment($loader, []);

$data = DataController::loadData();

echo $twig->render('index.twig', compact('data'));