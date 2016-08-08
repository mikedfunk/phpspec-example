<?php
/**
 * Specification unit test for MikeFunk\Repository\UserRepository
 *
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk\Repository;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use MikeFunk\StorageInterface;

/**
 * UserRepositorySpec
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class UserRepositorySpec extends ObjectBehavior
{

    public function let(StorageInterface $storage)
    {
        $this->beConstructedWith($storage);
    }

    public function it_is_initializable(StorageInterface $storage)
    {
        $this->shouldHaveType('MikeFunk\Repository\UserRepository');
    }

    public function it_should_save(StorageInterface $storage)
    {
        // dummy data
        $data = ['id' => 1, 'name' => 'Joe'];
        $expected = true;

        $storage->store($data)->shouldBeCalled();
        $this->save($data)->shouldReturn($expected);
    }
}
