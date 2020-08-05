<?php 
	/**
	 * 
	 */
	class testmodel extends DB
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function showoutputpr(){

			$sql = "SELECT * FROM output_product where 1";

			$query = mysqli_query($this->con,$sql);

			$num = mysqli_num_rows($query);

			if ($num) {
				
				while ($row = mysqli_fetch_assoc($query)) {
					
					$mang[] = $row ;
				}
			}

			return json_encode($mang);
		}
		public function addoutpr($name_product,$soluong_product,$date_product){

		$sql = "INSERT INTO `output_product`(`id`, `name`, `soluong`, `date`) VALUES (null,'$name_product','$soluong_product','$date_product')";
		
		$query = mysqli_query($this->con,$sql);

		$result = false ;

		if ($query) {

			$result = true;
		}

		return json_encode($result);

		}
	}

 ?>