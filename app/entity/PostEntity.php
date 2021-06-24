<?php

namespace app\entity;

use \core\entity\Entity;

class PostEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=post.show&id=' .$this->id;
    }

    public function getExtract(){
        $html = '<p>' . substr($this->content, 0, 150) . '...' . '</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite..</a></p>';
        return $html;
    }
}