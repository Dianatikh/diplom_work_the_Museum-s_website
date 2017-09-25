<?

namespace Models\Admin;

use Core\Model;
use Lib\DateBase;

class Login extends Model{

    /**
     * @param $data
     * @return bool|mixed
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
          AND admin = 1
         
        ";
        $res = Datebase::query($sql);
        if($res->num_rows) {
            $row = $res->fetch_assoc();
            // die(var_dump($row));
            return $row;
        }
        return false;
    }

}