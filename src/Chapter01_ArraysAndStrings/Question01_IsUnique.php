<?php

declare(strict_types = 1);

namespace Ctci\Chapter01_ArraysAndStrings;

/**
 * Class that implements the algorithm
 */
class Question01_IsUnique
{
    /**
     * Question:
     *
     * Implement an algorithm to determine if a string has all unique characters.
     * What if you cannot use additional data structures?
     *
     * Explanation:
     *
     * - We are assuming that characters are from english alphabet
     * - We are ignoring CASE of letters
     * - We are assuming that space character (" ") can occur more then once
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
            if ($string[$i] === ' ') { // multiple occurrence of ' ' is allowed
                continue;
            }

            $char = ord(strtoupper($string[$i])) - ord('A');
            $mask = 1 << $char;
            if (($bitVector & $mask) !== 0) {
                // if same characters appears again return false immediately
                return false;
            }
            $bitVector |= $mask;
        }

        return true;
    }
}