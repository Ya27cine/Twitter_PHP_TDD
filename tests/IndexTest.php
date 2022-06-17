<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase{
    // /** @test */
    // public function test_index_shows_good_hello(){
    //     $_GET['name'] = "Yassine";

    //     ob_start();
    //     include "index.php";
    //     $reslt = ob_get_clean();

    //     $this->assertEquals("Hello Yassine",  $reslt);
    // }
    public function test_index_say_hello(){
        // Given :
        $_GET['name'] = "Yassine";

        // When :
        $controller = new \Twitter\Controller\HelloController();
        $response    = $controller->sayHello();

        // Then :
        $this->assertEquals("Hello Yassine", $response->getContent());
        $this->assertEquals(200, $response->getStatus());

        $header = $response->getHeaders()['Content-Type'];
        $this->assertEquals( "text/html", $header);

    }
}
?>