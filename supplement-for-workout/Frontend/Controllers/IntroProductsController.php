<?php 
	include "Models/IntroProductsModel.php";
	class IntroProductsController extends IntroProductsModel{
		public function read(){
			$dulieu= $this->modelListIntro();
			
            include "Views/GioiThieuSanPham.php";
        }

	}
 ?>