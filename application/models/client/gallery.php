<?php 

namespace Models\Client;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;


class Gallery extends Model
{
       public function getById($id){
        $sql = 'SELECT * FROM photos WHERE id = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    
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
}