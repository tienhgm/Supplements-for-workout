<?php 
  	//load file LopModel.php vao day
    include "Models/LopModel.php";
  	class LopController extends LopModel{
  		//ham tao
  		public function danhSach(){
  			//goi ham danhSachLop trong class DuLieuLop de lay ket qua tra ve
  			$lop = $this->danhSachLop();
  			//load view
  			include "Views/Lop.php";
  		}
  	}
   ?>