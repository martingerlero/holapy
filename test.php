<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';

use MaximeRenou\BingAI\BingAI;
use MaximeRenou\BingAI\Chat\Prompt;

// Variables de entrada  
$cookie = "1RCLKrr5QZoHiyLeEpvAK9x-HUbx6ZZLcQO9yLaUBu-1VaVth8qVePutxUcMZytFTR85bM2E5gVVC6qcwoetT-SDgpu0Y5NzavP2DtSKSfO7skeXsrxxZDo3rDxTdRv43ob8RXhysdeRIwiVJlJPcRaYZzJECjU0iZeVLTLbp576iziV6-cDfal9oBTdSl0xnfXlYsgb5k_Pd9rUkyOE8sTC6rPHv6oI48s7kyHm6vpg"; //@TODO change
$prompt = "Hi";

// Inicializar BingAI
try {
    $ai = new BingAI($cookie);
  } catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
  }

//  Chek validez de cookie
$valid = $ai->checkCookie();
//echo "Es valida: ".$valid."<br>";

// Crear conversación
$conversation = $ai->createChatConversation();

// Hacer pregunta 
try {
    //list($text, $cards) = $conversation->ask(new Prompt($prompt)); 
  } catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
  }

//  Imprimo para depurar
//echo "Text: " . $text;
//print_r($cards);

// Mostrar respuesta
//echo $text;