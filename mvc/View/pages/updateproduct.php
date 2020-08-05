<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style=" margin-top:2rem">
      <form action="./Adminprocess/updateproduct/<?php echo $data['id'] ?>" method="POST" enctype="multipart/form-data" style="margin: 3rem auto">
        <div class="form-row">
          <?php 

                    $newarr = $data['data'];

                    $std = new stdClass;

                    $std->id_newpr= $newarr;
                    foreach ($std->id_newpr as $value) {
                      
                    
           ?>
          <div class="form-group col-md-12">
            <label >Tên Sản phẩm</label>
            <input type="text" class="form-control" name="name_product" value="<?php echo $value->name_newpr ?>">
          </div>
           <div class="form-group col-md-12">
            <label >Giá cũ</label>
            <input type="text" class="form-control" name="priceold_product" value="<?php echo $value->priceold_newpr ?>">
          </div>
           <div class="form-group col-md-12">
            <label >Giá mới</label>
            <input type="text" class="form-control" name="price_product" value="<?php echo $value->price_newpr ?>">
          </div>
           <div class="form-group col-md-12">
            <label >Số lượng giảm giá</label>
            <input type="text" class="form-control" name="sale_product" value="<?php echo $value->sale_newpr ?>">
          </div>
           <div class="form-group col-md-12">
            <label>Ảnh sản phẩm</label>
            <input type="file" name="image_product" value="<?php echo $value->image_newpr ?>">
          </div>
          <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary" name="btnupdate">Update</button>
      </form>      
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
