<?php

namespace app\entity;

use \core\entity\Entity;

class PostEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=creation.posts.show&id=' .$this->id;
    }

    public function getExtract(){
        $html = '<p>' . substr($this->content, 0, 200) . '...' . '</p>';
        //$html .= '<p><a href="' . $this->getURL() . '">Voir la suite..</a></p>';
        $html .= '<form method="post" action="' . $this->getURL() . '"><p><button class="btnCard">Voir la suite..</button></p></form>';
        return $html;
    }
}