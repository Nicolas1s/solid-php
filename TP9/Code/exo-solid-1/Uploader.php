<?php

require_once 'FileResize.php';
require_once 'FileInformation.php';

class Uploader
{
    private $file;
    public $error;

    public function __construct($file)
    {
        $this->file= new FileInformation($file);
    }

    public function uploadFile()
    {
        if (!in_array($this->file->getType(), $this->file->getValidTypes())) {
            $this->error = 'Le fichier ' . $this->file->getname() . ' n\'est pas d\'un type valide';

            return false;
        } else {
            return true;
        }
    }
}
