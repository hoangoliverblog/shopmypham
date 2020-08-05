<?php 
/**
 * 
 */
class Homemodel extends DB
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getalllistproduct(){

		$mang = array();

		$sql = "SELECT * FROM tbl_product WHERE 1";
		
		$query = mysqli_query($this->con,$sql);

		$num = mysqli_num_rows($query);

		if ($num) {
			
			while ($row = mysqli_fetch_assoc($query)) {
				
				$mang[] = $row;
			}
		}
		return json_encode($mang);
		
	}

	public function getbanner(){

		$sql = "SELECT * FROM `tbl_banner` LIMIT 1";
		
		$query = mysqli_query($this->con,$sql);

		$num = mysqli_num_rows($query);

		if ($num) {
			
			while ($row = mysqli_fetch_assoc($query)) {
				
				$banner = $row['image_banner'];
			}
		}
		return json_encode($banner);
		
	}

	public function getnewproduct($trang){

		
		 $numberpr = 4 ;

		 $value = (int)$trang ;

		 if ($value <= 1) {

			$tmp = 1 ;

		}else
		{
			$tmp = $value;
		};

		$number_onepage = ($tmp-1)*$numberpr;
		
		$sql = "SELECT * FROM `tbl_newpr` order by id_newpr desc LIMIT $number_onepage,$numberpr";
		//order by id_newpr desc LIMIT $number_onepage,$numberpr		
		$query = mysqli_query($this->con,$sql);

		$num = mysqli_num_rows($query);

		if ($num) {
			
			while ($row = mysqli_fetch_assoc($query)) {
				
				$mang[] = $row;
			}
		}
		return json_encode($mang);
		
	}
}
 ?>