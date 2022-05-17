<?php

use PHPUnit\Framework\TestCase;

use  Src\FizzBuzz;

class _3_5の倍数のときは数の代わりにFizzBuzzを表示Test extends TestCase {
    private $fizzbuzz;

    // 準備
    public function setUp(): void
    {
        parent::setUp();

        $this->fizzbuzz = new FizzBuzz();
    }

    public function test_15を”FizzBuzz”へ変換する()
    {
        // 実行 & 検証
        $this->assertEquals("FizzBuzz", $this->fizzbuzz->convert(15));
    }
}
