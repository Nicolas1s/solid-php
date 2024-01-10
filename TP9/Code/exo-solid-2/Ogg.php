<?php

require_once 'AudioFormat.php';

class Ogg extends AudioFormat
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function listen()
    {
        return 'Lecture du fichier Ogg '. $this->filename;
    }
}