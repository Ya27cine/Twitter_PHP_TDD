<?php

use Twitter\Http\Response;

require_once __DIR__ . '/vendor/autoload.php';


 $name  = $_GET['name'];

// header("Content-Type: text/html");
// http_response_code(200);

// echo "Hello $name";

(new Response("Hello $name",
    ["Content-Type" => "text/html"],200
))->send();


