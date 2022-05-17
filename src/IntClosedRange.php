<?php

namespace Src;

class IntClosedRange {
    private $top;
    private $bottom;

    public function __construct(int $top, int $bottom)
    {
        if ($top >= $bottom) {
            throw new \InvalidArgumentException('上端点より下端点が大きい閉区間を作ることはできません。');
        }

        $this->top = $top;
        $this->bottom = $bottom;
    }

    public function getTop()
    {
        return $this->top;
    }

    public function getBottom()
    {
        return $this->bottom;
    }

    public function toString()
    {
        $str = '[';
        $str.= $this->top;
        $str.= ',';
        $str.= $this->bottom;
        $str.= ']';
        return $str;
    }

    public function includes(int $i)
    {
        return $this->top <= $i && $i <= $this->bottom;
    }

    public function equals(IntClosedRange $range)
    {
        return $this->top === $range->top && $this->bottom === $range->bottom;
    }
}
