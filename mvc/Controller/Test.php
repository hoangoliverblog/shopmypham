<?php 

/**
 * 
 */
class Test extends Controller
{
	protected $test;
	
	function __construct()
	{
		$this->test = $this->model('testmodel');
	}

	public function load(){

		$arr = $this->test->showoutputpr();

		 $this->view('master2',[
		 	'page'=>'output_product', 
		 	'data'=>$arr
		 ]);
		 
		//echo $_SESSION['useracount'].'-'.$_SESSION['role'];
	}

	public function addoutput(){
		$this->view('master2',[
			'page'=>'addoutput'
		]);
	}

	public function	addoutpr(){

		if ($_SERVER['REQUEST_METHOD']==="POST") {

			if (isset($_POST['btnadd'])) {

				$name_product = $this->validatedata($_POST['name_product']) ;
				$soluong_product = $this->validatedata($_POST['soluong_product']) ;
				$date_product = $this->validatedata($_POST['date_product']);

				$end = json_decode($this->test->addoutpr($name_product,$soluong_product,$date_product));

				if ($end===true) {

					header("Location: http://localhost/fameworkMVC/Test");
					die();	
				}
			}
		}		
	}

	public function loginwithfacebook(){

		$this->view('master2',[
			'page'=>'loginwithfacebook'
		]);
	}

	public function loginfb(){
		
	}
}
 ?>