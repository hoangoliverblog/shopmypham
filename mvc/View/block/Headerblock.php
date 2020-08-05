	<!--++++++++++++++++++Header+++++++++++++++++++++++-->
	<div class="wapper">
		<div class="container-fluid header">
			<div class="row">
				<div class="col-md-6 left">
					<div class="row">
						<div class="col-md-6">
							<div class="logo">
								<a href="./Home">
									<img src="./public/img/logo.PNG" alt="photo">
								</a>
							</div>
						</div>
						<div class="col-md-6 input-seach">
							<div class="seach">
								<input type="text" name="txtseach" placeholder="     Seach">
								<span>
									<i class="fas fa-search"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 right">
					<div class="right-top">
						<ul>
							<li>
								<span><i class="fas fa-heart"></i></span>
								<a href="">Về Kosmebox</a>
							</li>
							<li>
								<span class="icon-color"><i class="fas fa-user"></i></span>
								<a href="./Login">Đăng nhập</a>
							</li>
							<li>
								<span class="icon-color"><i class="fas fa-sign-out-alt"></i></span>
								<a href="./Login/exitlogin">Đăng xuất</a>
							</li>
							<li>
								<span><i class="fas fa-dollar-sign"></i></span>
								<a href="" >Thanh toán</a>
							</li>
							<li>
								<span class="icon-color"><i class="fas fa-user"></i></span>
								<a href="./"><?php echo $data['session'] ?></a>
							</li>
						</ul>
					</div>
					<div class="right-bottom">
						<div class="icon-now">
							<span>
								<i class="fas fa-user"></i>
							</span>
							<label>Bí quyết <br> làm đẹp</label>
						</div>
						<div class="icon-now">
							<span>
								<i class="fas fa-user-plus"></i>
							</span>
							<label>Tuyển <br> CTV</label>
						</div>
						<div class="icon-now final">
							<span><i class="fas fa-cart-plus"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--++++++++++++++++++End-Header+++++++++++++++++++++++-->


	<!--++++++++++++++++++Menu+++++++++++++++++++++++-->
	<nav class="navbar navbar-expand-lg navbar-light">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
	        <span class="navbar-toggler-icon"></span>
	    </button>
	     <span class="icon-home"><i class="fas fa-home"></i></span>
	    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
	        <ul class="navbar-nav">
	            <li class="nav-item dropdown active">
	                <a class="nav-link active" href="#">Thương Hiệu</a>
	                <div class="dropdown-menu">
	                	<a href="#" class="dropdown-item">Link1</a>
	                	<a href="#" class="dropdown-item">Link1</a>
	                	<a href="#" class="dropdown-item">Link1</a>
	                </div>
	            </li>
	             <li class="nav-item dropdown active">
	                <a class="nav-link active" href="./my-pham-nhat.html">Mỹ Phẩm Nhật</a>
	                <div class="dropdown-menu">
	                	<a href="./my-pham-nhat.html" class="dropdown-item">Link1</a>
	                	<a href="./my-pham-nhat.html" class="dropdown-item">Link1</a>
	                	<a href="./my-pham-nhat.html" class="dropdown-item">Link1</a>
	                </div>
	            </li> <li class="nav-item dropdown active">
	                <a class="nav-link active" href="./public/layout/trangdiem.html">Trang Điểm</a>
	                <div class="dropdown-menu">
	                	<a href="#" class="dropdown-item">Link1</a>
	                	<a href="#" class="dropdown-item">Link1</a>
	                	<a href="#" class="dropdown-item">Link1</a>
	                </div>
	            </li> <li class="nav-item dropdown active">
	                <a class="nav-link active" href="./duong_da.html">Dưỡng Da</a>
	                <div class="dropdown-menu">
	                	<a href="#" class="dropdown-item">Link1</a>
	                	<a href="#" class="dropdown-item">Link1</a>
	                	<a href="#" class="dropdown-item">Link1</a>
	                </div>
	            </li> <li class="nav-item dropdown active">
	                <a class="nav-link active" href="./bo_san_pham.html">Bộ Sản Phẩm</a>
	                <div class="dropdown-menu">
	                	<a href="#" class="dropdown-item">Link1</a>
	                	<a href="#" class="dropdown-item">Link1</a>
	                	<a href="#" class="dropdown-item">Link1</a>
	                </div>
	            </li> <li class="nav-item dropdown active">
	                <a class="nav-link active" href="./nuoc_hoa.html">Nước Hoa</a>
	                <div class="dropdown-menu">
	                	<a href="#" class="dropdown-item">Link1</a>
	                	<a href="#" class="dropdown-item">Link1</a>
	                	<a href="#" class="dropdown-item">Link1</a>
	                </div>
	            </li>
	        </ul>
	    </div>
	</nav>
	<!--++++++++++++++++++End-Menu+++++++++++++++++++++++-->



   <!--++++++++++++++++++Banner+++++++++++++++++++++++-->
   <div class="banner">
	   	<div class="img-banner">
	   		<img src=
	   		<?php 
	   		$m = json_decode($data['banner']);
	   		echo './public/img/'.$m; 
	   		?>
	   		>
	   		<!-- ./public/img/banner.PNG -->
	   	</div>
   </div>
   <!--++++++++++++++++++End_Banner+++++++++++++++++++++++-->


