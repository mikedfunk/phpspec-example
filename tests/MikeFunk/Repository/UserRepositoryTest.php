<?php
/**
 * UserRepositoryTest
 *
 * @copyright 2016 Demand Media, Inc. All Rights Reserved.
 */
namespace MikeFunk\Repository;

use MikeFunk\StorageInterface;
use MikeFunk\Repository\UserRepositoryTest;

/**
 * Unit Tests.
 *
 * @author Michael Funk <mike.funk@demandmedia.com>
 */
class UserRepositoryTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @var MikeFunk\StorageInterface Storage instance
     */
    protected $storage;

    /**
     * @var MikeFunk\Repository\UserRepository class under test
     */
    protected $userRepository;

    /**
     * Phpunit setup.
     */
    public function setUp()
    {
        // mock dependencies
        $this->storage = $this->getMockBuilder(StorageInterface::class)->getMock();
        // instantiate class under test
        $this->userRepository = new UserRepository($this->storage);
    }

    /**
     * @test
     */
    public function it_should_save()
    {
        // dummy data
        $data = ['whatever' => 'something'];

        // it should store
        $this->storage->
            expects($this->once())->
            method('store')->
            with($data);

        // call and verify
        $expected = true;
        $actual = $this->userRepository->save($data);
        $this->assertEquals($expected, $actual);
    }
}
