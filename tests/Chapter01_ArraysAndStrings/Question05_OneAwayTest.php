<?php

declare(strict_types = 1);

namespace Ctci\Tests\Chapter_1_ArraysAndStrings;

use Ctci\Chapter01_ArraysAndStrings\Question05_OneAway;

class Question05_OneAwayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Question05_OneAway
     */
    private $oneAway;

    /**
     * Setup the class that implements the algorithm
     */
    public function setUp()
    {
        $this->oneAway = new Question05_OneAway();
    }

    /**
     * @dataProvider getData
     * @param string $stringOne
     * @param string $stringTwo
     * @param bool $expected
     */
    public function testSolution(string $stringOne, string $stringTwo, bool $expected)
    {
        $result = $this->oneAway->solution($stringOne, $stringTwo);
        $this->assertSame($expected, $result);
    }

    /**
     * Data provider
     *
     * @return array
     */
    public function getData()
    {
        return [
            [ #0 They are one edit away
                'stringOne' => '',
                'stringTwo' => '',
                'expected' => true,
            ],
            [ #1 They are one edit away
                'stringOne' => 'a',
                'stringTwo' => '',
                'expected' => true,
            ],
            [ #2 They are one edit away
                'stringOne' => '',
                'stringTwo' => 'a',
                'expected' => true,
            ],
            [ #3 They are one edit away
                'stringOne' => 'pale',
                'stringTwo' => 'ple',
                'expected' => true,
            ],
            [ #4 They are one edit away
                'stringOne' => 'pales',
                'stringTwo' => 'pale',
                'expected' => true,
            ],
            [ #5 They are one edit away
                'stringOne' => 'ple',
                'stringTwo' => 'pale',
                'expected' => true,
            ],
            [ #6 They are one edit away
                'stringOne' => 'pale',
                'stringTwo' => 'pales',
                'expected' => true,
            ],
            [ #7 They are one edit away
                'stringOne' => 'pale',
                'stringTwo' => 'bale',
                'expected' => true,
            ],
            [ #8 They are NOT one edit away
                'stringOne' => 'pale',
                'stringTwo' => 'bae',
                'expected' => false,
            ],
            [ #9 They are NOT one edit away
                'stringOne' => 'aaa',
                'stringTwo' => 'a',
                'expected' => false,
            ],
        ];
    }
}