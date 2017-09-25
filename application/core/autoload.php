<?
function __autoload($class_name)
{
	define('APP_PATH', 'application');
    $path = strtolower(str_replace("\\", DS, $class_name));

    if (file_exists(PATH_SITE.DS.APP_PATH.DS.$path . ".php")) {
        include_once(PATH_SITE.DS.APP_PATH.DS.$path . ".php");
  	}else {
        header("HTTP/1.0 404 Not Found");
        echo "К сожалению такой страницы не существует sorry. " .PATH_SITE.DS.APP_PATH.DS.$path . ".php ";
        exit;
    }
}

?>