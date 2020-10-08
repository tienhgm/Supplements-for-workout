<?php 
	include "Models/MenuCategoryModel.php";
	class MenuCategoryController extends MenuCategoryModel{
		public function read(){
			//load view
			include "Views/MenuCategoryView.php";
		}
	}
 ?>