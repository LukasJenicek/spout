<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 9/4/16
 * Time: 5:07 PM
 */

namespace Box\Spout\Writer\XLSX\Cell;


use Box\Spout\Writer\Common\Cell\CellWidthCalculator;

class XlsxCellWidthCalculator implements CellWidthCalculator
{

    /**
     * @inheritdoc
     */
    public function calculate($string)
    {
        return mb_strlen($string, 'UTF-8') * 1.1;
    }

}