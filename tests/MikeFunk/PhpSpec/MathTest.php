<?php
/**
 * MathTest
 *
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk;

/**
 * Unit Tests.
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class MathTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var MikeFunk\Math class under test
     */
    protected $math;

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
