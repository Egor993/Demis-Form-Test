<?php

class NewsController {

    public function actionIndex()
    {
       	$news = News::getData();
    	require_once(ROOT . '/views/news/index.php');

        return true;
    }

}
