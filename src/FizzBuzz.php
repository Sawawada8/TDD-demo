<?php

namespace Src;

class FizzBuzz {
    public function convert($i)
    {
        if ($i == 3) {
            return 'Fizz';
        }
        return (string)$i;
    }

}
