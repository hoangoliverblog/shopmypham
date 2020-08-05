<?php 
/**
 * 
 */
class Login extends Controller
{
	public $Loginmodel;

	function __construct()
	{
		$this->Loginmodel = $this->model('Loginmodel');

	}

	public function load(){

		$this->view('master2',[

			'page'=>'Login'			
		]);

		if (isset($_SESSION['useracount'])) {
			
			header("Location: http://localhost/fameworkMVC");
			die();	
		}

	}

	public function checklogin(){

		if ($_SERVER['REQUEST_METHOD']==='POST') {

			if (isset($_POST['btnlogin'])) {
				
				$username = $this->validatedata($_POST['username']);

				$userpass = $this->validatedata($_POST['userpass']);

				//$userpass = password_hash($userpassold,PASSWORD_DEFAULT);

				$kq = $this->Loginmodel->getuser($username,$userpass);

				if ( $kq == 'false') {

					header("Location: http://localhost/fameworkMVC/Login");
					die();

					}
					else
					{
						$_SESSION['role'] = 'thanhvien';

						$_SESSION['useracount'] = $username;

						header("Location: http://localhost/fameworkMVC");
						die();	

					// $this->view('master1',[
					// 	'statuslogin'=>$_SESSION['useracount']
					// ]);
					}
				}
			}
		}

		public function exitlogin(){

			unset($_SESSION['useracount']);

			header('Location: http://localhost/fameworkMVC/Login');

			die();
		}

		public function blockout(){

			if (isset($_SESSION['useracount'])) {

				header('Location: http://localhost/fameworkMVC');
				die();
			}else{
				header('Location: http://localhost/fameworkMVC/Login/');
				die();
			}
		}

		public function Resigter(){
			$this->view('master2',[
			'page'=>'Resigter'
		]);
		}

		public function createuser(){

		$username = $this->validatedata($_POST['name_user']);

		$useracount = $this->validatedata($_POST['acount_user']);

		$userpassold = $this->validatedata($_POST['pass_user']);
		$userpass = password_hash($userpassold,PASSWORD_DEFAULT);

		$useremail = $this->validatedata($_POST['email_user']);

		$useraddress = $this->validatedata($_POST['address_user']);

		$userphone = $this->validatedata($_POST['phone_user']);

		$kq = $this->Loginmodel->createuser($username,$useracount,$userpass,$useremail,$useraddress,$userphone);

		if ( $kq == 'true') {

					header("Location: http://localhost/fameworkMVC/Login");
					die();
					}
					else
					{
					header("Location: http://localhost/fameworkMVC/Resigter");
					die();	
					}

	}

	public function oldpassword(){
		$this->view('master2',[
			'page'=>'Oldpassword'
		]);
	}

}
 ?>