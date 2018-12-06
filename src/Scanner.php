<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 12/6/18
 * Time: 4:06 PM
 */

class Scanner
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;

        echo $this->file;
    }
}