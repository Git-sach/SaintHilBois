<?php

namespace app\table;

use \core\table\Table;

class Comment_postTable extends Table{

    protected $table = 'comment_post';

    public function findComments($id){
        return $this->query('SELECT * FROM ' . $this->table . ' WHERE post_id = ?', [$id]);
    }

    public function countComments($id){
        return $this->query('SELECT count(*) AS nbr FROM ' . $this->table . ' WHERE post_id = ?', [$id], true);
    }
}