<?php
/**
 * MathSpec
 *
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Specification unit test for MikeFunk\Math.
 *
 * @see MikeFunk\Math
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class MathSpec extends ObjectBehavior
{

    public function it_is_initializable()
    {
        $this->shouldHaveType('MikeFunk\Math');
    }

    public function it_adds_two_numbers()
    {
        $this->add(1, 1)->shouldReturn(2);
    }
}
