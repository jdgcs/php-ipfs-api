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
final class Name implements Api
{
    /**
     * Publish IPNS names.
     *
     * @Endpoint(name="name:publish")
     *
     * @param string $arg      ipfs path of the object to be published
     * @param bool   $resolve  resolve given path before publishing
     * @param string $lifetime time duration that the record will be valid for
     * @param string $ttl      time duration this record should be cached for (caution: experimental)
     * @param string $key      name of the key to be used, as listed by ‘ipfs key list’
     *
     * @return Command
     */
    public function publish(string $arg, bool $resolve = true, string $lifetime = '24h', string $ttl = null, string $key = 'self'): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Resolve IPNS names.
     *
     * @Endpoint(name="name:resolve")
     *
     * @param string $arg       the IPNS name to resolve
     * @param bool   $recursive resolve until the result is not an IPNS name
     * @param bool   $nocache   do not use cached entries
     *
     * @return Command
     */
    public function resolve(string $arg = null, bool $recursive = false, bool $nocache = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }
}
