<?php
/**
 * StorageInterface
 *
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk;

/**
 * Store data.
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
interface StorageInterface
{

    /**
     * Store data.
     *
     * @param array $data the data to store
     */
    public function store(array $data);
}
