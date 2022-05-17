<?php

use PHPUnit\Framework\TestCase;

use Src\Range;

class 閉区間Test extends TestCase {

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_上端点を持つ()
    {
        // 準備
        $range = new Range();
        // 実行 & 検証
        $this->assertEquals(true, isset($range->top));
    }
}
