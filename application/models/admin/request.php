<?php 


namespace Models\Admin;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;

class Request extends Model{

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id){
        $sql = 'SELECT * FROM request WHERE id = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    /**
     * 
     */
    public function get_requests(){
                
        $sql = 'SELECT * FROM request';

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
            $sql_request = 'UPDATE request SET';
            $where = 'WHERE id='.$data['id'];
            $result = DateBase::build_query($sql_request, $data, $where);
            return $result;
        }
    }

    /**
     * 
     */


    /**
     * 
     */
    public function remove($id){
        if(!empty($id)){
            $sql = 'UPDATE request SET is_active = 2 WHERE id = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
    public function ok($id ){
        if(!empty($id)){
            $sql = 'UPDATE request SET is_active = 1 WHERE id = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
}

 ?>