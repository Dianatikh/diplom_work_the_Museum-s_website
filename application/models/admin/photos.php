<?php 


namespace Models\Admin;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;

class Photos extends Model{

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id = null){
        if($id == null)return;
        $sql = 'SELECT * FROM photos WHERE id = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    /**
     * 
     */
    public function get_photos(){
                
        $sql = 'SELECT * FROM photos';

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
            $sql_ph = 'UPDATE photos SET';
            $where = 'WHERE id='.$data['id'];
            $result = DateBase::build_query($sql_ph, $data, $where);
             return $result;
        }
      
    }

    /**
     * 
     */
    public function add($data = null){
        if(!empty($data)){
            $sql_ph = 'INSERT INTO photos SET';
            $result = DateBase::build_query($sql_ph, $data);
            return $result;
        }
    }

    /**
     * 
     */
    public function delete($id = null){
        if(!empty($id)){
            $sql = 'DELETE FROM photos WHERE id = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
}

 ?>