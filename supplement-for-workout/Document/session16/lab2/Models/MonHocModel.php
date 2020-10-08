<?php 
 	class MonHocModel{
 		//ham lay danh sach cac mon hoc
 		public function danhSachMonHoc(){
 			//lay bien ket noi de thao tac csdl
 			$conn = Connection::getInstance();
 			//thuc hien cau lenh sql, tra ket qua ve mot bien
 			$query = $conn->query("select * from monhoc");
 			//lay tat ca cac ket qua tra ve
 			$result = $query->fetchAll();
 			//tra ve ket qua
 			return $result;
 		}
 	}
  ?>