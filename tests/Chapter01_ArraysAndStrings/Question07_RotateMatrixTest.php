<?php

declare(strict_types = 1);

namespace Ctci\Tests\Chapter_1_ArraysAndStrings;

use Ctci\Chapter01_ArraysAndStrings\Question07_RotateMatrix;

class Question07_RotateMatrixTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Question07_RotateMatrix
     */
    private $rotateMatrix;

    /**
     * Setup the class that implements the algorithm
     */
    public function setUp()
    {
        $this->rotateMatrix = new Question07_RotateMatrix();
    }

    /**
     * @dataProvider getData
     * @param array $string
     * @param int $n
     * @param array $expected
     */
    public function testSolution(array $string, int $n, array $expected)
    {
        $result = $this->rotateMatrix->solution($string, $n);
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
            [ #0 Matrix with even number of elements
                'matrix' => [
                    [1, 2, 3, 4],
                    [5, 6, 7, 8],
                    [9, 10, 11, 12],
                    [13, 14, 15, 16]
                ],
                'n' => 4,
                'expected' => [
                    [13, 9, 5, 1],
                    [14, 10, 6, 2],
                    [15, 11, 7, 3],
                    [16, 12, 8, 4]
                ],
            ],
            [ #1 Matrix with odd number of elements
                'matrix' => [
                    [1, 2, 3],
                    [5, 6, 7],
                    [9, 10, 11],
                ],
                'n' => 3,
                'expected' => [
                    [9, 5, 1],
                    [10, 6, 2],
                    [11, 7, 3],
                ],
            ],
            [ #2 Empty matrix
                'matrix' => [],
                'n' => 0,
                'expected' => [],
            ],
        ];
    }
}