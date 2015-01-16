<?php
/**
 * Defines mikefunk\phpspec\math
 *
 * @package mikefunk\phpspec
 * @license mit license <http://opensource.org/licenses/mit-license.html>
 */
namespace mikefunk\phpspec;

/**
 * math
 *
 * @author michael funk <mike@mikefunk.com>
 * @see spec\mikefunk\phpspec\mathspec
 */
class math
{

    /**
     * add two numbers. Wow. Such complicated.
     *
     * @param int $number1
     * @param int $number2
     * @return void
     */
    public function add($number1, $number2)
    {
        return $number1 + $number2;
    }
}
