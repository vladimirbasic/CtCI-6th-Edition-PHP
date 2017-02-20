<?php

declare(strict_types = 1);

namespace Ctci\Tests\Chapter_1_ArraysAndStrings;

use Ctci\Chapter01_ArraysAndStrings\Question03_URLify;

class Question03_URLifyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Question03_URLify
     */
    private $URLify;

    /**
     * Setup the class that implements the algorithm
     */
    public function setUp()
    {
        $this->URLify = new Question03_URLify();
    }

    /**
     * @dataProvider getData
     * @param string $string
     * @param int $length
     * @param string $expected
     */
    public function testSolution(string $string, int $length, string $expected)
    {
        $result = $this->URLify->solution($string, $length);
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
            [ #0 String gets well formed
                'stringOne' => 'Mr John Smith    ',
                'length' => 13,
                'expected' => 'Mr%20John%20Smith',
            ],
            [ #1 No spaces to be replaced
                'stringOne' => 'MrJohnSmith',
                'length' => 11,
                'expected' => 'MrJohnSmith',
            ],
        ];
    }
}