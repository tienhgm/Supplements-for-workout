<?php 
	//class ket noi csdl
	class Connection{
		//ham ket noi csdl, tra ket qua ve bien ket noi
		//tu khoa static dat o day de co the dung: tenclass::tenham()
		public static function getInstance(){
			//thuc hien ket noi csdl
			$conn = new PDO("mysql:hostname=localhost;dbname=php48_database","root","");
			//lay du lieu theo kieu unicode (de hien thi tieng viet)
			$conn->exec("set names utf8");
			//set cach duyet ket qua tra ve
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			//tra ve bien ket noi
			return $conn;
		}
	}
 ?>
 <?php 
 	class DulieuMonHoc{
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
  <?php 
  	//class nay ke thua class DuLieuMonHoc de co the goi cac ham trong class do tu class nay
  	class DieuKhienMonHoc extends DulieuMonHoc{
  		//ham tao
  		public function __construct(){
  			//goi ham danhSachMonHoc trong class DuLieuMonHoc de lay ket qua tra ve
  			$monhoc = $this->danhSachMonHoc();
  			//load view
  			include "MonHoc.php";
  		}
  	}
  	//goi class DieuKhienMonHoc
  	new DieuKhienMonHoc();
   ?>