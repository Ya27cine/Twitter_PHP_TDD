<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase{

    /** @test */
    public function test_index_shows_good_hello(){
        $_GET['name'] = "Yassine";

        ob_start();
        include "index.php";
        $reslt = ob_get_clean();

        $this->assertEquals("Hello Yassine",  $reslt);
    }
}
?>