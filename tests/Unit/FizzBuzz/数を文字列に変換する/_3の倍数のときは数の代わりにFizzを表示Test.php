<?php

use PHPUnit\Framework\TestCase;

use  Src\FizzBuzz;

class _3の倍数のときは数の代わりにFizzを表示Test extends TestCase {
    private $fizzbuzz;

    // 準備
    public function setUp(): void
    {
        parent::setUp();

        $this->fizzbuzz = new FizzBuzz();
    }

    public function test_3を”Fizz”へ変換する()
    {
        // 実行 & 検証
        $this->assertEquals("Fizz", $this->fizzbuzz->convert(3));
    }
}
