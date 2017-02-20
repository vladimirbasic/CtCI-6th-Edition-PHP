<?php

declare(strict_types = 1);

namespace Ctci\Tests\Chapter_1_ArraysAndStrings;

use Ctci\Chapter01_ArraysAndStrings\Question06_StringCompression;

class Question06_StringCompressionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Question06_StringCompression
     */
    private $stringCompression;

    /**
     * Setup the class that implements the algorithm
     */
    public function setUp()
    {
        $this->stringCompression = new Question06_StringCompression();
    }

    /**
     * @dataProvider getData
     * @param string $string
     * @param string $expected
     */
    public function testSolution(string $string, string $expected) {
        $result = $this->stringCompression->solution($string);
        $this->assertSame($expected, $result);
    }

    /**
     * Data provider
     *
     * @return array
     */
    public function getData()
    {
        return [
            [ #0 Compression can be achieved
                'string' => 'aabcccccaaa',
                'expected' => 'a2b1c5a3',
            ],
            [ #1 Compression can not be achieved
                'string' => 'abcde',
                'expected' => 'abcde',
            ],
            [ #2 Compression can not be achieved
                'string' => '',
                'expected' => '',
            ],
        ];
    }
}