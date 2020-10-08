<?php 
	class IntroProductsModel{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelListIntro(){
			$conn= Connection::getInstance();
            $result= $conn->query("select * from intro_products");
            return $result->fetchAll();
		}
		//ham get id cua gioi thieu san pham

	}
 ?>