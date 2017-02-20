<?php

declare(strict_types = 1);

namespace Ctci\Chapter01_ArraysAndStrings;

/**
 * Class that implements the algorithm
 */
class Question02_CheckPermutation
{
    /**
     * Question:
     *
     * Given two strings, write a method to decide if one is permutation
     * of the other.
     *
     * Explanation:
     *
     * - We are assuming that character set is ASCII
     * - Even though we are using $letters data structure it does not scale
     *   with number of elements. It is limited to ASCII table number of
     *   characters therefore we can say that space complexity is constant.
     *
     * Running time complexity: O(2N) => O(N)
     * Space complexity: O(1)
     *
     * @param string $stringOne
     * @param string $stringTwo
     * @return bool
     */
    public function solution(string $stringOne, string $stringTwo): bool
    {
        $stringOneLength = strlen($stringOne);
        $stringTwoLength = strlen($stringTwo);

        // if two string are not the same length they are obviously not the same
        if ($stringOneLength !== $stringTwoLength) {
            return false;
        }

        $letters = array_fill(0, 128, 0);

        // count characters occurrences in first string
        for ($i = 0; $i < $stringOneLength; $i++) {
            $letters[ord($stringOne[$i])]++;
        }

        // count characters occurrences in second string
        for ($i = 0; $i < $stringOneLength; $i++) {
            $letters[ord($stringTwo[$i])]--;
            if ($letters[ord($stringTwo[$i])] < 0) {
                return false;
            }
        }

        return true;
    }
}