<?php

require_once 'AudioFormat.php';

class Mp3 extends AudioFormat
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function listen()
    {
        return 'Lecture du fichier Mp3 '. $this->filename;
    }
}
