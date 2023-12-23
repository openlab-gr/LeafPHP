<?php

class MainModel
{
    static function query1($params)
    {
        //print_r($params);

        $q = mysqli_query(Db::$conn, 'SELECT title, text FROM Posts') or die(mysql_error());

        $collector = array();

        while($obj = mysqli_fetch_object($q))
        {
            $collector[] = $obj;
        }

        return $collector;
    }

}

?>
