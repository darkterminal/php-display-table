<?php

namespace Mmarica\DisplayTable;


/**
 * Abstract Table Class
 */
abstract class AbstractTable
{
    /**
     * TableBase constructor
     *
     */
    protected abstract function __construct();

    /**
     * Create a table instance
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Generate the table output
     *
     * @param DataSource\Base $data
     * @return string
     */
    public abstract function generate(DataSource\Base $data);
}