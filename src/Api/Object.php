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
final class Object implements Api
{
    /**
     * Output the raw bytes of an IPFS object.
     *
     * @Endpoint(name="object:data")
     *
     * @param string $arg key of the object to retrieve, in base58-encoded multihash format
     *
     * @return Command
     */
    public function data(string $arg): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Display the diff between two ipfs objects.
     *
     * @Endpoint(name="object:diff")
     *
     * @param string $arg     object to diff against
     * @param string $arg1    object to diff
     * @param bool   $verbose print extra information
     *
     * @return Command
     */
    public function diff(string $arg, string $arg1, bool $verbose = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Get and serialize the DAG node named by .
     *
     * @Endpoint(name="object:get")
     *
     * @param string $arg key of the object to retrieve, in base58-encoded multihash format
     *
     * @return Command
     */
    public function get(string $arg): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Output the links pointed to by the specified object.
     *
     * @Endpoint(name="object:links")
     *
     * @param string $arg     key of the object to retrieve, in base58-encoded multihash format
     * @param bool   $headers print table headers (Hash, Size, Name)
     *
     * @return Command
     */
    public function links(string $arg, bool $headers = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Create a new object from an ipfs template.
     *
     * @Endpoint(name="object:new")
     *
     * @param string $arg template to use
     *
     * @return Command
     */
    public function new(string $arg = null): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Add a link to a given object.
     *
     * @Endpoint(name="object:patch:add-link")
     *
     * @param string $arg    the hash of the node to modify
     * @param string $arg1   name of link to create
     * @param string $arg2   iPFS object to add link to
     * @param bool   $create create intermediary nodes
     *
     * @return Command
     */
    public function patchAddLink(string $arg, string $arg1, string $arg2, bool $create = false): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Append data to the data segment of a dag node.
     *
     * @Endpoint(name="object:patch:append-data")
     *
     * @param string $arg  the hash of the node to modify
     * @param string $file data to append
     *
     * @return Command
     */
    public function patchAppendData(string $arg, string $file): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Remove a link from an object.
     *
     * @Endpoint(name="object:patch:rm-link")
     *
     * @param string $arg  the hash of the node to modify
     * @param string $arg1 name of the link to remove
     *
     * @return Command
     */
    public function patchRmLink(string $arg, string $arg1): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Set the data field of an IPFS object.
     *
     * @Endpoint(name="object:patch:set-data")
     *
     * @param string $arg  the hash of the node to modify
     * @param string $file the data to set the object to
     *
     * @return Command
     */
    public function patchSetData(string $arg, string $file): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Store input as a DAG object, print its key.
     *
     * @Endpoint(name="object:put")
     *
     * @param string $file         data to be stored as a DAG object
     * @param string $inputenc     encoding type of input data
     * @param string $datafieldenc encoding type of the data field, either “text” or “base64”
     *
     * @return Command
     */
    public function put(string $file, string $inputenc = 'json', string $datafieldenc = 'text'): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Get stats for the DAG node named by .
     *
     * @Endpoint(name="object:stat")
     *
     * @param string $arg key of the object to retrieve, in base58-encoded multihash format
     *
     * @return Command
     */
    public function stat(string $arg): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }
}
