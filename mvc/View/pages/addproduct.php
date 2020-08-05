<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style=" margin-top:2rem">
      <form action="./Adminprocess/addproduct" method="POST" enctype="multipart/form-data" style="margin: 3rem auto">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label >Tên Sản phẩm</label>
            <input type="text" class="form-control" name="name_product">
          </div>
           <div class="form-group col-md-12">
            <label >Giá cũ</label>
            <input type="text" class="form-control" name="priceold_product">  
          </div>
           <div class="form-group col-md-12">
            <label >Giá mới</label>
            <input type="text" class="form-control" name="price_product">
          </div>
           <div class="form-group col-md-12">
            <label >Số lượng giảm giá</label>
            <input type="text" class="form-control" name="sale_product">
          </div>
           <div class="form-group col-md-12">
            <label>Ảnh sản phẩm</label>
            <input type="file" name="image_product">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="btnadd">Thêm mới sản phẩm</button>
      </form>      
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
