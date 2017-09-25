<?

namespace Models\Client;

use Core\Model;
use Lib\DateBase;
use Lib\Registry;


class Login extends Model{
    /**
     * @param $data
     * @return mixed
     */
       public function login($data){
      $name = Datebase::real_escape_string($data['login']);
      $password = Datebase::real_escape_string($data['password']);
      // die($name);
      // $password = $data['password'];
        $sql = "
          SELECT * FROM `users`
          WHERE login = '$name'
          AND password = '$password'
        
         
        ";
        $res = Datebase::query($sql);
        if($res->num_rows) {
            $row = $res->fetch_assoc();
            // die(var_dump($row));
            return $row;
        }
        return false;
    }
    
    public function getUser($data){
        $name = Datebase::real_escape_string($data['login']);
        $password = Datebase::real_escape_string($data['password']);
        $sql = "
            SELECT  * FROM users WHERE login = '{$name}' AND password = '{$password}'
        ";
        $res = DateBase::query($sql);
        if(!$res)return;
        $row = $res->fetch_assoc();
        if(empty($row))return;
        return $row;
    }
    
        public function getMail($data){
        
            $email = $data['email'];
        $sql = "
            SELECT  * FROM users WHERE email = '{$email}'
        ";
        $res = DateBase::query($sql);
        if(!$res)return;
        $row = $res->fetch_assoc();
        if(empty($row))return;
        return $row;
    }
    

    /**
     * @param $data
     * @return bool|mixed
     */
    public function registerUser($data){
        $sql = "
            INSERT INTO users SET
        ";
        $res = DateBase::build_query($sql, $data);
        if(!$res)return false;
        $id = DateBase::insert_id();
        return $id;
    }
}