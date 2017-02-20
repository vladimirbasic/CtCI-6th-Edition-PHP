<?php

declare(strict_types = 1);

namespace Ctci\Chapter01_ArraysAndStrings;

/**
 * Class that implements the algorithm
 */
class Question04_PalindromePermutation
{
    /**
     * Question:
     *
     * Given a string, write a function to check if it is a permutation of a
     * palindrome. A palindrome is a word or phrase that is the same forwards as
     * backwards. A permutation is a rearrangement of letters. The palindrome
     * does not need to be limited to just dictionary words.
     * EXAMPLE
     * Input: 'tact coa'
     * Output: True (permutations: 'taco cat')
     *
     * Explanation:
     *
     * - We are assuming that characters are from english alphabet with space and comma
     * - We are ignoring CASE of letters
     * - We are ignoring space and comma characters ('" "', ',')
     * - We just need to count letter occurrences to see if they are even or odd.
     *   This can be done with bit vector, turning each bit on/off each time
     *   we encounter same letter. Think about flipping light on/off.
     * - Bit vector can be one integer in this case as we will have only 26 different
     *   letters
     * - After we toggle bits in vector for all letters we just need to know if
     *   all bits are '0' or there is only one bit set to '1' to validate
     *   palindrome permutation
     * - Check if only one bit is set to '1':
     *   00010000 - 1 = 00001111 // subtract 1 from bit vector
     *   00010000 & 00001111 == 0 // add new value to original and check if it is zero
     *
     * Running time complexity: O(N)
     * Space complexity: O(1)
     *
     * @param string $string
     * @return bool
     */
    public function solution(string $string): bool
    {
        $bitVector = 0;
        for ($i = 0, $iMax = strlen($string); $i < $iMax; $i++) {
            if (in_array($string[$i], [' ', ','], true)) { // ignore spaces and commas
                continue;
            }
            $char = ord(strtoupper($string[$i])) - ord('A');
            $mask = 1 << $char;
            $bitVector ^= $mask;
        }

        return $bitVector === 0 || ($bitVector & ($bitVector - 1)) === 0;
    }
}