<?php
/**
 * Specification unit test for MikeFunk\PhpSpec\Math
 *
 * @package spec\MikeFunk\PhpSpec
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk\PhpSpec;

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
        $this->shouldHaveType('MikeFunk\PhpSpec\Math');
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
