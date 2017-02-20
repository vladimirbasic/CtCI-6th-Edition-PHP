<?php

declare(strict_types = 1);

namespace Ctci\Tests\Chapter_1_ArraysAndStrings;

use Ctci\Chapter01_ArraysAndStrings\Question02_CheckPermutation;

class Question02_CheckPermutationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Question02_CheckPermutation
     */
    private $checkPermutation;

    /**
     * Setup the class that implements the algorithm
     */
    public function setUp()
    {
        $this->checkPermutation = new Question02_CheckPermutation();
    }

    /**
     * @dataProvider getData
     * @param string $stringOne
     * @param string $stringTwo
     * @param bool $permutation
     */
    public function testSolution(string $stringOne, string $stringTwo, bool $permutation)
    {
        $result = $this->checkPermutation->solution($stringOne, $stringTwo);
        $this->assertSame($permutation, $result);
    }

    /**
     * Data provider
     *
     * @return array
     */
    public function getData()
    {
        return [
            [ #0 These two string are permutations
                'stringOne' => '',
                'stringTwo' => '',
                'permutation' => true
            ],
            [ #1 These two string are permutations
                'stringOne' => 'asdfg',
                'stringTwo' => 'gfdsa',
                'permutation' => true
            ],
            [ #2 These two string are NOT permutations, they are different length
                'stringOne' => 'asdfga',
                'stringTwo' => 'gsdfa',
                'permutation' => false
            ],
        ];
    }
}