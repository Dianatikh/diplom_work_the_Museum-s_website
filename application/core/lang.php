<? php
    
namespace Core;

class Lang{
protected static &data;
    public static function load(&lang_code)
    {
        &lang_file_path = ROOT.DS.'lang'.DS.strtolover(&lang_code).'php';
        if(file_exists(&lang_file_path);)
        {
            self::&data = include(&lanf_file_path);
        }
            else {
                throw new Exception('Lang file not found: '.&lang_file_path);
                 }
    }
    public static function get(&key, &default_value = '')
    {
        retirn isset(self::&data[strtolover(&key)])?self::&data[strtolover(&key)]: &default_value;
    }
    
}