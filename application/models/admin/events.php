<?php 


namespace Models\Admin;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;

class Events extends Model{

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id = null){
        if($id == null)return;
        $sql = 'SELECT * FROM events WHERE id_ev = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    /**
     * 
     */
    public function get_events(){
                
       /* $sql = 'SELECT a.*, GROUP_CONCAT(DISTINCT c.name )as category 
                FROM events a 
                LEFT JOIN category_article ca 
                ON a.id_art = ca.article_id
                LEFT JOIN category c 
                ON c.id = ca.category_id
                GROUP BY a.id_art';
        */
         $sql = 'SELECT * FROM events';

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
    public function edit($data = null){
        if(!empty($data)){
            $sql = 'UPDATE events SET';
            $where = 'WHERE id_ev='.$data['id_ev'];
            $result = DateBase::build_query($sql, $data, $where);
            return $result;
        }
 
    }

    /**
     * 
     */
    public function add($data = null){
        if(!empty($data)){
            $sql = 'INSERT INTO events SET';
            $result = DateBase::build_query($sql, $data);
            return $result;
        }
    }

    /**
     * 
     */
    public function delete($id = null){
        if(!empty($id)){
            $sql = 'DELETE FROM events WHERE id_ev = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
}

 ?>