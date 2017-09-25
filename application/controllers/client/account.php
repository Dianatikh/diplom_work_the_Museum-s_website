<?

namespace Controllers\Client;

use Core\Controller;
use Models\Client\Login as Login3;
use Models\Client\Account as Account1;

class Account extends Controller{
    /**
     *
     */
    public function index(){
        $data = "";
        $model = new Account1();
        if(isset($_SESSION['user'])) {
            $id = $_SESSION['user']['id'];
           // $data['element'] = $model->ordersHistory($id);
            //$data['customer_details'] = $model->getCustomerDetails($id);
        }
        $this->view->generate("account",'template.php', $data);
    }

    /**
     *
     */
    public function add(){
        $data = "";
        $model = new Account1();
        if(isset($_SESSION['user'])) {
            $id = $_SESSION['user']['id'];
            //$data['element'] = $model->ordersHistory($id);
            //$data['customer_details'] = $model->getCustomerDetails($id);
        }
        if(isset($_POST['send'])){
            unset($_POST['send']);
            // if logined
            if(isset($_SESSION['user'])) {
                $customer_id = $_SESSION['user']['id'];
            }else{
                $model_login = new Login3();
                $data2['name'] = $_SESSION['user']['name'] = $_POST['email'];
                $data2['password'] = $_SESSION['user']['password'] = "";
                $customer_id = $_SESSION['user']['id'] = $model_login->registerUser($data2);
            }
            $_POST['customer_id'] = $customer_id;
            //$res = $model->addCustomerDetails($_POST);
            if($res == false){
                $data['mess_type'] = "danger";
                $data['mess'] = "Не добавлено!";
            }else{
                $data['customer_details'] = $model->getCustomerDetails($customer_id);
                $data['mess_type'] = "success";
                $data['mess'] = "Успешно добавлено!";
            }
        }
        $this->view->generate("account",'template.php', $data);
    }

    /**
     *
     */
    public function edit(){
        $data = "";
        $model = new Account1();
        if(isset($_SESSION['user'])) {
            $id = $_SESSION['user']['id'];
            //$data['element'] = $model->ordersHistory($id);
            //$data['customer_details'] = $model->getCustomerDetails($id);
        }
        if(isset($_POST['send'])){
            unset($_POST['send']);
            $customer_id = $_SESSION['user']['id'];
            //$res = $model->editCustomerDetails($_POST, $customer_id);
            if($res == false){
                $data['mess_type'] = "danger";
                $data['mess'] = "Не редактировалось!";
            }else{
                $data['mess_type'] = "success";
                $data['mess'] = "Успешно отредактировано!";
            }
        }
        $this->view->generate("account",'template.php', $data);
    }
}