<?php

declare(strict_types = 1);

namespace Ctci\Chapter01_ArraysAndStrings;

/**
 * Class that implements the algorithm
 */
class Question09_StringRotation
{
    /**
     * Question:
     *
     * Assume you have a method isSubstring which checks if one word is a
     * substring of another. Given two string, s1 and s2, write code to check
     * if s2 is a rotation of s1 using only one call to isSubstring
     * (e.g., "waterbottle" is a rotation of "erbottlewat").
     *
     * Explanation:
     *
     * - We are assuming that strings will not be empty
     * - Instead of isSubstring we will use strpos function
     * - Two string have to have same lengths so that rotation can happen
     *
     * Running time complexity: O(A+B)
     * Space complexity: O(A+B)
     *
     * @param string $string1
     * @param string $string2
     * @return bool
     */
    public function solution(string $string1, string $string2): bool
    {
        $string1Length = strlen($string1);
        if ($string1Length === 0 || $string1Length !== strlen($string2)) {
            return false;
        }

        if (strpos($string1.$string1, $string2) === false) {
            return false;
        }
        return true;
    }
}