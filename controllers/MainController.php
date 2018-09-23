<?php

class MainController
{

    //main action for user show tasks with needed filter
    public function actionIndex()
    {
        $variable = Model::getItems();

        require_once(ROOT . '/views/main/index.php');
        return true;
    }
}