<?php

declare(strict_types=1);

namespace Tahomatech\Aoc2023\Day01;

class Day01
{
    private string $filePath = __DIR__ . '/input.txt';
    private array $words = [
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 4,
        'five' => 5,
        'six' => 6,
        'seven' => 7,
        'eight' => 8,
        'nine' => 9
    ];

    public function run(): void
    {
        $lines = file($this->filePath);

        echo 'Running part 01 solution...' . PHP_EOL;
        $part01Sum = 0;
        foreach ($lines as $line) {
            $part01Sum += $this->part01Solution($line);
        }
        echo "Part 01 solution sum: $part01Sum" . PHP_EOL;

        echo 'Running part 02 solution...' . PHP_EOL;
        $part02Sum = 0;
        foreach ($lines as $line) {
            $part02Sum += $this->part02Solution($line);
        }
        echo "Part 02 solution sum: $part02Sum" . PHP_EOL;
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

    public function part02Solution(string $input): int
    {
        $characters = str_split($input);
        $newInput = '';
        // Add the first character to $newInput.
        // As we add more, check if any $words are in $newInput
        // If so, replace the $word (one, two, three, etc.) with
        // its int equivalent (1, 2, 3, etc.)
        foreach ($characters as $character) {
            $newInput .= $character;

            foreach ($this->words as $index => $word) {
                $newInput = str_replace($index, $word . $character, $newInput);
            }
        }
        return $this->part01Solution($newInput);
    }
}