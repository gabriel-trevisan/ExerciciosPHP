<?php
    /*

        Este fonte é exclusivo para testes.
        Não realizar qualquer tipo de alteração neste fonte!!!

    */
    use PHPUnit\Framework\TestCase;

    class EasyTest extends TestCase{

        public function testSum(){
            $this->assertEquals(5, sum(3,2));
            $this->assertEquals(6, sum(4,2));
            $this->assertEquals(9, sum(3,6));
        }

        public function testArea(){
            $this->assertEquals(25, area(5,10));
            $this->assertEquals(15, area(5,6));
            $this->assertEquals(16, area(8,4));
        }

        public function testGetLastItem(){
            $this->assertEquals(25, getLastItem([10, 5, 25]));
            $this->assertEquals(3, getLastItem([8, 4, 3]));
            $this->assertEquals(15, getLastItem([5, 6, 15]));
        }

    }

?>