<?php

declare(strict_types = 1);

namespace Ctci\Chapter01_ArraysAndStrings;

/**
 * Class that implements the algorithm
 */
class Question03_URLify
{
    /**
     * Question:
     *
     * Write a method to replace all spaces in a string with '%20'. You may
     * assume that the string has sufficient space at the end to hold the additional
     * characters, and that you are give the 'true' length length of the string.
     * EXAMPLE
     *         |<-   13  ->|
     * Input: "Mr John Smith    "
     * Output: "Mr%20John%20Smith"
     *
     * Explanation:
     *
     * - Assume that we can't use 'strlen' to get the real length of the string
     *   and that we have to calculate the real length by ourselves
     *
     * Running time complexity: O(N)
     * Space complexity: O(1)
     *
     * @param string $string
     * @param int $length
     * @return string
     */
    public function solution(string $string, int $length): string
    {
        $spaceCharacters = 0;
        for ($i = 0; $i < $length; $i++) {
            if ($string[$i] === ' ') {
                $spaceCharacters += 2;
            }
        }
        $realLength = $length + $spaceCharacters;

        for ($i = $length - 1; $i >= 0; $i--) {
            if ($string[$i] === ' ') {
                $string[$realLength - 1] = '0';
                $string[$realLength - 2] = '2';
                $string[$realLength - 3] = '%';
                $realLength -= 3;
            } else {
                $string[$realLength - 1] = $string[$i];
                $realLength--;
            }
        }

        return $string;
    }
}