<?php

declare(strict_types=1);

/*
 * This file is part of the "php-ipfs" package.
 *
 * (c) Robert Schönthal <robert.schoenthal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace IPFS\Api;

use IPFS\Annotation\Api as Endpoint;
use IPFS\Command\Command;

/**
 * @author Robert Schönthal <robert.schoenthal@gmail.com>
 * @autogenerated
 * @codeCoverageIgnore
 */
final class Block implements Api
{
    /**
     * Get a raw IPFS block.
     *
     * @Endpoint(name="block:get")
     *
     * @param string $arg the base58 multihash of an existing block to get
     *
     * @return Command
     */
    public function get(string $arg): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Store input as an IPFS block.
     *
     * @Endpoint(name="block:put")
     *
     * @param string $file   the data to be stored as an IPFS block
     * @param string $format cid format for blocks to be created with
     * @param string $mhtype multihash hash function
     * @param int    $mhlen  multihash hash length
     *
     * @return Command
     */
    public function put(string $file, string $format = null, string $mhtype = 'sha2-256', int $mhlen = -1): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Remove IPFS block(s).
     *
     * @Endpoint(name="block:rm")
     *
     * @param string $arg   bash58 encoded multihash of block(s) to remove
     * @param bool   $force ignore nonexistent blocks
     * @param bool   $quiet write minimal output
     *
     * @return Command
     */
    public function rm(string $arg, bool $force = false, bool $quiet = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Print information of a raw IPFS block.
     *
     * @Endpoint(name="block:stat")
     *
     * @param string $arg the base58 multihash of an existing block to stat
     *
     * @return Command
     */
    public function stat(string $arg): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }
}
