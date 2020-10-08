<?php 
	class ParametersModel{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotal();
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			$query = $conn->query("select * from parameters order by id desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from parameters order by id desc");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from parameters where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//update ban ghi
		public function modelUpdate($id){
			//---
			$name = $_POST["name"];		
			//---
			$conn = Connection::getInstance();
			//update mail,name
			$conn->query("update parameters set name='$name' where id=$id");
		}
		public function modelCreate(){
			//---
			$name = $_POST["name"];
			//---
			$conn = Connection::getInstance();
			$conn->query("insert into parameters set name='$name'");
		}
		public function modelDelete($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("delete from parameters where id = $id");
		}
		//lay cac danh muc con
		public function modelGetSubParameters($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from parameters where parent_id = $id");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//---
		}
		//lay cac danh muc cha
		public function modelGetParameters($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from parameters where id <> $id order by id desc");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//---
		}
	}
 ?>