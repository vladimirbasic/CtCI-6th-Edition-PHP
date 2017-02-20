<?php

declare(strict_types = 1);

namespace Ctci\Tests\Chapter_1_ArraysAndStrings;

use Ctci\Chapter01_ArraysAndStrings\Question04_PalindromePermutation;

class Question04_PalindromePermutationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Question04_PalindromePermutation
     */
    private $palindromePermutation;

    /**
     * Setup the class that implements the algorithm
     */
    public function setUp()
    {
        $this->palindromePermutation = new Question04_PalindromePermutation();
    }

    /**
     * @dataProvider getData
     * @param string $string
     * @param bool $permutation
     */
    public function testSolution(string $string, bool $permutation)
    {
        $result = $this->palindromePermutation->solution($string);
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
            [ #0 aabb => bbaa
                'string' => 'abba',
                'permutation' => true,
            ],
            [ #1 'never odd or even' => 'neve ro ddo reven'
                'string' => 'eo vnddnrvo eere',
                'permutation' => true,
            ],
            [ #2 'a man a plan a canal panama' => 'amanap lanac a nalp a nam a'
                'string' => 'acan  man plapal  aaamnan a',
                'permutation' => true,
            ],
            [ #3 'madam im adam' => 'mada mi madam'
                'string' => ' dmiaamaad mm',
                'permutation' => true,
            ],
            [ #4 'madam in eden im adam' => 'mada mi nede ni madam'
                'string' => 'madam in eden im adam',
                'permutation' => true,
            ],
            [ #5 'taco cat' => 'tac ocat'
                'string' => 'tact coa',
                'permutation' => true,
            ],
            [ #6 It is not a palindrome permutation
                'string' => 'tact coaz',
                'permutation' => false,
            ],
            [ #7 It is not a palindrome permutation
                'string' => 'this is not a palindrome permutations',
                'permutation' => false,
            ],
        ];
    }
}