<?php 


namespace Models\Admin;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;

class Articles extends Model{

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id = null){
        if($id == null)return;
        $sql = 'SELECT * FROM articles WHERE id_art = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    /**
     * 
     */
    public function get_articles(){
                
        $sql = 'SELECT a.*, GROUP_CONCAT(DISTINCT c.name )as category 
                FROM articles a 
                LEFT JOIN category_article ca 
                ON a.id_art = ca.article_id
                LEFT JOIN category c 
                ON c.id = ca.category_id
                GROUP BY a.id_art ORDER BY date DESC' ;

        $result = DateBase::query($sql);
        $row2 = array();
        while ($row = $result->fetch_assoc()) {
            array_push($row2 , $row);
        }
        if(empty($row2))return;
        return $row2;
    }

    /**
     * 
     */
    public function edit($data = null, $category = null){
        if(!empty($data)){
            $sql_articles = 'UPDATE articles SET';
            $where = 'WHERE id_art='.$data['id_art'];
            $result = DateBase::build_query($sql_articles, $data, $where);
            // return $result;
        }
        if(!empty($category)){
            foreach($category as $cat){
                $sql_articles = 'INSERT INTO category_article SET';
                $result = DateBase::build_query($sql_articles, $cat);            
            }
        }
    }

    /**
     * 
     */
    public function add($data = null, $category = null){
        if(!empty($data)){
            $sql_articles = 'INSERT INTO articles SET';
            $result = DateBase::build_query($sql_articles, $data);
            return $result;
        }
        $id = DateBase::insert_id();
        if(!empty($category) && isset($id)){
            foreach($category as $key=>$cat){
                $cat['article_id'] = $id; 
                $sql_articles = 'INSERT INTO category_article SET';
                $result = DateBase::build_query($sql_articles, $cat);            
            }
        }

    }

    /**
     * 
     */
    public function delete($id = null){
        if(!empty($id)){
            $sql = 'DELETE FROM articles WHERE id_art = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
}

 ?>