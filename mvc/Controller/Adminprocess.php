<?php 
/**
 * 
 */
class Adminprocess extends Controller
{
	 protected $adminmodel;


	function __construct()
	{
		$this->adminmodel = $this->model("adminmodel");


		if (!isset($_SESSION['useracount'])) {

			header("Location: http://localhost/fameworkMVC/Adminlogin");
			die();	

		}
		else
		{
			
			if (!isset($_SESSION['role']) || $_SESSION['role']=='thanhvien') {

				header("Location: http://localhost/fameworkMVC/Adminlogin");
				die();	
			}	
		}
		
	}

	public function load(){

		$this->view('Doashboarh',[
			'useradmin'=> $_SESSION['useracount']
		]);

	}

	public function resetproduct(){

		$listproduct = $this->adminmodel->getnewproduct();

		$this->view('Doashboarh',[
			'useradmin'=> $_SESSION['useracount'],
			'page'=>'resetproduct', 
			'newproduct'=>$listproduct
		]);
	}

	public function updateproduct($param){

		$id_product = $param ;

		if ($_SERVER['REQUEST_METHOD']==="POST") {

			if (isset($_POST['btnupdate'])) {

				$name_product = $this->validatedata($_POST['name_product']) ;
				$priceold_product = $this->validatedata($_POST['priceold_product']) ;
				$price_product = $this->validatedata($_POST['price_product']);
				$sale_product = $this->validatedata($_POST['sale_product']) ;
				//$image_product = $this->validatedata($_POST['image_product']) ;


				$fomat = array('jpg','jpeg','png','gif');
				$file_name = $_FILES['image_product']['name'];
				$file_size = $_FILES['image_product']['size'];
				$file_temp = $_FILES['image_product']['tmp_name'];

				$div = explode('.',$file_name);
				$file_text = strtolower(end($div));
				//$uni_image = substr(password_hash($file_text,PASSWORD_DEFAULT),0,15).'.'.$file_text;
				$uni_image = substr(md5(time()),0,10).'.'.$file_text;
				$upload = "./public/img/".$uni_image;

				// kiểm tra file_exits != $uni_image ==>, else erro
				move_uploaded_file($file_temp,$upload);
				

				$end = json_decode($this->adminmodel->updateproduct($id_product,$name_product,$priceold_product,$price_product,$sale_product,$uni_image));

				if ($end===true) {

					header("Location: http://localhost/fameworkMVC/Adminprocess/resetproduct");
					die();	
				}
			}
		}		

	}

	public function viewproduct($param)
	{
		$id = $param ;
		// hàm model getdatabase sp where id = $id ,
		// đổ dữ liệu ra view

		$getdatatoid = json_decode($this->adminmodel->getdatatoid($id));

		$this->view('Doashboarh',[
			'useradmin'=> $_SESSION['useracount'],
			'page'=>'updateproduct',
			'id'=>$id, 
			'data'=>$getdatatoid			

		]);
	}

	public function deleteproduct($param){

		$id = $param;

		$end = json_decode($this->adminmodel->deleteproduct($id));

		header("Location: http://localhost/fameworkMVC/Adminprocess/resetproduct");
		die();	
	}

	public function addprocess()
	{
		$this->view('Doashboarh',[
			'useradmin'=> $_SESSION['useracount'],
			'page'=>'addproduct'
		]);
	}

	public function addproduct()
	{
		if ($_SERVER['REQUEST_METHOD']==="POST") {

			if (isset($_POST['btnadd'])) {

				$name_product = $this->validatedata($_POST['name_product']) ;
				$priceold_product = $this->validatedata($_POST['priceold_product']) ;
				$price_product = $this->validatedata($_POST['price_product']);
				$sale_product = $this->validatedata($_POST['sale_product']) ;
				// $image_product = $this->validatedata($_POST['image_product']) ;
				
				$fomat = array('jpg','jpeg','png','gif');
				$file_name = $_FILES['image_product']['name'];
				$file_size = $_FILES['image_product']['size'];
				$file_temp = $_FILES['image_product']['tmp_name'];

				$div = explode('.',$file_name);
				$file_text = strtolower(end($div));
				//$uni_image = substr(password_hash($file_text,PASSWORD_DEFAULT),0,15).'.'.$file_text;
				$uni_image = substr(md5(time()),0,10).'.'.$file_text;
				$upload = "./public/img/".$uni_image;
				move_uploaded_file($file_temp,$upload);

				$end = json_decode($this->adminmodel->addproduct($name_product,$priceold_product,$price_product,$sale_product,$uni_image));

				if ($end===true) {

					header("Location: http://localhost/fameworkMVC/Adminprocess/resetproduct");
					die();	
				}
			}
		}		
	}
}

 ?>