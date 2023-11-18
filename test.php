<?php
require __DIR__ . '/../vendor/autoload.php';

$cookie = "1RCLKrr5QZoHiyLeEpvAK9x-HUbx6ZZLcQO9yLaUBu-1VaVth8qVePutxUcMZytFTR85bM2E5gVVC6qcwoetT-SDgpu0Y5NzavP2DtSKSfO7skeXsrxxZDo3rDxTdRv43ob8RXhysdeRIwiVJlJPcRaYZzJECjU0iZeVLTLbp576iziV6-cDfal9oBTdSl0xnfXlYsgb5k_Pd9rUkyOE8sTC6rPHv6oI48s7kyHm6vpg"; //@TODO change

use MaximeRenou\BingAI\BingAI;
use MaximeRenou\BingAI\Chat\Prompt;

// $cookie - your "_U" cookie from bing.com
$ai = new BingAI($cookie);
$conversation = $ai->createChatConversation();

// $text - Text-only version of Bing's answer
// $cards - Message objects array
list($text, $cards) = $conversation->ask(new Prompt("Hello World"));
echo "Cards: ".$cards;
echo "<br>";
echo "Text: ".$text;
?>