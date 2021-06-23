<?php

namespace app\table;

use app\App;

class Articles extends Table{

    protected static $table = 'articles';

    public static function getLast(){
        return self::query("
            SELECT articles.id, articles.title, content, categories.title as category 
            FROM articles 
            LEFT JOIN categories 
                ON category_id = categories.id");
    }

    public function getURL(){
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtract(){
        $html = '<p>' . substr($this->content, 0, 100) . '...' . '</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite..</a></p>';
        return $html;
    }

    public static function lastByCategory($id){
        return self::query("
        SELECT articles.id, articles.title, content, categories.title as category 
        FROM articles 
        LEFT JOIN categories 
            ON category_id = categories.id
        WHERE category_id = ?", [$id]);
    }

}