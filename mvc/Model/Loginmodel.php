<?php 

/**
 * 
 */
class Loginmodel extends DB
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getuser($username,$userpass){

		$result = false ;

		$sql = "SELECT * FROM `tbl_user` WHERE account_user = '$username'";

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
	public function createuser($username,$useracount,$userpass,$useremail,$useraddress,$userphone){

		$sql = "INSERT INTO `tbl_user`(`id_user`, `name_user`, `account_user`, `pass_user`, `email_user`, `adress_user`, `phone_user`) VALUES (null,'$username','$useracount','$userpass','$useremail','$useraddress','$userphone')";

		$query = mysqli_query($this->con,$sql);

		$result = false ;

		if ($query) {
			
			$result = true ;
		}

		return json_encode($result);

	}

	
}
 ?>