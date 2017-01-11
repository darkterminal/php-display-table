<?php
namespace Mmarica\DisplayTable\Output\Ascii\Border;


/**
 * Github Border Class
 */
class Github extends AbstractBorder
{
    protected $_headerContent = array('|', '|', '|');
    protected $_headerIntersection = array('|', '-', '|', '|');
    protected $_dataContent = array('|', '|', '|');
}