<?php

/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 05.05.2016
 * Time: 12:46
 */

 // require_once __DIR__ . '/../models/news.php';
class NewsController
{
    public function actionAll() {

        $items = News::getAll();

        include __DIR__ . '/../view/news/all.php';
    }

    public function actionOne() {


        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../view/news/one.php';
    }

}