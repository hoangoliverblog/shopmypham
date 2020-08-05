
<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style=" margin-top:3rem;box-shadow: 1px 10px 30px 1px #888888">
      <form action="./Test/loginfb" method="POST" style="margin: 5rem auto">
        <div class="form-group">
          <label for="exampleInputEmail1">Đăng nhập</label>
          <input type="text" class="form-control" placeholder="Tài khoản" name="username">
        </div>
        <div class="form-group">
          <label >Mật khẩu</label>
          <input type="password" class="form-control" name="userpass" placeholder="Mật khẩu">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" >Show password</label>
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-primary" name="btnlogin">Đăng nhập</button>
        </div>
        <div class="form-group">
          <a href="./Login/Resigter">Đăng kí tài khoản</a>
          <a href="./Login/oldpassword">Lấy lại mật khẩu</a>
        </div>
        <div class="form-group">
          <a href="./Test/loginfb">LOGIN WITH FACEBOOK</a>
        </div>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>