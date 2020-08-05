
   <!--++++++++++++++++++Sản Phẩm+++++++++++++++++++++++-->

   <div class="sanpham">
	   <div class="container-fluid in-sanpham">
		   	<div class="row">
		   		
                <?php

                    $newarr = json_decode($data['listsp']);

                    $response = new stdClass;

                    $response->id_product = $newarr;

                    foreach($response->id_product as $product)
                    {

                     ?>

                                <div class="col-md-3 in-sanpham-top">
                                    <div class="wp-icon">
                                        <div class="icon-sanpham">
                                            <span>
                                                <i class="far fa-gem"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div  class="txt-sanpham">
                                        <h6><?php echo $product->title_product ?></h6>
                                        <p><?php echo $product->description ?></p>
                                    </div>
                                </div>
                <?php 

                    }

                 ?>
		   	</div>
	   </div>	
   </div>
   <!--++++++++++++++++++End_Sản_Phẩm+++++++++++++++++++++++-->


    <!--++++++++++++++++++Sản phẩm mới+++++++++++++++++++++++-->
 
    <div class="new-sanpham">
    	<div class="container-fluid New-sanpham">
    		<div class="row">
    			<div class="col-md-12 NEw-sanpham">
    				<span>
    					<i class="fas fa-lightbulb"></i>
    				</span>
    				<label>
    					Đảm bảo hàng thật chính hãng
    				</label>
    				<button class="btn btn-primary" >
    					Đăng kí ngay
    				</button>
    			</div>
    			<div class="col-md-12 NEW-sanpham">
    				<h3>SẢN PHẨM MỚI</h3>
    			</div>
    			<!--++++++++Thẻ hàng++++++-->
    			 
                    <?php 

                        $arr = json_decode($data['newproduct']);

                        $result = new stdClass ;

                        $result->id_newpr = $arr ;

                        foreach ($result->id_newpr as $pr)
                         {
                        ?>    
                          
                            <div class="col-md-3 NEW-Sanpham">
                                    <div class="NEW-Sanpham-img">
                                        <img src=<?php echo './public/img/'.$pr->image_newpr; ?>>
                                        <!-- "./public/img/sanpham1.PNG" -->
                                    </div>
                                    <div class="NEW-Sanpham-body">
                                        <p><?php echo $pr->name_newpr ?></p>
                                        <p class="price"><del><?php echo $pr->priceold_newpr ?>đ</del><?php echo $pr->price_newpr ?>đ</p>
                                    </div>
                                    <div class="NEW-Sanpham-btn">
                                        <button class="btn btn-primary"><span><i class="fas fa-cart-arrow-down"></i></span>Mua Hàng</button>
                                    </div>
                                    <?php 
                                        if ($pr->sale_newpr != '') {
                                            echo '<div class="NEW-Sanpham-sale">
                                                    <label>'.$pr->sale_newpr.'%</label>
                                                </div>';        
                                        }
                                     ?>
                                    <div class="NEW-Sanpham-time" >
                                        <div id="time"></div>
                                        <div id="txt-time"></div>
                                    </div>
                                </div>
                     
                     <?php 
                        }
                    ?>
    
    			<!--++++++++Thẻ hàng++++++-->
    		</div>
             <div style="margin-top: 1rem;">
                 <?php 

                $btn = (int)$data['numberbtn'];

                $i = 1 ;
                for ($i=1; $i <= $btn ; $i++) { 
                    echo '<a style="padding: 0.3rem 0.7rem;margin-right:0.3rem;color: white;background-color: #ed145b" href="./Home/load/'.$i.'">'.$i.'</a>';
                }

             ?> 
             </div>
    	</div>
    </div>
    <!--++++++++++++++++++End_Sản phẩm mới+++++++++++++++++++++++-->


    <!--++++++++++++++++++Sản phẩm nổi bật+++++++++++++++++++++++-->

   <!--  <div class="sanpham_noibat">
        <div class="container-fluid Sanpham_noibat">
            <div class="row">
   
                <div class="col-md-12 sp-title">
                    <h3>Ngành hàng nổi bật</h3>
                </div>
          
                <div class="col-md-2 SAnpham_noibat">
                    <div class="sp-anh">
                        <img src="./public/img/SPNP.PNG" alt="photo">
                    </div>
                    <div>
                        <h6>Dưỡng da-Skin Care</h6>
                    </div>
                </div>
 
                <div class="col-md-2 SAnpham_noibat">
                    <div class="sp-anh">
                        <img src="./public/img/SPNP.PNG" alt="photo">
                    </div>
                    <div>
                        <h6>Dưỡng da-Skin Care</h6>
                    </div>
                </div>
                <div class="col-md-2 SAnpham_noibat">
                    <div class="sp-anh">
                        <img src="./public/img/SPNP.PNG" alt="photo">
                    </div>
                    <div>
                        <h6>Dưỡng da-Skin Care</h6>
                    </div>
                </div>
                <div class="col-md-2 SAnpham_noibat">
                    <div class="sp-anh">
                        <img src="./public/img/SPNP.PNG" alt="photo">
                    </div>
                    <div>
                        <h6>Dưỡng da-Skin Care</h6>
                    </div>
                </div>
                <div class="col-md-2 SAnpham_noibat">
                    <div class="sp-anh">
                        <img src="./public/img/SPNP.PNG" alt="photo">
                    </div>
                    <div>
                        <h6>Dưỡng da-Skin Care</h6>
                    </div>
                </div>
                <div class="col-md-2 SAnpham_noibat">
                    <div class="sp-anh">
                        <img src="./public/img/SPNP.PNG" alt="photo">
                    </div>
                    <div>
                        <h6>Dưỡng da-Skin Care</h6>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--++++++++++++++++++End_Sản phẩm nổi bật+++++++++++++++++++++++-->




	<!--++++++++++++++++++Sản phẩm Bán chạy nhất+++++++++++++++++++++++-->
     
