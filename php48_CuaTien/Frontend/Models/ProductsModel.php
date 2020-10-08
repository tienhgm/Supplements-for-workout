<?php 
	class ProductsModel{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelRead($category_id,$recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotal($category_id);
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			//---
			$sqlOrderBy=" order by id desc ";
			$sort= isset($_GET["sort"]) ? $_GET["sort"] : "";
			switch($sort){
				case "priceAsc":
						$sqlOrderBy= " order by price asc ";
				break;
				case "priceDesc":
					$sqlOrderBy= " order by price desc ";
				break;
				case "nameAsc":
					$sqlOrderBy= " order by name asc ";
				break;
				case "nameDesc":
					$sqlOrderBy= " order by name desc ";
				break;
			}
			//---

			$query = $conn->query("select * from products where category_id=$category_id $sqlOrderBy limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal($category_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where category_id=$category_id order by id desc");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//lay mot ban ghi
		public function modelGetProduct($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//lay mot ban ghi
		public function modelGetCategory($category_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where id = $category_id");
			//tra ve mot ban ghi
			$result = $query->fetch();
			return $result->name;
			//---
		}
		//lay cac cau hinh san pham cua san pham co id truyen vao
		public function modelGetProductParameters($product_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select name from parameters where id in (select parameter_id from product_parameters where product_id = $product_id)");
			//tra ve nhieu ban ghi
			$result = $query->fetchAll();
			return $result;
		}
		//lay tca ban ghi
		public function modelGetAllProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products");
			$result = $query->fetchAll();
			return $result;
		}
		//so vote 1 star
		public function star1($product_id){
			$conn= Connection::getInstance();
			$query= $conn->query("select id from rating where product_id=$product_id and star = 1");
			return $query->rowCount();
		}
		//so vote 2 star
		public function star2($product_id){
			$conn= Connection::getInstance();
			$query= $conn->query("select id from rating where product_id=$product_id and star = 2");
			return $query->rowCount();
		}
		//so vote 3 star
		public function star3($product_id){
			$conn= Connection::getInstance();
			$query= $conn->query("select id from rating where product_id=$product_id and star = 3");
			return $query->rowCount();
		}
		//so vote 4 star
		public function star4($product_id){
			$conn= Connection::getInstance();
			$query= $conn->query("select id from rating where product_id=$product_id and star = 4");
			return $query->rowCount();
		}
		//so vote 5 star
		public function star5($product_id){
			$conn= Connection::getInstance();
			$query= $conn->query("select id from rating where product_id=$product_id and star = 5");
			return $query->rowCount();
		}
		//tim theo muc gia 
		public function modelReadSearchPrice($fromPrice,$toPrice,$recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotalSearchPrice($fromPrice,$toPrice);
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			//---
			//---

			$query = $conn->query("select * from products where price>= $fromPrice and price<= $toPrice limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotalSearchPrice($fromPrice, $toPrice){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where  price>= $fromPrice and price<= $toPrice order by id desc");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}

	}
 ?>