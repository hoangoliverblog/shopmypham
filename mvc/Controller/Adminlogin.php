<?php 

/**
 * 
 */
class Adminlogin extends Controller
{
	protected $adminmodel ;

	function __construct()
	{
		$this->adminmodel = $this->model('adminmodel');
	}

	public function load(){

		$this->view('adminlogin',[
			'page'=>'adminview'
		]);
	}

	public function checklogin(){

		if ($_SERVER['REQUEST_METHOD']==='POST') {

			if (isset($_POST['btnlogin'])) {
				
				$username = $this->validatedata($_POST['acount']);

				$userpass = $this->validatedata($_POST['password']);

				//$userpass = password_hash($userpassold,PASSWORD_DEFAULT);

				$kq = $this->adminmodel->getuser($username,$userpass);

				$adminlevel = json_decode($this->adminmodel->getleveladmin($username));

				if ( $kq == 'false') {

					header("Location: http://localhost/fameworkMVC/Adminlogin");
					die();

					}
					else
					{
						if ($adminlevel === '1') {

							$_SESSION['role'] = 'quantri';

						}

						$_SESSION['useracount'] = $username;


						header("Location: http://localhost/fameworkMVC/Adminprocess");
						die();	

					// $this->view('master1',[
					// 	'statuslogin'=>$_SESSION['useracount']
					// ]);
					}
				}
			}
		}
}
 ?>