<?php 
	class AccountModel{
		//dang ky thanh vien
		public function modelRegister(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//---
			$conn = Connection::getInstance();
			$conn->query("insert into customers set name='$name',email='$email',address='$address',phone='$phone',password='$password'");
			//---
		}
		//login
		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id, name, email, password from customers where email='$email'");
			$result = $query->fetch();
			if(isset($result->email)){
				if($result->password == md5($password)){
					//dang nhap thanh cong
					$_SESSION["customerId"] = $result->id;
					$_SESSION["customerName"] = $result->name;
					return true;
				}
			}
			return false;
			//---
		}

        //lay mot ban ghi trong table customers
        public function modelGetCustomers($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from customers where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
        }
        public function modelGetInfo($id){
        	//------
        	$conn = Connection::getInstance();
        	$query= $conn->query("Select p.name, o.date, od.quantity, od.price, o.status FROM orders o join orderdetails od ON o.id=od.order_id JOIN products p ON p.id=od.product_id where o.customer_id =$id");
        	//tra ve mot ban ghi
        	return $query->fetchAll();
        	//-------
        }	
	}
 ?>