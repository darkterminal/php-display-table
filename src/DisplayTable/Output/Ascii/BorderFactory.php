<?php
namespace Mmarica\DisplayTable\Output\Ascii;

use Mmarica\DisplayTable\Output\Ascii\Border\AbstractBorder;
use Mmarica\DisplayTable\Output\Ascii\Border\BubbleBorder;
use Mmarica\DisplayTable\Output\Ascii\Border\CompactBorder;
use Mmarica\DisplayTable\Output\Ascii\Border\DifferentiatedBorder;
use Mmarica\DisplayTable\Output\Ascii\Border\DottedBorder;
use Mmarica\DisplayTable\Output\Ascii\Border\GirderBorder;
use Mmarica\DisplayTable\Output\Ascii\Border\GithubBorder;
use Mmarica\DisplayTable\Output\Ascii\Border\MysqlBorder;
use Mmarica\DisplayTable\Output\Ascii\Border\NoBorder;
use Mmarica\DisplayTable\Output\Ascii\Border\RoundedBorder;


/**
 * Border Factory Class
 */
class BorderFactory
{
    // Border styles
    const ROUNDED_BORDER = 'rounded_border';
    const MYSQL_BORDER = 'mysql_border';
    const DOTTED_BORDER = 'dotted_border';
    const DIFFERENTIATED_BORDER = 'differentiated_border';
    const BUBBLE_BORDER = 'bubble_border';
    const GIRDER_BORDER = 'girder_border';
    const COMPACT_BORDER = 'compact_border';
    const NO_BORDER = 'no_border';
    const GITHUB_BORDER = 'github_border';

    /**
     * @param string $borderType    Border type
     * @param array  $columnLengths List of maximum lengths for every column
     * @return AbstractBorder
     * @throws \Exception
     */
    public static function create($borderType, $columnLengths)
    {
        switch ($borderType) {
            case self::ROUNDED_BORDER:
                return new RoundedBorder($columnLengths);

            case self::MYSQL_BORDER:
                return new MysqlBorder($columnLengths);

            case self::DOTTED_BORDER:
                return new DottedBorder($columnLengths);

            case self::GITHUB_BORDER:
                return new GithubBorder($columnLengths);

            case self::DIFFERENTIATED_BORDER:
                return new DifferentiatedBorder($columnLengths);

            case self::BUBBLE_BORDER:
                return new BubbleBorder($columnLengths);

            case self::GIRDER_BORDER:
                return new GirderBorder($columnLengths);

            case self::COMPACT_BORDER:
                return new CompactBorder($columnLengths);

            case self::NO_BORDER:
                return new NoBorder($columnLengths);

            default:
                throw new \UnexpectedValueException('Invalid border type: ' . $borderType);
        }
    }
}
