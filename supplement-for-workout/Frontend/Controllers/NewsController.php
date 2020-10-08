<?php 
	include "Models/NewsModel.php";
	class NewsController extends NewsModel{
		public function read(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 6;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$listRecord = $this->modelRead($recordPerPage);
			//load view
			include "Views/NewsView.php";
        }
        //chi tiet tin tuc
        public function detail(){
            $id= isset($_GET["id"]) ? $_GET["id"]:0;
            $record= $this->modelGetRecord($id);
            //load view
            include "Views/NewsDetailView.php";
        }
	}
 ?>