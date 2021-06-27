<?php

namespace app\entity;

use \core\entity\Entity;

class CategoryEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=creation.post.category&id=' .$this->id;
    }
    
}