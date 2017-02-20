<?php

declare(strict_types = 1);

namespace Ctci\Chapter01_ArraysAndStrings;

/**
 * Class that implements the algorithm
 */
class Question08_ZeroMatrix
{
    /**
     * Question:
     *
     * Write an algorithm such that if an element in an MxN matrix is 0, its
     * entire row and column are set to 0.
     *
     * Explanation:
     *
     * - If we start zeroing rows and columns immediately soon we will come to
     *   across newly zerofied fields and we'll apply algorithm on these fields
     *   too and our whole matrix will be filled with zeros
     * - We should do the following:
     *   - Check if first row and column have zeros and flag it
     *   - Iterate through whole matrix and each time you spot a zero mark that
     *     column and row in the sam matrix
     *   - After finishing iterations zerofy all rows and columns that have flags
     *     except touching first row and column
     *   - If first row and column are flagged zerofy them too
     *
     * Running time complexity: O(MxN)
     * Space complexity: O(1)
     *
     * @param array $matrix
     * @return array
     */
    public function solution(array $matrix): array
    {
        $rowHadZeroes = false;
        $columnHadZeroes = false;

        // check if first row has zero
        for ($j = 0, $jMax = count($matrix[0]); $j < $jMax; $j++) {
            if ($matrix[0][$j] === 0) {
                $rowHadZeroes = true;
                break;
            }
        }

        // check if first column has zero
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            if ($matrix[$j][0] === 0) {
                $columnHadZeroes = true;
                break;
            }
        }

        for ($i = 1, $iMax = count($matrix); $i < $iMax; $i++) {
            for ($j = 1, $jMax = count($matrix[$i]); $j < $jMax; $j++) {
                if ($matrix[$i][$j] === 0) {
                    $matrix[$i][0] = 0;
                    $matrix[0][$j] = 0;
                }
            }
        }

        // nullify row
        for ($j = 1, $jMax = count($matrix); $j < $jMax; $j++) {
            if ($matrix[$j][0] === 0) {
                $this->nullifyRow($matrix, $j);
            }
        }

        // nullify column
        for ($i = 1, $iMax = count($matrix[0]); $i < $iMax; $i++) {
            if ($matrix[0][$i] === 0) {
                $this->nullifyColumn($matrix, $i);
            }
        }

        if ($rowHadZeroes) {
            $this->nullifyRow($matrix, 0);
        }

        if ($columnHadZeroes) {
            $this->nullifyColumn($matrix, 0);
        }

        return $matrix;
    }

    /**
     * Zerofy whole row
     *
     * @param array $matrix
     * @param int $column
     */
    private function nullifyRow(array &$matrix, int $column) {
        for ($i = 0, $iMax = count($matrix[$column]); $i < $iMax; $i++) {
            $matrix[$column][$i] = 0;
        }
    }

    /**
     * Zerofy whole column
     *
     * @param array $matrix
     * @param int $row
     */
    private function nullifyColumn(array &$matrix, int $row) {
        for ($j = 0, $jMax = count($matrix); $j < $jMax; $j++) {
            $matrix[$j][$row] = 0;
        }
    }
}