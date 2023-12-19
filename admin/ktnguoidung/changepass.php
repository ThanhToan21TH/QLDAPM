<?php include("../inc/top.php"); ?>

<!-- Form cập nhật thông tin ng dùng-->
  <div class="row" >
    <div class="col-12 col-md-10 m-auto">
      <div class="card p-5">
        <div class="card-header">          
          <h4 class="text-info text-center">ĐỔI MẬT KHẨU</h4> 
        </div>
        <div class="card-body">
          

        	<!-- Form đổi mật khẩu -->
		  
		    
          <form method="post" name="f" action="../ktnguoidung/index.php">
            <div class="my-3">  
              <label class="form-label">Email</label> 
              <input class="form-control" type="text" name="txtemail" value="<?php echo $_SESSION["nguoidung"]["email"]; ?>" disabled>
            </div>
            <div class="my-3">  
	            <label>Mật khẩu mới</label>      
	            <input class="form-control" type="password" name="txtmatkhaumoi" placeholder="Mật khẩu mới" required>
            </div>            
            <div class="my-3 text-center">
            <input type="hidden" name="action" value="doimatkhau" >
            <input class="btn btn-primary"  type="submit" value="Lưu">
            <input class="btn btn-warning"  type="reset" value="Hủy">
          </div>
          </form>          
		        
		  




        </div>
        
      </div>
    </div>
  </div>


<?php include("../inc/bottom.php"); ?>