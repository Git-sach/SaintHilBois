<?php

namespace core\HTML;

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
        if(is_object($this->data)){
            return $this->data->$index; 
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label>' . $label . '</label>';
        $json = '{"json": "' . $this->getValue($name) . '"}';
        if($type === 'textarea'){
            $input = '<textarea name="' . $name . '" class="text-area">' . json_decode($json)->{'json'} . '</textarea>';
        } else {
            $input = '<input type="' . $type . '" class="text-input" name="' . $name . '" value="' . $this->getValue($name) . '">';
        }
        return $this->surrond($label . $input);
    }

    public function select($name, $label, $options){
        $label = '<label>' . $label . '</label>';
        $input = '<select class="form-control" name="' . $name . '">';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }
            $input .= "<option value='$k'$attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surrond($label . $input);
    }

    public function selectCreation($name, $label, $id = '0'){
        $radio = '<input class="hiden" type="radio" id="p" name="p" value="creation.posts.categories"checked>';
        $input = '<select class="form-control" name="' . $name . '" onchange="this.form.submit()">';
        foreach($this->data as $k){
            $attributes = '';
            if($id == '0'){
                $input .= "<option value='$k->id' selected disabled hidden>$label</option>";
            }
            else{
                if($k->id == $id){
                    $attributes = ' selected';
                }
            }
            $input .= "<option value='$k->id'$attributes>$k->title</option>";
        }
        $input .= '</select>';
        return $this->surrond($radio . $input);
    }

    public function submit(){
        return $this->surrond('<button type="submit">Envoyer</button>');
    }
}