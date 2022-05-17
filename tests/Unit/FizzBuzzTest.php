<?php

use PHPUnit\Framework\TestCase;

use  Src\FizzBuzz;

class FizzBuzzTest extends TestCase {
    public function test_1を”1”へ変換する()
    {
        // 準備
        $fizzbuzz = new FizzBuzz();
        // 実行
        $actual = $fizzbuzz->convert(1);
        // 検証
        $this->assertEquals("1", $actual);
    }
}
