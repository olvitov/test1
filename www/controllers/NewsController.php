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
        $view = new View();
        $view->assign('items', $items);
        $view->display('news/all.php');

       // include __DIR__ . '/../view/news/all.php';
    }

    public function actionOne() {


        $id = $_GET['id'];
        $item = News::getOne($id);
               $view = new View();
        $view->assign('item', $item);
        $view->display('news/one.php');


       // include __DIR__ . '/../view/news/one.php';
    }

}