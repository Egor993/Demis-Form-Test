<?php

class News {

    public static function getData() {

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM news');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['caption'] = $row['caption'];
            $newsList[$i]['text'] = $row['text'];
             $newsList[$i]['img'] = $row['img'];
            $i++;
        }

        return $newsList;
    }

        public static function getlast() {

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM news ORDER BY id DESC LIMIT 3');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['caption'] = $row['caption'];
            $newsList[$i]['text'] = $row['text'];
             $newsList[$i]['img'] = $row['img'];
            $i++;
        }

        return $newsList;
    }
    
    // INSERT INTO news (caption, text, img) VALUES ('Заголовок', 'Текст', '1.png')
}
