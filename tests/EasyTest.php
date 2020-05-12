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

        public function testCheck(){
            $this->assertEquals(true, check([1, 2, 3, 4, 5], 5));
            $this->assertEquals(false, check([1, 1, 2, 1, 1], 3));
            $this->assertEquals(false, check([], 2));
        }

        public function testAnimals(){
            $this->assertEquals(36, animals(2, 3, 5));
            $this->assertEquals(22, animals(1, 2, 3));
            $this->assertEquals(50, animals(5, 2, 8));
        }

        public function testSmallNumber(){
            $this->assertEquals(20, smallNumber(20, 30));
            $this->assertEquals(5, smallNumber(10, 5));
            $this->assertEquals(8, smallNumber(20, 8));
        }

        public function testFindSmallestNumber(){
            $this->assertEquals(3, findSmallestNumber([10, 3, 9, 4, 7]));
            $this->assertEquals(2, findSmallestNumber([5, 9, 3, 10, 2]));
            $this->assertEquals(5, findSmallestNumber([20, 7, 8, 6, 5]));
        }

        public function testMissNumber(){
            $this->assertEquals(5, missNumber([10, 9, 8, 7, 6, 4, 3, 2, 1]));
            $this->assertEquals(3, missNumber([9, 10, 8, 7, 6, 5, 1, 2, 4]));
            $this->assertEquals(1, missNumber([7, 6, 8, 10, 9, 5, 4, 3, 2]));
        }

        public function testIsChristmas(){
            $this->assertEquals(true, isChristmas(new DateTime("2010-12-25")));
            $this->assertEquals(true, isChristmas(new DateTime("2050-12-25")));
            $this->assertEquals(false, isChristmas(new DateTime("2020-05-11")));
        }

        public function testIsValidEmail(){
            $this->assertEquals(false, isValidEmail("@gmail.com"));
            $this->assertEquals(false, isValidEmail("gabriel@com"));
            $this->assertEquals(false, isValidEmail("gmail"));
            $this->assertEquals(false, isValidEmail("gabriel@gmail"));
            $this->assertEquals(true, isValidEmail("gabriel.trevisan.santos@gmail.com"));
        }

    }

?>