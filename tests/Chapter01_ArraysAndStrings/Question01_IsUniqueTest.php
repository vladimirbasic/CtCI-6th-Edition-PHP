<?php

declare(strict_types = 1);

namespace Ctci\Tests\Chapter_1_ArraysAndStrings;

use Ctci\Chapter01_ArraysAndStrings\Question01_IsUnique;

class Question01_IsUniqueTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Question01_IsUnique
     */
    private $isUnique;

    /**
     * Setup the class that implements the algorithm
     */
    public function setUp()
    {
        $this->isUnique = new Question01_IsUnique();
    }

    /**
     * @dataProvider getData
     * @param string $stringOne
     * @param bool $permutation
     */
    public function testSolution(string $stringOne, bool $permutation)
    {
        $result = $this->isUnique->solution($stringOne);
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
            [ #0 It is unique
                'string' => '',
                'permutation' => true
            ],
            [ #1 It is unique
                'string' => 'abcdefghijklmnopqrstuvwxyz',
                'permutation' => true
            ],
            [ #2 It is unique
                'string' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                'permutation' => true
            ],
            [ #2 It is not
                'string' => 'AA',
                'permutation' => false
            ],
            [ #2 It is not regardless of letter's CASE
                'string' => 'Aa',
                'permutation' => false
            ],
        ];
    }
}