<?php

namespace app\table;

use \core\table\Table;

class PostTable extends Table{

    protected $table = 'articles';
    
    /**
     * Récupère les derniers articles
     * @return array
     */
    public function last(){
        return $this->query("
        SELECT articles.id, articles.title, content, date, categories.title as category, img 
        FROM articles 
        LEFT JOIN categories 
            ON category_id = categories.id
        ORDER BY articles.date DESC");
    }

    public function PaginationPosts($limit, $offset){
        return $this->query("
        SELECT articles.id, articles.title, content, date, categories.title as category, img 
        FROM articles 
        LEFT JOIN categories 
            ON category_id = categories.id
        ORDER BY articles.date DESC 
        LIMIT " . $limit . " OFFSET " . $offset);
    }

    public function lastByCategory($id){
        return self::query("
        SELECT articles.id, articles.title, content, date, categories.title as category, img
        FROM articles 
        LEFT JOIN categories 
            ON category_id = categories.id
        WHERE category_id = ?", [$id]);
    }

    public function SeeAsWell($category){
        return $this->query("
        SELECT articles.id, articles.title, content, date, categories.title as category, img 
        FROM articles 
        LEFT JOIN categories ON category_id = categories.id
        WHERE categories.title = ?
        ORDER BY articles.date DESC LIMIT 3", [$category]);
    }

    public function LastAccueil(){
        return $this->query("
        SELECT articles.id, articles.title, content, date, categories.title as category, img 
        FROM articles 
        LEFT JOIN categories ON category_id = categories.id
        ORDER BY articles.date DESC LIMIT 6");
    }

    public function nbrPosts(){
        return $this->query("
        SELECT COUNT(*) AS nbr
        FROM articles", null, true);
    }
}