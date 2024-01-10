<?php

abstract class AudioFormat
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    abstract public function listen();
}