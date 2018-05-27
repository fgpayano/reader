<?php 

/**
 * This class allow you to extracts the text file content.
 *
 * @author     Francis Goris Payano <fgpayano@gmail.com>
 * @version    Release: 0.1
 */
namespace App;

use \PhpOffice\PhpSpreadsheet\Reader\Xls;

class TextFileExcelReader extends Xls
{
    private $elements = [];

    /**
     * Set the file content
     *
     * @param string $content
     * @return void
     */
    public function setFile($content)
    {
        $this->elements = $this->load($content)->getActiveSheet()->toArray();
    }

    /**
     * Retrieve rows content as array
     *
     * @return array
     */
    public function render()
    {
        $elements = &$this->elements;

        unset($elements[0]);

        return $this->elements;
    }

    /**
     * Count all array elements
     *
     * @return integer
     */
    public function count()
    {
        return count($this->render());
    }
}
