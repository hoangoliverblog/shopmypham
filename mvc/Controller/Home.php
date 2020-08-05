<?php 

/**
 * 
 */
class Home extends Controller
{
	public $Homemodel;

	public $adminmodel;


	function __construct()
	{
		$this->Homemodel = $this->model('Homemodel');

		$this->adminmodel = $this->model('adminmodel');
	}

	public function load($value=1){

		if (isset($_SESSION['useracount'])) {

			$setsession = $_SESSION['useracount'];

			}
			else
			{
				$setsession = '';
			};

			$trang = (int)$value;

		$arr = $this->Homemodel->getalllistproduct();

		$number = json_decode($this->adminmodel->getnumberproduct());

		$product_button = ceil($number/4);


		$this->view('master1',[
			
			'session'=> $setsession, 
			'listsp'=> $arr,
			'banner'=>$this->Homemodel->getbanner(), 
			'newproduct' => $this->Homemodel->getnewproduct($trang),
			'numberbtn'=>$product_button			
		]);
	}

}
 ?>