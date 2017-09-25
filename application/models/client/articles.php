<?php 

namespace Models\Client;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;


class Articles extends Model
{
    /**
     * @param $id
     * @return mixed
     */
    public function getById($id){
        $sql = 'SELECT * FROM articles WHERE id_art = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    public function getAll($id)
    {
        $sql = 'select * from comments, articles, users where comments.id_article= articles.id_art and users.id=comments.user_name and id_art=%s';
        
        $result = DateBase::query($sql,$id);
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
    public function get_articles(){
                
        $sql = 'SELECT * FROM articles ORDER BY date DESC';

        $result = DateBase::query($sql);
        $row2 = array();
        while ($row = $result->fetch_assoc()) {
            array_push($row2 , $row);
        }
        if(empty($row2))return;
        return $row2;
    }
    
    
        public function addCom($data = null){
        if(!empty($data)){
            $sql_request = 'INSERT INTO comments SET';
            $result = DateBase::build_query($sql_request, $data);
            return $result;
        }
    }

    /**
     * 
     */
    public function delete($id = null){
        if(!empty($id)){
            $sql = 'DELETE FROM comments WHERE id_com = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
}