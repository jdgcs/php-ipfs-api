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
final class Repo implements Api
{
    /**
     * Remove repo lockfiles.
     *
     * @Endpoint(name="repo:fsck")
     *
     * @return Command
     */
    public function fsck(): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Perform a garbage collection sweep on the repo.
     *
     * @Endpoint(name="repo:gc")
     *
     * @param bool $quiet        write minimal output
     * @param bool $streamErrors stream errors
     *
     * @return Command
     */
    public function gc(bool $quiet = false, bool $streamErrors = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Get stats for the currently used repo.
     *
     * @Endpoint(name="repo:stat")
     *
     * @param bool $human output RepoSize in MiB
     *
     * @return Command
     */
    public function stat(bool $human = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Verify all blocks in repo are not corrupted.
     *
     * @Endpoint(name="repo:verify")
     *
     * @return Command
     */
    public function verify(): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Show the repo version.
     *
     * @Endpoint(name="repo:version")
     *
     * @param bool $quiet write minimal output
     *
     * @return Command
     */
    public function version(bool $quiet = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }
}
