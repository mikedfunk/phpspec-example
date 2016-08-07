<?php
/**
 * Defines MikeFunk\Repository\UserRepository
 *
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\Repository;

use MikeFunk\StorageInterface;

/**
 * UserRepository
 *
 * @author Michael Funk <mike@mikefunk.com>
 * @see spec\MikeFunk\Repository\UserRepositorySpec
 */
class UserRepository
{

    /**
     * @var MikeFunk\StorageInterface Stores data.
     */
    protected $storage;

    /**
     * Dependency injection.
     *
     * @param MikeFunk\StorageInterface $storage
     */
    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }
    /**
     * Save data.
     *
     * @param array $data the data to save
     */
    public function save(array $data)
    {
        $this->storage->store($data);

        return true;
    }
}
