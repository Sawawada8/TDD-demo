<?php

namespace Src;

class FizzBuzz {
    public function convert($i)
    {
        if ($i % 5 == 0 && $i % 3 == 0) {
            return 'FizzBuzz';
        }
        if ($i % 3 == 0) {
            return 'Fizz';
        }
        if ($i % 5 == 0) {
            return 'Buzz';
        }
        return (string)$i;
    }

}
