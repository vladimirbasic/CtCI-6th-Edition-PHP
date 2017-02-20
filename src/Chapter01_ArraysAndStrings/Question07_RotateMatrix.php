<?php

declare(strict_types = 1);

namespace Ctci\Chapter01_ArraysAndStrings;

/**
 * Class that implements the algorithm
 */
class Question07_RotateMatrix
{
    /**
     * Question:
     *
     * Given an image represented by an NxN matrix, where each pixel in the image
     * is 4 bytes, write a method to rotate the image by 90 degrees. Can you do
     * this in place?
     *
     * Explanation:
     *
     * - The easiest way to implement rotation is layer by layer. We move top
     *   edge to the right edge, the right edge to the bottom edge, the bottom
     *   edge to the left edge and the left edge to the top edge.
     *
     * Running time complexity: O(N^2)
     * Space complexity: O(1)
     *
     * @param array $matrix
     * @param int $n
     * @return array
     */
    public function solution(array $matrix, int $n): array
    {
        for ($layer = 0; $layer < $n / 2; $layer++) {
            $first = $layer;
            $last = $n - 1 - $layer;
            for ($i = $first; $i < $last; $i++) {
                $offset = $i - $first;
                // save top
                $tmp = $matrix[$first][$i];
                // left -> top
                $matrix[$first][$i] = $matrix[$last - $offset][$first];
                // bottom -> left
                $matrix[$last - $offset][$first] = $matrix[$last][$last - $offset];
                // right -> bottom
                $matrix[$last][$last - $offset] = $matrix[$i][$last];
                // top -> right
                $matrix[$i][$last] = $tmp;
            }
        }

        return $matrix;
    }
}