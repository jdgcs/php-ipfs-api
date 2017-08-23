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
final class Filestore implements Api
{
    /**
     * List blocks that are both in the filestore and standard block storage.
     *
     * @Endpoint(name="filestore:dups")
     *
     * @return Command
     */
    public function dups(): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * List objects in filestore.
     *
     * @Endpoint(name="filestore:ls")
     *
     * @param string $arg cid of objects to list
     *
     * @return Command
     */
    public function ls(string $arg = null): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Verify objects in filestore.
     *
     * @Endpoint(name="filestore:verify")
     *
     * @param string $arg cid of objects to verify
     *
     * @return Command
     */
    public function verify(string $arg = null): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }
}
