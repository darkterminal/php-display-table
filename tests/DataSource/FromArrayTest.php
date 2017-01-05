<?php

namespace Tests\DisplayTable\DataSource;

use Mmarica\DisplayTable\DataSource;
use PHPUnit_Framework_TestCase;

class FromArrayTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var DataSource\Base
     */
    protected $_data;

    /**
     * @var array
     */
    protected $_columns;

    /**
     * @var array
     */
    protected $_rows;

    protected function setUp()
    {
        parent::setUp();
        $this->_data = new DataSource\FromArray($this->_columns, $this->_rows);
    }

    public function testGet()
    {
        list($columns, $rows) = $this->_data->get();
        $this->assertSame($columns, $this->_columns);
        $this->assertSame($rows, $this->_rows);
    }

    public function testGetSetRows()
    {
        $data = clone $this->_data;

        $row = array('4', 'Peter', 'Unit tests');
        $data->addRow($row);

        $rows = $this->_rows;
        $rows[] = $row;

        $this->assertSame($data->getRows(), $rows);

        $data->setRows($this->_rows);
        $this->assertSame($data->getRows(), $this->_rows);
    }

    public function testGetSetColumns()
    {
        $data = clone $this->_data;

        $columns = array('No.', 'Who', 'Likes');
        $data->setColumns($columns);

        $this->assertSame($data->getColumns(), $columns);
    }
}