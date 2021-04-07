<?php

class Form {

    public static function addData($fio, $loc, $phone, $email) {
        
        $db = Db::getConnection();
         
        $sql = 'INSERT INTO data (fio, location, phone, email) '
                . 'VALUES (:fio, :location, :phone, :email)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':fio', $fio, PDO::PARAM_STR);
        $result->bindParam(':location', $loc, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getData() {

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM data');

        $i = 0;
        while ($row = $result->fetch()) {
            $dataList[$i]['fio'] = $row['fio'];
            $dataList[$i]['loc'] = $row['location'];
            $dataList[$i]['phone'] = $row['phone'];
            $dataList[$i]['email'] = $row['email'];
            $i++;
        }

        return $dataList;
    }
    
    
}
