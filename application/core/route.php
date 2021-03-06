<?php

namespace Core;

class Route
{
    private $path = "application/controllers/";
    private $controller_path_folder;
    private $namespace = "client";
    /**
     * @return bool
     */
    private function getIsAjaxRequest(){
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }



    /**
     * 
     */
    public function start()
    {
        // catch AJAX request
        if ($this->getIsAjaxRequest()) {
            
        }
        session_start();
        $this->dispatch();
     }

   
    
    /**
     * @param $file
     * @param $controller
     * @param $action
     * @param $args
     */
    private function getDirections(&$file, &$controller, &$action, &$args) {

        $route = (empty($_SERVER['REQUEST_URI'])) ? '' : $_SERVER['REQUEST_URI'];
        unset($_SERVER['REQUEST_URI']);
        $route = trim($route, '/\\');
        $controller_path = $this->path;
        if (empty($route)) {
        /* ******************* Default directions ******** */
            $controller = 'main';
            $action = 'index';
            $controller_path = $this->controller_path_folder =  "application/controllers/$this->namespace/";
            $file = $controller_path.$controller.".php";
        }
        else
        {
            $parts = explode('/', $route);
            /* ************** namespace ********** */
            if($parts[0] == "admin") {
                $this->namespace =  "admin";
                array_shift($parts);
            }
            /* ***************** folders & subfolders ******* */
            $fullpath = $this->controller_path_folder = $controller_path . $this->namespace;
            foreach ($parts as $part) {
                $fullpath .= DS . $part;
                if (is_dir($fullpath)) {
                    array_shift($parts);
                    continue;
                }
                if (is_file($fullpath . '.php')) {
                    array_shift($parts);
                    $file = "$fullpath.php";
                    break;
                }
            }
            /* *************** Controller, Action, Params ******** */
            if(!isset($part))
                $part = "main";
            $controller = $part;
            if(!$file)
                $file = $fullpath."/$part.php";
            $action = array_shift($parts);
            if(!$action)
                $action = 'index';
            else
                $action = "$action";
            $args = $parts;
        }
    }

    /**
     *
     */
    public function dispatch(){
        // диспетчер получает файл совпадающий с названием контроллера, экшн и аргументы 
        $this->getDirections($file, $controller, $action, $args);
        /* ************* include Controller - Model  */
        if (is_readable($file) == false) {
               $this->ErrorPage404($file);
            return;
        }
        // подключили контроллер
        include ($file);
        $model = str_replace("controller", "model", $file);
        // Model additional 
        if(is_readable($model)){
            // подключаем модель
            include($model);
        } 
        /* ****** получаем класс ** */
        $controller = ucfirst($controller);
        $class = 'Controllers\\'.ucfirst($this->namespace).'\\' . $controller;
        // создаем экземпляр
        $controller = new $class($this->controller_path_folder);
        if (is_callable(array($controller, $action)) == false) {
             $this->ErrorPage404($file);
            return;
        }
        // вызываем экшн
        $controller->$action($args);
    }

    /**
     *
     */
    public function ErrorPage404($file)
    {
      
        $class = 'Controllers\\'.ucfirst($this->namespace).'\nf_404';
        $controller = new $class($this->controller_path_folder);
        $controller->index($file);
        
    }
}