<?php

class Model
{
    //get all list
    public static function getItems()
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM tasks ORDER BY id';

        $variables = array();

        $result = $db->query($sql);

        $i = 0;

        while ($row = $result->fetch()) {
            $variables[$i]['id'] = $row['id'];
            $variables[$i]['user_name'] = $row['user_name'];
            $variables[$i]['email'] = $row['email'];
            $variables[$i]['description'] = $row['description'];
            $i++;
        }

        return $variables;
    }
}