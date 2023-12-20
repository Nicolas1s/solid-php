<?php

class FileUploader{
    
    public function uploadFile($type,$validTypes,$name,$error)
    {
        if (!in_array($type, $validTypes)) {
            $error = 'Le fichier ' . $name . ' n\'est pas d\'un type valide';

            return false;
        } else {
            return true;
        }
    }
}