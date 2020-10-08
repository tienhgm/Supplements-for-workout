<?php 
	class HomeHotProductsModel{
		//lay 6 ban ghi san pham noi bat
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id desc limit 0,6");
			return $query->fetchAll();
		}
	}
 ?>