<?

namespace Controllers\Client;

use Core\Controller;
use Models\Client\Login as Login1;

use Lib\Session;

class Login extends Controller{
    /**
     *
     */
    public function index(){
        $data = "";
        // авторизация
        if(isset($_POST['login'])){
//            unset($_POST['send']);
            $model = new Login1();
            foreach($_POST as $name => $post){
                if($post == ""){
                    $data['mess'] = "Пустое поле $name";
                    $data['mess_type'] = "warning";
                    $this->view->generate("login/login", 'template_null.php', $data);
                    return;
                }
            }
            $res = $model->getUser($_POST);
            if($res) {
                $_SESSION['user'] = $res;
                $data['mess'] = "Успешная авторизация!";
                $data['mess_type'] = "success";
                $data['reload'] = true;
                $this->view->redirect("../../articles");
                
            }else{
                $data['mess'] = "Ошибка входа!";
                $data['mess_type'] = "danger";
            }
        }
        $this->view->generate("login/login",'template_null.php', $data);
    }

    /**
     *
     */
    public function logout(){
        $_SESSION['user'] = null;
         $this->view->redirect("../main");
        return;
    }

    /**
     *
     */
    public function register(){
        
        $data = "";
        if(isset($_POST['login'])){
            
            //unset($_POST['send']);
            foreach($_POST as $name => $post){
                if($post == ""){
                    $data['mess'] = "Пустое поле $name";
                    $data['mess_type'] = "warning";
                    $this->view->generate("login/register",'template_null.php', $data);
                    return;
                }
            }
           
                $model = new Login1();
            
            $temp = $model->getMail($_POST);
            if($temp){
                $data['mess'] = "Пользователь с таким e-mail уже зарегистрирован!";
                $data['mess_type'] = "danger";
            }
            else
            {
    
                $res = $model->registerUser($_POST);
                if ($res == true) {
                    $data['mess'] = "Зарегистрирован!";
                    $data['mess_type'] = "success";
                     $this->view->redirect("../login");
                } else {
                    $data['mess'] = "Ошибка регистрации!";
                    $data['mess_type'] = "danger";
                }
            }
        }
        $this->view->generate("login/register",'template_null.php', $data);
    }
}