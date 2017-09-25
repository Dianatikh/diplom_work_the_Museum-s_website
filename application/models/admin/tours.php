<?php 


namespace Models\Admin;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;

class Tours extends Model{

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id = null){
        if($id == null)return;
        $sql = 'SELECT * FROM tours WHERE id = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    /**
     * 
     */
    public function get_tours(){
                
         $sql = 'SELECT * FROM tours';

        $result = DateBase::query($sql);
        $row2 = array();
        while ($row = $result->fetch_assoc()) {
            array_push($row2 , $row);
        }
        if(empty($row2))return;
        return $row2;
    }
    
        public function get_tour_cust(){
                
         $sql = 'SELECT * FROM tour_cust, users, tours WHERE tour_cust.id_user = users.id and tour_cust.id_tour=tours.id';

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
            $sql = 'UPDATE tours SET';
            $where = 'WHERE id ='.$data['id'];
            $result = DateBase::build_query($sql, $data, $where);
            return $result;
        }
 
    }

    /**
     * 
     */
    public function add($data = null){
        if(!empty($data)){
            $sql = 'INSERT INTO tours SET';
            $result = DateBase::build_query($sql, $data);
            return $result;
        }
    }

    /**
     * 
     */
    public function delete($id = null){
        if(!empty($id)){
            $sql = 'DELETE FROM tours WHERE id = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
}

 ?>