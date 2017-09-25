<?php 


namespace Models\Client;

use Core\Model;
use Lib\Registry;
use Lib\DateBase;

class Book extends Model{

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id){
        $sql = 'SELECT * FROM book WHERE id = %s';
        $result = DateBase::query($sql, $id);
        $row = $result->fetch_assoc();
        return $row;
    }
    /**
     * 
     */
    public function get_book(){
                
        $sql = 'select * from book, users where book.id_users = users.id';

        $result = DateBase::query($sql);
        $row2 = array();
        while ($row = $result->fetch_assoc()) {
            array_push($row2 , $row);
        }
        if(empty($row2))return;
        return $row2;
    }
    
       public function get_user($id = null){
                
        $sql = 'SELECT login FROM users WHERE id = %s';

        $result = DateBase::query($sql, $id);
            return $result;
    }
    
    


    /**
     * 
     */
    public function edit($data = null){
        if(!empty($data)){
            $sql_request = 'UPDATE book SET';
            $where = 'WHERE id='.$data['id'];
            $result = DateBase::build_query($sql_request, $data, $where);
            return $result;
        }
    }

    /**
     * 
     */
    public function addCom($data = null){
        if(!empty($data)){
            $sql_request = 'INSERT INTO book SET';
            $result = DateBase::build_query($sql_request, $data);
            return $result;
        }
    }

    /**
     * 
     */
    public function delete($id = null){
        if(!empty($id)){
            $sql = 'DELETE FROM book WHERE id_book = %s';
            $result = DateBase::query($sql, $id);
            return $result;
        }
    }
}

 ?>