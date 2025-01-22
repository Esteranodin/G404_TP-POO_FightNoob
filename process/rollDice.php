<?php
require_once '../utils/autoloader.php';
session_start();

$dicesManager = new DicesManager();
$results  = $dicesManager->resultDices(2, 1, 6); 
$damages = array_sum($results); 

header('Content-Type: application/json');
echo json_encode(['damages' => $damages]);