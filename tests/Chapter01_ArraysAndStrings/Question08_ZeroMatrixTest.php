<?php

declare(strict_types = 1);

namespace Ctci\Tests\Chapter_1_ArraysAndStrings;

use Ctci\Chapter01_ArraysAndStrings\Question08_ZeroMatrix;

class Question08_ZeroMatrixTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Question08_ZeroMatrix
     */
    private $zeroMatrix;

    /**
     * Setup the class that implements the algorithm
     */
    public function setUp()
    {
        $this->zeroMatrix = new Question08_ZeroMatrix();
    }

    /**
     * @dataProvider getData
     * @param array $string
     * @param array $expected
     */
    public function testSolution(array $string, array $expected)
    {
        $result = $this->zeroMatrix->solution($string);
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
            [ #0 Zero in the middle
                'matrix' => [
                    [1, 2, 3, 4],
                    [5, 0, 7, 8],
                    [9, 10, 11, 12],
                    [13, 14, 15, 16]
                ],
                'expected' => [
                    [1, 0, 3, 4],
                    [0, 0, 0, 0],
                    [9, 0, 11, 12],
                    [13, 0, 15, 16]
                ],
            ],
            [ #1 Zero on the edge
                'matrix' => [
                    [1, 0, 3, 4],
                    [5, 6, 7, 8],
                    [9, 10, 11, 12],
                    [13, 14, 15, 16]
                ],
                'expected' => [
                    [0, 0, 0, 0],
                    [5, 0, 7, 8],
                    [9, 0, 11, 12],
                    [13, 0, 15, 16]
                ],
            ],
        ];
    }
}