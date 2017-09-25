<?php 


namespace Models\Client;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;

class Tickets extends Model{

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id){
        $sql = 'SELECT * FROM tickets_cust WHERE id = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    /**
     * 
     */
    public function get_tickets($id){
                
        $sql = 'SELECT * FROM tickets_cust WHERE id_user = %s';

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
            $sql_request = 'UPDATE tickets_cust SET';
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
            $sql_request = 'INSERT INTO tickets_cust SET';
            $result = DateBase::build_query($sql_request, $data);
            return $result;
        }
    }

    /**
     * 
     */
    public function delete($id = null){
        if(!empty($id)){
            $sql = 'DELETE FROM tickets_cust WHERE id = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
}

 ?>