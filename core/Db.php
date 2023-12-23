<?php
/**
 * Yaf Framework
 * @version: 2.0 - (02/12/2011)
 * @requires
 * @author Andreas Bourakis (bourakis@gmail.com)
 * @Description: Methods for managing Mysql database.
 *
 * Licensed under MIT licence:
 *   http://www.opensource.org/licenses/mit-license.php
 * 
 * TODO:
 * 
 **/


class Db
{
    public static $conn;

    function init()
    {
        echo "TEST!!!";
    }


    static function connect($host, $username, $pass, $db)
    {
        self::$conn = mysqli_connect($host, $username, $pass, $db);
        //mysqli_select_db($db);
    }


    static function close()
    {
        mysqli_close(self::$conn);
    }


    static function getContent($c_id, $lang_id)
    {
        $result = mysqli_query("SELECT content
                               FROM ContentsLang
                               WHERE Languages_id=$lang_id AND Contents_id=$c_id ");

        $row = mysqli_fetch_array($result);

        return array('title'=>$row['title'],
                     'content'=>$row['content']);
    }


    static function getTagContent($tag_name, $content_id)
    {
        $sql1 = "
        SELECT title, content
        FROM Contents_lang
        WHERE Languages_id=$_SESSION[lang_id]
              AND Contents_id IN
                                 (SELECT id
                                 FROM Contents
                                 WHERE id=$content_id AND
                                       tag='$tag_name' AND
                                       active=1 AND
                                       del=0)
        ";

        $sql2 = "
        SELECT title, content
        FROM Contents_lang
        WHERE Languages_id=$_SESSION[lang_id]
              AND Contents_id IN
                                 (SELECT id
                                 FROM Contents
                                 WHERE tag='$tag_name' AND
                                       active=1 AND
                                       default_val=1 AND
                                       del=0)
        ";



        if(is_null($content_id) || $content_id == "")
            $sql = $sql2;
        else
            $sql = $sql1;

        $result = mysqli_query($sql);
        $row = mysqli_fetch_array($result);

        //return $row['title'].",".$row['content'];
        return $row['content'];
    }




    // Used by Class: Multilang
    static function getLangId($lang)
    {
        $result = mysqli_query("SELECT id
                               FROM Languages
                               WHERE language='$lang' OR prefix='$lang' ");

        $row = mysql_fetch_array($result);

        return $row['id'];
    }


    static function getLang($lang_id)
    {
        $result = mysqli_query("SELECT language, prefix
                               FROM Languages
                               WHERE id=$lang_id ");

        $row = mysqli_fetch_array($result);

        return $row['language'].",".$row['prefix'];
    }

}

?>
