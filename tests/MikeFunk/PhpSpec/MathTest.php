<?php
/**
 * MathTest
 *
 * @copyright 2016 Demand Media, Inc. All Rights Reserved.
 */
namespace MikeFunk;

/**
 * Unit Tests.
 *
 * @author Michael Funk <mike.funk@demandmedia.com>
 */
class MathTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Math class under test
     */
    protected $math;

    /**
     * Phpunit setup.
     */
    public function setUp()
    {
        // instantiate class under test
        $this->math = new Math();
    }

    /**
     * @test
     */
    public function it_should_add()
    {
        $this->assertEquals(2, $this->math->add(1, 1));
    }
}
