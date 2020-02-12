<?php include 'header.php';?>
<!-- Hero Start -->
        <section class="bg-home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-6">
                                <div class="mr-lg-5">   
                                    <img src="images/signup.png" class="img-fluid d-block mx-auto" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Đăng ký tài khoản</h4>  
                                    </div>
                                    <form class="login-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group position-relative mb-0">                                         
                                                    <label>Bạn là <span class="text-danger">*</span></label>
                                                    <div class="p-0">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <div class="form-group">
                                                                <input type="radio" checked="checked" id="regcustomer1" name="regcustomer" class="custom-control-input regcustomer">
                                                                <label class="custom-control-label" for="regcustomer1">Cá nhân</label>
                                                            </div>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <div class="form-group">
                                                                <input type="radio" id="regcustomer2" name="regcustomer" class="custom-control-input regcustomer">
                                                                <label class="custom-control-label" for="regcustomer2">Doanh nghiệp</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="ca-nhan">    
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">                                         
                                                    <label>Họ tên <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="First Name" name="s" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Địa chỉ email <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-email ml-3 icons"></i>
                                                    <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Mật khẩu <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Password" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Nhập lại mật khẩu <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Confirm Password" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="doanh-nghiep" style="display: none">
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">                                         
                                                    <label>Tên công ty <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-briefcase ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="Tên công ty" name="s" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">                                         
                                                    <label>Mã số thuế </label>
                                                    <i class="mdi mdi-barcode ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="Mã số thuế" name="s" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">                                         
                                                    <label>Địa chỉ liên hệ </label>
                                                    <i class="mdi mdi-home-map-marker ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="Địa chỉ liên hệ" name="s" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Địa chỉ email <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-email ml-3 icons"></i>
                                                    <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Mật khẩu <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Mật khẩu" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Nhập lại mật khẩu <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Nhập lại mật khẩu" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">    
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" checked="checked" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Tôi đồng ý với <a href="#" class="text-primary">Điều khoản dịch vụ</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-primary w-100">Đăng ký</button>
                                            </div>
                                            <div class="mx-auto">
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2">Bạn đã có tài khoản ?</small> <a href="page-login.html" class="text-dark font-weight-bold">Đăng nhập ngay</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->
        
<?php include 'footer.php';?>