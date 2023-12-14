<?php

declare(strict_types=1);

namespace Tahomatech\Aoc2023\Day01;

class Day01
{
    private string $filePath = __DIR__ . '/input.txt';

    public function run(): void
    {
        $lines = file($this->filePath);

        echo 'Running part 1 solution...' . PHP_EOL;
        $part01Sum = 0;
        foreach ($lines as $line) {
            $part01Sum += $this->part01Solution($line);
        }
        echo "Part 01 solution sum: $part01Sum" . PHP_EOL;
    }

    public function part01Solution(string $input): int
    {
        // Remove everything that isn't a digit...
        preg_match_all('!\d+!', $input, $matches);
        $digits = $matches[0];
        $firstKey = array_key_first($digits);
        $lastKey = array_key_last($digits);
        $num1 = $digits[$firstKey];
        $num2 = $digits[$lastKey];
        $num1 = substr($num1, 0, 1);
        $num2 = substr($num2, -1);
        return (int)sprintf('%d%d', $num1, $num2);
    }
}