<?php
/**
 * This class allow you to extracts the text file content.
 *
 * @author     Francis Goris Payano <fgpayano@gmail.com>
 * @version    Release: 0.1
 */
namespace App;

class TextFileReader
{   
    var $elements = [];

    /**
     * Set the file content
     *
     * @param string $content
     * @return void
     */
    public function setFile($content)
    {
        $this->elements = $this->extract($content);
    }

    /**
     * Split the content as array
     *
     * @return array
     */
    public function render()
    {
        $elements = [];

        foreach($this->elements as $element)
        {
            $elements[] = explode("|", $element);
        }
        
        return $elements;
    }

    /**
     * Count all array elements
     *
     * @return integer
     */
    public function count()
    {
        return count($this->elements);
    }

    /**
     * Get all elements
     *
     * @return array
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * Extracts the content separately as array
     *
     * @param string $content
     * @return array
     */
    private function extract($content)
    {
        $content = file_get_contents($content);

        return explode(PHP_EOL, $content);
    }
}