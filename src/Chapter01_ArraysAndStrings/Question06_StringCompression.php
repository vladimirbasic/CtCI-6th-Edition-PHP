<?php

declare(strict_types = 1);

namespace Ctci\Chapter01_ArraysAndStrings;

/**
 * Class that implements the algorithm
 */
class Question06_StringCompression
{
    /**
     * Question:
     *
     * Implement a method to perform a basic string compression using the counts
     * of repeated characters. For example, the string aabcccccaaa would become
     * a2b1c5a3. If this "compressed" string would not become smaller then the
     * original string, your method should return the original string. You can
     * assume the string has only uppercase and lowercase letters (a-z).
     *
     * Explanation:
     *
     * - We are assuming that characters are from english alphabet
     * - Strings in PHP are mutable so StringBuilder or any similar approach is
     *   not needed like in Java, C# and other languages. We will simply concatenate
     *   strings.
     * - Another approach would be to first iterate through string to check if
     *   compression can be achieved without creating compressed string upfront.
     *   This would reduce memory consumption but would add an extra iteration
     *   through string itself.
     *
     * Running time complexity: O(N)
     * Space complexity: O(N)
     *
     * @param string $string
     * @return string
     */
    public function solution(string $string): string
    {
        $compressedString = '';
        $stringLength = strlen($string);
        $characterOccurrence = 0;

        for ($i = 0; $i < $stringLength; $i++) {
            $characterOccurrence++;
            if ($i + 1 === $stringLength || $string[$i] !== $string[$i + 1]) {
                $compressedString .= $string[$i] . (string)$characterOccurrence;
                $characterOccurrence = 0;
            }
        }
        if ($stringLength < strlen($compressedString)) {
            return $string;
        }

        return $compressedString;
    }
}