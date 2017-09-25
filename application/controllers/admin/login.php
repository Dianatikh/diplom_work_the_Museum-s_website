<?

namespace Controllers\Admin;

use Core\Controller;
use Models\Admin\Login as Login2;

class Login extends Controller{

    /**
     *
     */
    public function index(){
        $model = new Login2();
        $data['login_page'] = true;
        if(isset($_POST['send'])) {
            unset($_POST['send']);
            // пустые поля
            if(!empty($_POST['login']) && !empty($_POST['password'])){
                $user = $model->login($_POST);
            }else{
                $data['mess1'] = "Пустые поля!";
                $this->view->generate("login",'template_null.php', $data);
                return;
            }
            // ошибка регистрации
            if ($user == true){
                $_SESSION['admin'] = $user;
                $this->view->redirect("/admin/articles");
                $data['login_page'] = null;
            }else{
                $data['mess1'] = "Неверные данные!";
                $this->view->generate("login",'template_null.php', $data);
                return;
            }
        }
        $this->view->generate("login",'template_null.php', $data);
    }

    /**
     *
     */
    public function logout(){
        $_SESSION['admin'] = null;
        $this->view->redirect("/");
    }
}