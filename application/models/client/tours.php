<?php 

namespace Models\Client;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;


class Tours extends Model
{
    /**
     * @param $id
     * @return mixed
     */
    public function getById($id){
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
    
}
