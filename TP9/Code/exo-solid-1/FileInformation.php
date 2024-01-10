<?php

class FileInformation{

    private $name;
    private $type;
    public $directory = '';
    public $validTypes = [];
    
    public function __construct($file)
    {
        $fileData = $_FILES[$file];
        $this->name = $fileData['name'];
        $this->type = $fileData['type'];
        $this->validTypes = ['PNG', 'png', 'jpeg', 'jpg', 'JPG'];
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDirectory()
    {
        return $this->directory;
    }

    public function setDirectory($directory)
    {
        $this->directory = $directory;
    }

    public function getValidTypes()
    {
        return $this->validTypes;
    }


    /*public function getExtension($name)
    {
        return pathinfo($name, PATHINFO_EXTENSION);
    }
    */
    public function getExtension()
    {
        $fileInformation = new FileInformation();
        return $fileInformation-> getExtension($this->name);
    }
}