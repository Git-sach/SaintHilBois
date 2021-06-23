<?php

namespace SaintHilBois\HTML;

class Form{

    private $data;
    public $surrond = 'p';

    public function __construct($data = array()){
        $this->data = $data;
    }

    private function surrond($tag){
        return '<' . $this->surrond . '>' . $tag . '</' . $this->surrond . '>';
    }

    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input($name){
        return $this->surrond('<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    public function submit(){
        return $this->surrond('<button type="submit">Envoyer</button>');
    }
}