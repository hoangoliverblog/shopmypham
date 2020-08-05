<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style=" margin-top:2rem;box-shadow: 1px 10px 30px 1px #888888">
      <form action="./Login/createuser" method="POST" style="margin: 3rem auto">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label >Tên người dùng</label>
            <input type="text" class="form-control" name="name_user">
          </div>
          <div class="form-group col-md-6">
            <label >Tài khoản</label>
            <input type="text" class="form-control" name="acount_user">
          </div>
          <div class="form-group col-md-6">
            <label >Password</label>
            <input type="password" class="form-control" name="pass_user">
          </div>
          <div class="form-group col-md-12">
            <label>Email</label>
            <input type="email" class="form-control" name="email_user">
          </div>
        </div>
         <div class="form-group">
          <label>Số điện thoại</label>
          <input type="text" class="form-control" name="phone_user">
        </div>
        <div class="form-group">
          <label>Địa chỉ</label>
          <input type="text" class="form-control" name="address_user">
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" >
            <label class="form-check-label" >
              Đồng ý với các điều khoản của chúng tôi !
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="btnresigter">Tạo tài khoản</button>
      </form>      
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
