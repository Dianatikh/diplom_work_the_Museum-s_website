<?php 

namespace Controllers\Client;

use Core\Controller;
use Models\Client\Articles as Articles1;

class Articles extends Controller
{
    /**
     *
     */
    function index()
    {
        $model = new Articles1();
        $articles = $model->get_articles();
        $data = array(
            'breadcrumb' => 'Главная',
            'articles' => $articles
        );
        $this->view->generate('news','template.php',  $data);
    }

    /**
     * 
     */
    public function wrap_images(&$item, $key){
        $item = "<img src='../../images/$item' alt='' class='preview image-flex'>";
    }
    
    /**
     * @param array $args
     */
    function article(array $args = null){
        $id = (isset($args[0])? $args[0]: "");
        $model = new Articles1();
        $article = $model->getById($id);
        $book = $model->getAll($id);
         // строку преобразуем в массив и оборачиваем тегами
        if(!empty($article['image'])){
            $arr = explode(',' , $article['image']);
            array_walk($arr, array($this , 'wrap_images'));
            $article['image'] = implode('' ,$arr);
        }
        $data = array(
            'article' => $article,
            'breadcrumb' => 'Главная / Статьи / '.$article['title'],
            'book'=>$book,
        );
        $this->view->generate('', 'template_null.php',  $data);
    }
    
public function addCom(array $args = null){
        
$data = "";
$model = new Articles1();
    
     $data = array();
            foreach ($_POST as $key => $value) {
                global $data;
                if(!empty($value)){
                    $data[$key] = $value;
                }
            }
    
            //$data['text'] = trim($_POST['text']);    
            $data['user_name'] = $_SESSION['user']['id'];
            $data['date_create'] = date("Y-m-d H:i:s");
            //$data['id_article'] = $_POST['id_art'];
    
            $res = $model->addCom($data);             
            $data = array(   'data' =>$data    );  
        
          $this->view->redirect('/articles/article/'.$_POST[id_article].'');  
        
    }

    /**
     * 
     */
    public function delCom($args = null){
       $id = (isset($args[0])? $args[0]: ""); 
       if($id){
            $model = new Articles1();
            $res = $model->delete($id);            
       }
       $this->view->redirect('/articles/');  
    }
}