<?php

declare(strict_types = 1);

namespace Ctci\Tests\Chapter_1_ArraysAndStrings;

use Ctci\Chapter01_ArraysAndStrings\Question09_StringRotation;

class Question09_StringRotationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Question09_StringRotation
     */
    private $stringRotation;

    /**
     * Setup the class that implements the algorithm
     */
    public function setUp()
    {
        $this->stringRotation = new Question09_StringRotation();
    }

    /**
     * @dataProvider getData
     * @param string $string1
     * @param string $string2
     * @param bool $expected
     */
    public function testSolution(string $string1, string $string2, bool $expected)
    {
        $result = $this->stringRotation->solution($string1, $string2);
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
            [ #0 String 2 is rotation of string 1
                'string1' => 'waterbottle',
                'string2' => 'erbottlewat',
                'expected' => true,
            ],
            [ #1 String 2 is not rotation of string 1
                'string1' => 'waterbottle',
                'string2' => 'erbottletaw',
                'expected' => false,
            ],
        ];
    }
}