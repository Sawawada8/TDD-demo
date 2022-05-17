<?php

use PHPUnit\Framework\TestCase;

use  Src\FizzBuzz;

class _5の倍数のときは数の代わりにFizzを表示Test extends TestCase {
    private $fizzbuzz;

    // 準備
    public function setUp(): void
    {
        parent::setUp();

        $this->fizzbuzz = new FizzBuzz();
    }

    public function test_5を”Buzz”へ変換する()
    {
        // 実行 & 検証
        $this->assertEquals("Buzz", $this->fizzbuzz->convert(5));
    }
}
