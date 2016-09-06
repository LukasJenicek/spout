<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 9/4/16
 * Time: 5:01 PM
 */

namespace Box\Spout\Writer\Common\Cell;


interface CellWidthCalculator
{

    /**
     *
     * @param string $string
     * @return int|float
     */
    public function calculate($string);

}