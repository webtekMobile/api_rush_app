
<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = getenv("ACedd5f913a4f5123ddfbcb4a3744886bb");
$token = getenv("422680c1e24675f7b374fa355f8c2010");
$twilio = new Client($sid, $token);
 
$transcription = $twilio->transcriptions("MG1210fe83130b2b5fe9512aacd10df8b1")
                        ->fetch();

print($transcription->dateCreated->format());