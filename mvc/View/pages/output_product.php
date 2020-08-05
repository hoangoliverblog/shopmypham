<div style=" width: 80%;margin: 0 auto;margin-right:2rem ;background-color: gray;text-align: center;color: white">
  <div>
    <a href="./Test/addoutput" class="btn btn-light">Thêm mới</a>
  </div>
	 <table class="table">
    <thead>
      <tr>
        <th>ID PRODUCT</th>
        <th>tên sản phẩm</th>
        <th>số lượng</th>
        <th>ngày xuất</th>
         <th>thao tác</th>
      </tr> 
    </thead>
    <tbody>    
     
   <?php 

      $newarr = json_decode($data['data']);

      $response = new stdClass;

      $response->id = $newarr;

      foreach($response->id as $value)
      {

       ?>  
        <tr class="table-primary">
          <td><?php echo $value->id ?></td>
          <td><?php echo $value->name ?></td>
          <td><?php echo $value->soluong ?></td>
          <td><?php
           //$newdate = date('dd-mm-yy',strtotime($value->date));
            $n = $value->date ;

            $m = explode('-',filter_var(trim($n)));

            echo $m[2].'/'.$m[1].'/'.$m[0] ;
           ?></td>
          <td><a style="padding-right: 0.5rem" onclick="return confirm('Sửa sản phẩm')" href="./Test/addoutput/<?php echo $value->id ?>"><i class="fas fa-pen-nib"></i>edit</a><a href="./Test/addoutput/<?php echo $value->id ?>" onclick="return confirm('Xóa đối tượng')"><i class="fas fa-trash-alt"></i>delete</a></td>
        </tr>

      <?php 
        }
       ?> 

    </tbody>
  </table>

</div>