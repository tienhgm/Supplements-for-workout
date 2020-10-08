<?php 
  	//load file MonHocModel.php vao day
    include "Models/MonHocModel.php";
  	class MonHocController extends MonHocModel{
  		//ham tao
  		public function danhSach(){
  			//goi ham danhSachMonHoc trong class DuLieuMonHoc de lay ket qua tra ve
  			$monhoc = $this->danhSachMonHoc();
  			//load view
  			include "Views/MonHoc.php";
  		}
  	}  	
   ?>