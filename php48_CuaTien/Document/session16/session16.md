- Mo hinh MVC bao gom cac thanh phan
	- Model: phan gan nhat voi database, chua cac ham dung de thao tac csdl
	- Controller: la phan dieu khien, lay du lieu tu model va truyen ra view
	- View: hien thi du lieu truyen ra tu controller
- Trong mo hinh MVC se co cu phap tong quat sau
//---
class Model{
	chua cac tham thao tac csdl
}
class Controller extends Model{
	goi ham trong class Model de lay ket qua tra ve, gan vao mot bien
	goi view de hien thi du lieu
}
View la file html + php
//---
goi MVC chi can goi file controller la MVC se hoat dong