<!--     <div class="new-sanpham">
    	<div class="container-fluid New-sanpham">
    		<div class="row">
    			<div class="col-md-12 NEw-sanpham">
    				<button class="btn btn-primary">
    					Xem thêm
    				</button>
    			</div>
    			<div class="col-md-12 NEW-sanpham">
    				
    				<h3><span><i class="far fa-star"></i></span>SẢN PHẨM BÁN CHẠY NHẤT<span><i class="far fa-star"></i></span></h3>

    			</div>
    		
    			<div class="col-md-3 NEW-Sanpham">
    				<div class="NEW-Sanpham-img">
    					<img src="./public/img/sanpham1.PNG">
    				</div>
    				<div class="NEW-Sanpham-body">
    					<p>Thẻ Đeo Di Động Ari Doctor Diệt vi khuẩn và Virus</p>
    					<p class="price"><del>950.000đ</del>499.000đ</p>
    				</div>
    				<div class="NEW-Sanpham-btn">
    					<button class="btn btn-primary"><span><i class="fas fa-cart-arrow-down"></i></span>Mua Hàng</button>
    				</div>
    				<div class="NEW-Sanpham-sale">
    					<label>-47%</label>
    				</div>
    				<div class="NEW-Sanpham-time" >
    					<div id="time"></div>
    					<div id="txt-time"></div>
    				</div>
    			</div>
  
    			<div class="col-md-3 NEW-Sanpham">
    				<div class="NEW-Sanpham-img">
    					<img src="./public/img/sanpham1.PNG">
    				</div>
    				<div class="NEW-Sanpham-body">
    					<p>Thẻ Đeo Di Động Ari Doctor Diệt vi khuẩn và Virus</p>
    					<p class="price"><del>950.000đ</del>499.000đ</p>
    				</div>
    				<div class="NEW-Sanpham-btn">
    					<button class="btn btn-primary"><span><i class="fas fa-cart-arrow-down"></i></span>Mua Hàng</button>
    				</div>
    				<div class="NEW-Sanpham-sale">
    					<label>-47%</label>
    				</div>
    				<div class="NEW-Sanpham-time" >
    					<div id="time"></div>
    					<div id="txt-time"></div>
    				</div>
    			</div>
    			<div class="col-md-3 NEW-Sanpham">
    				<div class="NEW-Sanpham-img">
    					<img src="./public/img/sanpham1.PNG">
    				</div>
    				<div class="NEW-Sanpham-body">
    					<p>Thẻ Đeo Di Động Ari Doctor Diệt vi khuẩn và Virus</p>
    					<p class="price"><del>950.000đ</del>499.000đ</p>
    				</div>
    				<div class="NEW-Sanpham-btn">
    					<button class="btn btn-primary"><span><i class="fas fa-cart-arrow-down"></i></span>Mua Hàng</button>
    				</div>
    				<div class="NEW-Sanpham-sale">
    					<label>-47%</label>
    				</div>
    				<div class="NEW-Sanpham-time" >
    					<div id="time"></div>
    					<div id="txt-time"></div>
    				</div>
    			</div>
    			<div class="col-md-3 NEW-Sanpham">
    				<div class="NEW-Sanpham-img">
    					<img src="./public/img/sanpham1.PNG">
    				</div>
    				<div class="NEW-Sanpham-body">
    					<p>Thẻ Đeo Di Động Ari Doctor Diệt vi khuẩn và Virus</p>
    					<p class="price"><del>950.000đ</del>499.000đ</p>
    				</div>
    				<div class="NEW-Sanpham-btn">
    					<button class="btn btn-primary"><span><i class="fas fa-cart-arrow-down"></i></span>Mua Hàng</button>
    				</div>
    				<div class="NEW-Sanpham-sale">
    					<label>-47%</label>
    				</div>
    				<div class="NEW-Sanpham-time" >
    					<div id="time"></div>
    					<div id="txt-time"></div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div> -->

    <!--++++++++++++++++++End_Sản phẩm bán chạy nhất+++++++++++++++++++++++-->




   <!--++++++++++++++++++Bộ sản phẩm+++++++++++++++++++++++-->
     
 <!--    <div class="new-sanpham">
    	<div class="container-fluid New-sanpham">
    		<div class="row">
    			<div class="col-md-12 NEw-sanpham">
    				<button class="btn btn-primary">
    					Xem thêm
    				</button>
    			</div>
    			<div class="col-md-12 NEW-sanpham">
    				<h3>Bộ sản phẩm</h3>
    			</div>
    	
    			<div class="col-md-3 NEW-Sanpham">
    				<div class="NEW-Sanpham-img">
    					<img src="./public/img/sanpham1.PNG">
    				</div>
    				<div class="NEW-Sanpham-body">
    					<p>Thẻ Đeo Di Động Ari Doctor Diệt vi khuẩn và Virus</p>
    					<p class="price"><del>950.000đ</del>499.000đ</p>
    				</div>
    				<div class="NEW-Sanpham-btn">
    					<button class="btn btn-primary"><span><i class="fas fa-cart-arrow-down"></i></span>Mua Hàng</button>
    				</div>
    				<div class="NEW-Sanpham-sale">
    					<label>-47%</label>
    				</div>
    				<div class="NEW-Sanpham-time" >
    					<div id="time"></div>
    					<div id="txt-time"></div>
    				</div>
    			</div>
    		
    			<div class="col-md-3 NEW-Sanpham">
    				<div class="NEW-Sanpham-img">
    					<img src="./public/img/sanpham1.PNG">
    				</div>
    				<div class="NEW-Sanpham-body">
    					<p>Thẻ Đeo Di Động Ari Doctor Diệt vi khuẩn và Virus</p>
    					<p class="price"><del>950.000đ</del>499.000đ</p>
    				</div>
    				<div class="NEW-Sanpham-btn">
    					<button class="btn btn-primary"><span><i class="fas fa-cart-arrow-down"></i></span>Mua Hàng</button>
    				</div>
    				<div class="NEW-Sanpham-sale">
    					<label>-47%</label>
    				</div>
    				<div class="NEW-Sanpham-time" >
    					<div id="time"></div>
    					<div id="txt-time"></div>
    				</div>
    			</div>
    			<div class="col-md-3 NEW-Sanpham">
    				<div class="NEW-Sanpham-img">
    					<img src="./public/img/sanpham1.PNG">
    				</div>
    				<div class="NEW-Sanpham-body">
    					<p>Thẻ Đeo Di Động Ari Doctor Diệt vi khuẩn và Virus</p>
    					<p class="price"><del>950.000đ</del>499.000đ</p>
    				</div>
    				<div class="NEW-Sanpham-btn">
    					<button class="btn btn-primary"><span><i class="fas fa-cart-arrow-down"></i></span>Mua Hàng</button>
    				</div>
    				<div class="NEW-Sanpham-sale">
    					<label>-47%</label>
    				</div>
    				<div class="NEW-Sanpham-time" >
    					<div id="time"></div>
    					<div id="txt-time"></div>
    				</div>
    			</div>
    			<div class="col-md-3 NEW-Sanpham">
    				<div class="NEW-Sanpham-img">
    					<img src="./public/img/sanpham1.PNG">
    				</div>
    				<div class="NEW-Sanpham-body">
    					<p>Thẻ Đeo Di Động Ari Doctor Diệt vi khuẩn và Virus</p>
    					<p class="price"><del>950.000đ</del>499.000đ</p>
    				</div>
    				<div class="NEW-Sanpham-btn">
    					<button class="btn btn-primary"><span><i class="fas fa-cart-arrow-down"></i></span>Mua Hàng</button>
    				</div>
    				<div class="NEW-Sanpham-sale">
    					<label>-47%</label>
    				</div>
    				<div class="NEW-Sanpham-time" >
    					<div id="time"></div>
    					<div id="txt-time"></div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
     -->
    <!--++++++++++++++++++End_Bộ sản phẩm+++++++++++++++++++++++-->





	<!--++++++++++++++++++Sản phẩm Bán chạy nhất+++++++++++++++++++++++-->
     
   <!--  <div class="bi-quyet">
    	<div class="container-fluid Bi-quyet">
    		<div class="row">
    			<div class="col-md-12 BI-quyet">
    				<h3><span></span>Bí Quyết Làm Đẹp</h3>
    			</div>
    		
    			<div class="col-md-3 BI-Quyet">
    				<div class="BI-Quyet-img">
    					<img src="./public/img/sanpham2.PNG">
    				</div>
    				<div class="BI-Quyet-body">
    					<p class="ten-sp">Thuyết Phục Như Mặt Nạ Lime Pink Recovery Mask Moist Solution, Thiết Kế Ôm Khít Mặt, Vượt Trội Với Chức Năng Dưỡng Ẩm, Làm Sáng Da</p>
    					<p>Nằm trong dòng mặt nạ Pink Recovery Mask của thương hiệu mỹ phẩm Limecosmetic Hàn Quốc, Mặt Nạ Lime Pink Recovery Mask Moist Solution nổi bật với hiệu...</p>
    				</div>
    				<div class="BI-Quyet-btn">
    					<a class="">Xem thêm <span><i class="fas fa-angle-right"></i></span></a>
    				</div>
    			</div>
    		
    			<div class="col-md-3 BI-Quyet">
    				<div class="BI-Quyet-img">
    					<img src="./public/img/sanpham2.PNG">
    				</div>
    				<div class="BI-Quyet-body">
    					<p class="ten-sp">Thuyết Phục Như Mặt Nạ Lime Pink Recovery Mask Moist Solution, Thiết Kế Ôm Khít Mặt, Vượt Trội Với Chức Năng Dưỡng Ẩm, Làm Sáng Da</p>
    					<p>Nằm trong dòng mặt nạ Pink Recovery Mask của thương hiệu mỹ phẩm Limecosmetic Hàn Quốc, Mặt Nạ Lime Pink Recovery Mask Moist Solution nổi bật với hiệu...</p>
    				</div>
    				<div class="BI-Quyet-btn">
    					<a class="">Xem thêm <span><i class="fas fa-angle-right"></i></span></a>
    				</div>
    			</div>
    			<div class="col-md-3 BI-Quyet">
    				<div class="BI-Quyet-img">
    					<img src="./public/img/sanpham2.PNG">
    				</div>
    				<div class="BI-Quyet-body">
    					<p class="ten-sp">Thuyết Phục Như Mặt Nạ Lime Pink Recovery Mask Moist Solution, Thiết Kế Ôm Khít Mặt, Vượt Trội Với Chức Năng Dưỡng Ẩm, Làm Sáng Da</p>
    					<p>Nằm trong dòng mặt nạ Pink Recovery Mask của thương hiệu mỹ phẩm Limecosmetic Hàn Quốc, Mặt Nạ Lime Pink Recovery Mask Moist Solution nổi bật với hiệu...</p>
    				</div>
    				<div class="BI-Quyet-btn">
    					<a class="">Xem thêm <span><i class="fas fa-angle-right"></i></span></a>
    				</div>
    			</div>
    			<div class="col-md-3 BI-Quyet">
    				<div class="BI-Quyet-img">
    					<img src="./public/img/sanpham2.PNG">
    				</div>
    				<div class="BI-Quyet-body">
    					<p class="ten-sp">Thuyết Phục Như Mặt Nạ Lime Pink Recovery Mask Moist Solution, Thiết Kế Ôm Khít Mặt, Vượt Trội Với Chức Năng Dưỡng Ẩm, Làm Sáng Da</p>
    					<p>Nằm trong dòng mặt nạ Pink Recovery Mask của thương hiệu mỹ phẩm Limecosmetic Hàn Quốc, Mặt Nạ Lime Pink Recovery Mask Moist Solution nổi bật với hiệu...</p>
    				</div>
    				<div class="BI-Quyet-btn">
    					<a class="">Xem thêm <span><i class="fas fa-angle-right"></i></span></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div> -->

    <!--++++++++++++++++++End_Sản phẩm bán chạy nhất+++++++++++++++++++++++-->

