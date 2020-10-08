<?php 
	class ProductParametersModel{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelRead($product_id,$recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotal($product_id);
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			$query = $conn->query("select * from product_parameters where product_id = $product_id order by id desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal($product_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from product_parameters where product_id=$product_id order by id desc");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//lay nhieu ban ghi
		public function modelGetParameters(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from parameters");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//---
		}
		//kiem tra xem parameter co ton tai trong san pham khong
		public function modelCheckProductParameters($product_id,$parameter_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from product_parameters where product_id = $product_id and parameter_id = $parameter_id");
			if($query->rowCount() > 0)
				return true;
			return false;
			//---
		}
		//update ban ghi
		public function modelUpdate($id){
			$conn = Connection::getInstance();
			$parameters = isset($_POST["parameters"]) ? $_POST["parameters"]:array();
			//---
			//xoa cac thanh phan cu
			$conn->query("delete from product_parameters where product_id = $id");
			//---
			foreach($parameters as $parameter_id){
				$conn->query("insert into product_parameters set parameter_id=$parameter_id, product_id=$id");
			}
		}	
		//lay ten san pham
		public function modelGetParameterName($parameter_id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select name from parameters where id = $parameter_id");
			//tra ve mot ban ghi
			$record = $query->fetch();
			return $record->name;
			//---
		}	
	}
 ?>