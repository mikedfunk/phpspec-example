<?php
/**
 * StorageInterface
 *
 * @copyright 2016 Demand Media, Inc. All Rights Reserved.
 */
namespace MikeFunk;

/**
 * Store data.
 *
 * @author Michael Funk <mike.funk@demandmedia.com>
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
