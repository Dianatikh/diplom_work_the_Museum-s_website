<?php 

namespace Models\Client;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;


class Events extends Model
{
    /**
     * @param $id
     * @return mixed
     */
    public function getById($id){
        $sql = 'SELECT * FROM events WHERE id_ev = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }

    /**
     * 
     */
    public function get_events(){
                
        $sql = 'SELECT * FROM events';

        $result = DateBase::query($sql);
        $row2 = array();
        while ($row = $result->fetch_assoc()) {
            array_push($row2 , $row);
        }
        if(empty($row2))return;
        return $row2;
    }
    
    
    }
