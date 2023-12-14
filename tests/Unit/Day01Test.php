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
}