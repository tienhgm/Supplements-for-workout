<?php 
 	class LopModel{
 		//ham lay danh sach cac lop
 		public function danhSachLop(){
 			//lay bien ket noi de thao tac csdl
 			$conn = Connection::getInstance();
 			//thuc hien cau lenh sql, tra ket qua ve mot bien
 			$query = $conn->query("select * from lop");
 			//lay tat ca cac ket qua tra ve
 			$result = $query->fetchAll();
 			//tra ve ket qua
 			return $result;
 		}
 	}
  ?>