<?php 
	class HomeDiscountProductsModel{
		//lay 6 ban ghi san pham giam gia nhieu nhat
		public function modelDiscountProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by discount desc limit 0,6");
			return $query->fetchAll();
		}	
		
	}
 ?>