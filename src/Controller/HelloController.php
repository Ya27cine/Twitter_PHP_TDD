<?php 

namespace Twitter\Controller;

use Twitter\Http\Response;

class HelloController{

    public function sayHello(): Response
    {
        $name  = $_GET['name'];
        return new Response("Hello $name");
    }
}

?>