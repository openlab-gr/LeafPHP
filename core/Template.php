<?php
/**
 * Template class file.
 * 
 * @author Andreas Bourakis <bourakis@gmail.com>
 * @contributors
 * @copyright openlab.gr
 * @link http://www.github.com/addboo/yafyaf
 * @license http://www.opensource.org/licenses/mit-license.php
 * @requires
 *
 * @version: 0.1
**/

class Template
{
    public static $template;
    public static $tag = array();
    
    
    public $css_stack = array();
    public $js_stack = array();

    
    static function set($template_name)
    {
        self::$template = $template_name;
    }
    
    
    static function bind($tag_name, $data)
    {
        if(is_array($data))
        {
            foreach($data as $name => $val)
            {
                self::$tag[$name] = $val;
            }
        }
        else
        {
            self::$tag[$tag_name] = $data;
        }
    }
    
    static function getData()
    {
        return self::$tag;
    }
    
    static function generate()
    {        
        require_once "protected/templates/".self::$template;   
    }
    
    
    
    //
    // The functions below are for future development.
    //
    function load_css($css_file)
    {
        self::$css_stack[] = $css_file;
    }

    function load_js($js_file)
    {
        self::$js_stack[] = $js_file;
    }
}

?>