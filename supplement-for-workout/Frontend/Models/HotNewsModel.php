<?php
    class HotNewsModel{
        public function modelListHotNews(){
            $conn= Connection::getInstance();
            $result= $conn->query("select * from news where hot=1 order by id desc limit 0,4");
            return $result->fetchAll();
        }
    }
?>