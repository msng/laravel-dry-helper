<?php

namespace msng\LaravelDryHelper\Tests\Http;

use msng\LaravelDryHelper\Http\Validation;
use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{

    public function testMin()
    {
        $value = 3;
        $expected = 'min:' . $value;

        $this->assertSame($expected, Validation::min($value));
    }

    public function testMax()
    {
        $value = 999;
        $expected = 'max:' . $value;

        $this->assertSame($expected, Validation::max($value));
    }

    public function testSize()
    {
        $value = 50;
        $expected = 'size:' . $value;

        $this->assertSame($expected, Validation::size($value));
    }

    public function testRegex()
    {
        $pattern = '/reg[eE]x/';
        $expected = 'regex:' . $pattern;

        $this->assertSame($expected, Validation::regex($pattern));
    }

    public function testNotRegex()
    {
        $pattern = '/not[regx]/';
        $expected = 'not_regex:' . $pattern;

        $this->assertSame($expected, Validation::notRegex($pattern));
    }
}
