<?php
namespace App\Classes;

class Upload{
    public $name;
    public $sizetoupload = 2048;
    public $extentions;
    public $path;
    public $accesstypes = ['jpg', 'png', 'webp', 'gif', 'svg'];

    public function getName(){
        return $this->name;
    }

    public function setName($file,$name = ""){
        if($name === "")
            $name = pathinfo($file, PATHINFO_FILENAME);
        $name = strtolower(str_replace(' ', '- ', $name));
        $hash = md5(microtime());
        $ext = $this->getExtention();
        $this->filename = "{$name}-{$hash}.{$ext}";
    }

    public function getExtention($file){
        return $this->extention = pathinfo($file, PATHINFO_EXTENTION);
    }

    public function checkFileSize($file){
        return $file > $this->filesize ? true : false;
    }

    public function isImage($file){
        $ext = $this->getExtention($file);
        if(in_array(strtolower($ext) , $this->accesstypes))
            return true;
        return false;
    }

    public function path(){
        return $this->path;
    }

    public function moveTo($tmp_path , $folder, $file, $new_name){
        $ds = DIRECTORY_SEPERATOR;
        $this->senNmae($file, $new_name);
        $name = $this->getName();
        if(!is_dir($folder))
            mkdir($folder, 777, true);
        $this->path = "{$folder}{$ds}{$name}";
        $realPath = BASE_PATH . "{$ds}public{$ds}{$this->path}";
        if(move_uploaded_file($tmp_path, $realPath))
            return $this;
    }
}