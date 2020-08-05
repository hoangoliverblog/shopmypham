<div style=" width: 80%;margin: 0 auto;margin-right:2rem ;background-color: gray;text-align: center;color: white">
  <div>
    <a href="./Adminprocess/addprocess" class="btn btn-light">Thêm mới</a>
  </div>
	 <table class="table">
    <thead>
      <tr>
        <th>ID PRODUCT</th>
        <th>NAME</th>
        <th>OLD PRICE</th>
        <th>NEW PRICE</th>
        <th>SALE PRICE</th>
        <th>IMAGE</th>
        <th>THAO TÁC</th>
      </tr> 
    </thead>
    <tbody>    
     
   <?php 

      $newarr = json_decode($data['newproduct']);

      $response = new stdClass;

      $response->id_newpr = $newarr;

      foreach($response->id_newpr as $value)
      {

       ?>  
        <tr class="table-primary">
          <td><?php echo $value->id_newpr ?></td>
          <td><?php echo $value->name_newpr ?></td>
          <td><?php echo $value->priceold_newpr ?>đ</td>
          <td><?php echo $value->price_newpr ?>đ</td>
          <td><?php if ($value->sale_newpr=='') {
            echo 0 ;
          }else{echo $value->sale_newpr;} ?>%</td>
          <td><?php echo $value->image_newpr ?></td>
          <td><a style="padding-right: 0.5rem" onclick="return confirm('Sửa sản phẩm')" href="./Adminprocess/viewproduct/<?php echo $value->id_newpr ?>"><i class="fas fa-pen-nib"></i>edit</a><a href="./Adminprocess/deleteproduct/<?php echo $value->id_newpr ?>" onclick="return confirm('Xóa đối tượng')"><i class="fas fa-trash-alt"></i>delete</a></td>
        </tr>

      <?php 
        }
       ?> 

    </tbody>
  </table>

</div>