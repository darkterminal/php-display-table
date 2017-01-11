<?php
namespace Mmarica\DisplayTable\Output\Ascii\Border;


/**
 * Rounded Border Class
 */
class Rounded extends AbstractBorder
{
    protected $_headerTop = array('.', '-', '.', '.');
    protected $_headerContent = array('|', '|', '|');
    protected $_headerIntersection = array(':', '-', '+', ':');
    protected $_headerBottom = array('\'', '-', '\'', '\'');
    protected $_dataTop = array('.', '-', '.', '.');
    protected $_dataContent = array('|', '|', '|');
    protected $_dataBottom = array('\'', '-', '\'', '\'');
}