<?php
    include "Models/HotNewsModel.php";
    class HotNewsController extends HotNewsModel{
        public function read(){
            $data= $this->modelListHotNews();
            include "Views/HotNewsView.php";
        }
    }
?>