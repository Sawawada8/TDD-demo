<?php

use PHPUnit\Framework\TestCase;

use Src\IntClosedRange;

class 整数閉区間Test extends TestCase {
    public $range;

    const TOP = 1;
    const BOTTOM = 8;

    public function setUp(): void
    {
        parent::setUp();

        $this->range = new IntClosedRange(self::TOP, self::BOTTOM);
    }

    public function test_上端点を持つ（取得できる）()
    {
        $this->assertEquals(self::TOP, $this->range->getTop());
    }

    public function test_下端点を持つ（取得できる）()
    {
        $this->assertEquals(self::BOTTOM, $this->range->getBottom());
    }

    public function test_上端点、下端点の文字列表現ができる()
    {
        $this->assertEquals('[1,8]', $this->range->toString());
    }

    public function test_上端点より下端点が大きい閉区間を作ることはできない。()
    {
        $this->expectException(\InvalidArgumentException::class);

        new IntClosedRange(3,1);
    }

    /**
     * @dataProvider provideData_整数の閉区間は指定した整数を含むかどうかを判定できる
     * @test
     */
    public function test_整数の閉区間は指定した整数を含むかどうかを判定できる($expected, $val)
    {
        $this->assertEquals($expected, $this->range->includes($val));
    }

    public function provideData_整数の閉区間は指定した整数を含むかどうかを判定できる()
    {
        return [
            [ true, self::TOP ],
            [ false, self::BOTTOM + 1 ],
        ];
    }

    /**
     * @dataProvider provideData_別の閉区間と等価かどうか判定できる
     * @test
     */
    public function test_別の閉区間と等価かどうか判定できる($expected, $range)
    {
        $this->assertEquals($expected, $this->range->equals($range));
    }

    public function provideData_別の閉区間と等価かどうか判定できる()
    {
        return [
            [ true, new IntClosedRange(self::TOP, self::BOTTOM) ],
            [ false, new IntClosedRange(self::TOP + 1, self::BOTTOM) ],
        ];
    }
}
