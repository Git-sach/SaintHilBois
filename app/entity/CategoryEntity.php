<?php

namespace app\entity;

use \core\entity\Entity;

class CategoryEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=creation.posts.categories&id=' .$this->id;
    }
    
}