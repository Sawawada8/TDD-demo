<?php

use PHPUnit\Framework\TestCase;

use  Src\FizzBuzz;

class FizzBuzzTest extends TestCase {
    public function test_1を”1”へ変換する()
    {
        // 準備
        $fizzbuzz = new FizzBuzz();
        // 実行 & 検証
        $this->assertEquals("1", $fizzbuzz->convert(1));
    }
}
