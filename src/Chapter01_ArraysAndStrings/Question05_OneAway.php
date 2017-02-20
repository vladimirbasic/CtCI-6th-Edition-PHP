<?php

declare(strict_types = 1);

namespace Ctci\Chapter01_ArraysAndStrings;

/**
 * Class that implements the algorithm
 */
class Question05_OneAway
{
    /**
     * Question:
     *
     * There are three types of edits that can be performed on strings: insert
     * a character, remove a character, or replace a character. Given two strings,
     * write a function to check if they are one edit (or zero edits) away.
     * EXAMPLE
     * pale, ple -> true
     * pales, pale -> true
     * pale, bale -> true
     * pale, bae -> false
     *
     * Explanation:
     *
     * - We are assuming that characters are from english alphabet
     *
     * Running time complexity: O(N)
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

        // if difference in length is more then two characters stop processing
        if (abs($stringOneLength - $stringTwoLength) > 1) {
            return false;
        }

        $stringLonger = $stringOneLength > $stringTwoLength ? $stringOne : $stringTwo;
        $stringShorter = $stringOneLength < $stringTwoLength ? $stringOne : $stringTwo;

        $changeOccurred = false;

        $j = 0;
        for ($i = 0, $iMax = strlen($stringLonger); $i < $iMax; $i++) {
            if (!isset($stringShorter[$j]) || $stringLonger[$i] !== $stringShorter[$j]) {
                if ($changeOccurred) {
                    return false; // second difference occurred, stop processing
                }
                $changeOccurred = true;
                if ($stringTwoLength !== $stringOneLength) {
                    continue;
                }
            }
            $j++;
        }

        return true;
    }
}