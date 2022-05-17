<?php

use PHPUnit\Framework\TestCase;

use  Src\FizzBuzz;

class FizzBuzzTest extends TestCase {
    private $fizzbuzz;

    // 準備
    public function setUp(): void
    {
        parent::setUp();

        $this->fizzbuzz = new FizzBuzz();
    }

    public function test_1を”1”へ変換する()
    {
        // 実行 & 検証
        $this->assertEquals("1", $this->fizzbuzz->convert(1));
    }

    public function test_2を”2”へ変換する()
    {
        // 実行 & 検証
        $this->assertEquals("2", $this->fizzbuzz->convert(2));
    }

    public function test_3を”Fizz”へ変換する()
    {
        // 実行 & 検証
        $this->assertEquals("Fizz", $this->fizzbuzz->convert(3));
    }

    public function test_5を”Buzz”へ変換する()
    {
        // 実行 & 検証
        $this->assertEquals("Buzz", $this->fizzbuzz->convert(5));
    }
}
