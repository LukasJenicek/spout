<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 9/4/16
 * Time: 5:03 PM
 */

namespace Box\Spout\Writer\Common\Cell;


/**
 * Class CellWidthWriter
 * @package Box\Spout\Writer\Common\Cell
 *
 *
 *
 *
 */
abstract class CellWidthWriter
{

    /**
     * @var CellWidthCalculator
     */
    protected $cellWidthCalculator;

    /**
     * Just keep all columns width in array
     * @var array
     */
    protected $widths = array();


    public function __construct(CellWidthCalculator $cellWidthCalculator)
    {
        $this->cellWidthCalculator = $cellWidthCalculator;
    }

    /**
     * @param int $key
     * @param string $string
     */
    public function addWidth($key, $string) {

        if(!isset($this->widths[$key])) {
            $this->widths[$key] = $this->cellWidthCalculator->calculate($string);
        } else {
            $len = $this->cellWidthCalculator->calculate($string);
            // if the current width of string is bigger than current width saved in array
            // then rewrite the value with the new one
            if($len > $this->widths[$key]) {
                $this->widths[$key] = $len;
            }
        }
    }


    /**
     * @return string
     */
    abstract public function getCellWidthXml();

}