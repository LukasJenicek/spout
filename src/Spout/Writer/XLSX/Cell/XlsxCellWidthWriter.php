<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 9/4/16
 * Time: 5:10 PM
 */

namespace Box\Spout\Writer\XLSX\Cell;


class XlsxCellWidthWriter extends \Box\Spout\Writer\Common\Cell\CellWidthWriter
{

    /**
     * @inheritdoc
     */
    public function getCellWidthXml()
    {
        $xml = '<cols>';
        foreach($this->widths as $key => $width) {
            $xml .= $this->addCol($key, $width);
        }
        $xml .= '</cols>';

        return $xml;
    }

    /**
     * @param $col (column key)
     * @param int|float $width (width of cell)
     * @return string
     */
    private function addCol($col, $width)
    {
        // columns in array are index from the zero but the xlsx index column from 1
        return '<col collapsed="false" 
                     hidden="false" 
                     max="'. ++$col .'"  
                     min="'. $col .'" 
                     style="0" 
                     width="'. $width .'"
                />';

    }

}