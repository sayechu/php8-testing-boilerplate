<?php

namespace Deg540\PHPTestingBoilerplate;

class StringCalculator
{
    function add(string $numbers): int
    {
        if (empty($numbers)) {
            return 0;
        }

        if (strlen($numbers) == 1) {
            return (int)$numbers;
        }

        $numbers = preg_split('/,+/', $numbers);

        $sum = 0;
        foreach ($numbers as $num) {
            $sum += $num;
        }
        return $sum;
    }
}