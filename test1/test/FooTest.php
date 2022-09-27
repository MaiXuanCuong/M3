<?php
    namespace Test;
    use PHPUnit\Framework\TestCase;
    use App\Foo;
    class FooTest extends TestCase{
        public function test_sum_1(){
            $objFoo = new Foo();
            $a = 5;
            $b = 6;
            $expected = 11;
            $your_output = $objFoo->sum($a, $b);
            $this->assertEquals($expected, $your_output);
        }
        public function test_sum_2(){
            $objFoo = new Foo();
            $a = 3;
            $b = 4;
            $expected = 7;
            $your_output = $objFoo->sum($a, $b);
            $this->assertEquals($expected, $your_output);
        }
        public function test_sum_3(){
            $objFoo = new Foo();
            $a = 6;
            $b = 6;
            $expected = 12;
            $your_output = $objFoo->sum($a, $b);
            $this->assertEquals($expected, $your_output);
        }
    }