<!DOCTYPE html>
<html lang="en">
  <head>
  		<?php include 'layouts/headerpage.php' ?>
  </head>
  <body>
  <?php include 'layouts/menupage.php' ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/slider-02.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Đăng Nhập <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Đăng Nhập</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form  method="POST" action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">Thông Tin Đăng Nhập</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="TaiKhoan">Tài Khoản</label>
	                  <input type="text" class="form-control" placeholder="Username">
	                </div>
	              </div>
                <div class="col-md-12">
	                <div class="form-group">
	                	<label for="lastname">Mật Khẩu</label>
                        <input type="password" id="msg_subject" class="form-control" placeholder="Password" required data-error="Please enter your message subject">
	                </div>
                </div>
                
                <div class="w-100"></div>
                <div class="col-md-12">
                    <div class="form-group">
						<div class="col-md-12">
							<div class="checkbox">
									<label><input type="checkbox" value="" class="mr-2"> Nhớ mật khẩu</label>
							</div>
						</div>
					</div>
	            </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                    <div class="form-group">
					    <input type="submit" value="Đăng nhập" class="btn btn-primary">
					    <div class="submitting"></div>
					</div>
	            </div>
                <div class="w-100"></div>
                <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              
              <p>Hoặc đăng nhập với:</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
	          </form><!-- END -->


	          </div>
          </div> <!-- .col-md-8 -->
        </div>
    	</div>
    </section>
		<footer class="ftco-footer">
		<?php include 'layouts/footerpage.php' ?>
    </footer>
    <!-- loader -->
   <?php include "layouts/loaderpage.php" ?>
  </body>
</html>
