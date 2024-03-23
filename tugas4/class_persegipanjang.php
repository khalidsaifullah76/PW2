<?php

class persegipanjang{
    public $panjang;
    public $lebar;

    function __construct($panjang,$lebar){
        $this->panjang=$panjang;
        $this->lebar=$lebar;
    }
    public function cariluas(){
        return $this->panjang * $this->lebar;
    }   
    public function carikeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }
}