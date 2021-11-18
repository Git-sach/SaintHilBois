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

    public function postsLimitCat($limit, $offset, $category = null){
        
        $select = "
        SELECT articles.id, articles.title, content, date, categories.title as category, img 
        FROM articles 
        LEFT JOIN categories 
            ON category_id = categories.id";
        if($category !== null){
            $where = " WHERE category_id = " . $category;
        }else{
            $where = "";
        }
        $limit = " ORDER BY articles.date DESC 
        LIMIT " . $limit . " OFFSET " . $offset;

        return $this->query($select . $where . $limit);
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

    public function nbrPosts($category = null){
        $query = "
        SELECT COUNT(*) AS nbr
        FROM articles";

        if($category !== null){
            $query .= " WHERE category_id=" . $category;
        }
        return $this->query($query, null, true);
    }
}