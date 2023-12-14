<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Tahomatech\Aoc2023\Day01\Day01;

class Day01Test extends TestCase
{
    #[DataProvider("part01Provider")]
    public function testDay01Part01SolutionWorks(string $inputString, int $expectedNumber): void
    {
        $day01 = new Day01();

        $result = $day01->part01Solution($inputString);
        
        self::assertSame($result, $expectedNumber);
    }

    public static function part01Provider(): Generator
    {
        yield '1abc2 = 12' => ['1abc2', 12];
        yield 'pqr3stu8vwx = 38' => ['pqr3stu8vwx', 38];
        yield 'a1b2c3d4e5f = 15' => ['a1b2c3d4e5f', 15];
        yield 'treb7uchet = 77' => ['treb7uchet', 77];
    }

    #[DataProvider("part02Provider")]
    public function testDay01Part02SolutionWorks(string $inputString, int $expectedNumber): void
    {
        $day01 = new Day01();

        $result = $day01->part02Solution($inputString);

        self::assertSame($result, $expectedNumber);
    }

    public static function part02Provider(): Generator
    {
        yield 'two1nine = 29' => ['two1nine', 29];
        yield 'eightwothree = 83' => ['eightwothree', 83];
        yield 'abcone2threexyz = 13' => ['abcone2threexyz', 13];
        yield 'xtwone3four = 24' => ['xtwone3four', 24];
        yield '4nineeightseven2 = 42' => ['4nineeightseven2', 42];
        yield 'zoneight234 = 14' => ['zoneight234', 14];
        yield '7pqrstsixteen = 76' => ['7pqrstsixteen', 76];
    }
}