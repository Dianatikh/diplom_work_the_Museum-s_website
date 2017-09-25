<?php 




namespace Models\Client;

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
    public function get_requests($id){
                
        $sql = 'SELECT * FROM request WHERE id_name = %s';

        $result = DateBase::query($sql, $id);
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
    public function add($data = null){
        if(!empty($data)){
            $sql_request = 'INSERT INTO request SET';
            $result = DateBase::build_query($sql_request, $data);
            return $result;
        }
    }

    /**
     * 
     */
    public function delete($id = null){
        if(!empty($id)){
            $sql = 'DELETE FROM request WHERE id = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
}

 ?>