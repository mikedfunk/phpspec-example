<?php
/**
 * Specification unit test for MikeFunk\Math
 *
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * MathSpec
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class MathSpec extends ObjectBehavior
{

    /**
     * it_is_initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('MikeFunk\Math');
    }

    /**
     * it_adds_two_numbers
     *
     * @return void
     */
    public function it_adds_two_numbers()
    {
        $this->add(1, 1)->shouldReturn(2);
    }
}
