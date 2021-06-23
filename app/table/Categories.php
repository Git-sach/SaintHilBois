<?php

namespace app\table;

use app\App;

class Categories extends Table{

    protected static $table = 'categories';

    public function getURL(){
        return 'index.php?p=category&id=' . $this->id;
    }
}