<?php 
/**
 * 
 */
class adminmodel extends DB
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function getuser($username,$userpass){

		$result = false ;

		$sql = "SELECT * FROM `tbl_user` WHERE account_user = '$username' AND role = '1' AND status = 'true'";

		$query = mysqli_query($this->con,$sql);

		$num = mysqli_num_rows($query);

		if ($query) {

			while($row = mysqli_fetch_assoc($query)){

			$hash = $row['pass_user'];	

		};
	
		}

		if (isset($hash)) {
			
			if (password_verify($userpass, $hash)) {
		    $result = true ;
			}	
		}
		

		return json_encode($result) ;

	}

	public function getleveladmin($username){

		$sql = "SELECT * FROM `tbl_user` WHERE account_user = '$username' LIMIT 1";

		$query = mysqli_query($this->con,$sql);

		$num = mysqli_num_rows($query);

		if ($num>=1) {
			
			while ($row = mysqli_fetch_assoc($query)) {
					
					$level = $row['role'] ;
				};	
		}

		return json_encode($level);
	}

	public function getnewproduct(){

		$mang = array();

		$sql = "SELECT * FROM `tbl_newpr` WHERE 1";
		
		$query = mysqli_query($this->con,$sql);

		$num = mysqli_num_rows($query);

		if ($num) {
			
			while ($row = mysqli_fetch_assoc($query)) {
				
				$mang[] = $row;
			}
		}
		return json_encode($mang);
		
	}

	public function updateproduct($id,$name,$priceold,$price,$sale,$image){

		$sql = "UPDATE `tbl_newpr` SET id_newpr = '$id', name_newpr = '$name',priceold_newpr ='$priceold',price_newpr='$price',sale_newpr='$sale',image_newpr='$image' WHERE id_newpr='$id'";
		
		$query = mysqli_query($this->con,$sql);

		$result = false ;

		if ($query) {

			$result = true;
		}

		return json_encode($result);

	}

	public function deleteproduct($id){

		$sql = "DELETE FROM `tbl_newpr` WHERE id_newpr = $id";
		
		$query = mysqli_query($this->con,$sql);

		$result = false ;

		if ($query) {

			$result = true;
		}

		return json_encode($result);

	}

	public function addproduct($name_product,$priceold_product,$price_product,$sale_product,$image_product){

		$sql = "INSERT INTO `tbl_newpr`(`id_newpr`, `name_newpr`, `priceold_newpr`, `price_newpr`, `sale_newpr`, `image_newpr`) VALUES (null,'$name_product','$priceold_product','$price_product','$sale_product','$image_product')";
		
		$query = mysqli_query($this->con,$sql);

		$result = false ;

		if ($query) {

			$result = true;
		}

		return json_encode($result);

	}

	public function getdatatoid($value)
	{
		$sql = "SELECT * FROM `tbl_newpr` WHERE id_newpr = '$value'";

		$query = mysqli_query($this->con,$sql);

		$num = mysqli_num_rows($query);

		if ($num !=0) {
			
			while ($row = mysqli_fetch_assoc($query)) {
				
				$mang[] = $row;
			}
		}

		return json_encode($mang);
	}

	public function getnumberproduct(){

		$sql = "SELECT * FROM `tbl_newpr` WHERE 1";
		
		$query = mysqli_query($this->con,$sql);

		$num = mysqli_num_rows($query);

		return json_encode($num);
	}
}
 ?>