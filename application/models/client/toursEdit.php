<?php 


namespace Models\Client;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;

class ToursEdit extends Model{

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id){
        $sql = 'SELECT * FROM tour_cust, tours WHERE  tours.id = tour_cust.id_tour and id_tc = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    
    public function get_tour($id){
        $sql = 'SELECT * FROM  tours WHERE   id = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    /**
     * 
     */
    public function get_tours($id){
                
        $sql = 'SELECT * FROM tour_cust, tours WHERE  tours.id = tour_cust.id_tour and id_user = %s';

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
            $sql_request = 'UPDATE tour_cust SET';
            $where = 'WHERE id_tc='.$data['id_tc'];
            $result = DateBase::build_query($sql_request, $data, $where);
            return $result;
        }
    }

    /**
     * 
     */
    public function add($data = null){
        if(!empty($data)){
            $sql_request = 'INSERT INTO tour_cust SET';
            $result = DateBase::build_query($sql_request, $data);
            return $result;
        }
    }

    /**
     * 
     */
    public function delete($id = null){
        if(!empty($id)){
            $sql = 'DELETE FROM tour_cust WHERE id_tc = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
}

 ?>