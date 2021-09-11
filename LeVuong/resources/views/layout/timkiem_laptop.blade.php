<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Lê Vương Computer</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{('public/frontend/img/apple-touch-icon.png')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" sizes="32x32" href="{{('public/frontend/img/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{('public/frontend/img/favicon-16x16.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{('public/frontend/img/favicon.ico')}}">
  <link rel="manifest" href="{{('public/frontend/img/manifest.json')}}">
  <meta name="msapplication-TileImage" content="{{('public/frontend/img/mstile-150x150.png')}}">
  <meta name="theme-color" content="#fffffe">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="{{asset('public/frontend/css/theme.css')}}" rel="stylesheet" />


</head>


<body>
  <div  class="container-fluid">

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block bg-light shadow-transition" data-navbar-on-scroll="data-navbar-on-scroll" background-color:="" rgba(249,="" 250,="" 253,="" 0);="" style="background-image: none; transition: none 0s ease 0s;">
        <div class="container"><a class="navbar-brand" href="{{URL::to('/trang-chu')}}"><img src="{{('public/frontend/img/lv.png')}}" height="60" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{URL::to('/trang-chu')}}">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#services">Dịch vụ</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#findUs">Liên hệ</a></li>
            </ul>
            <div class="dropdown d-none d-lg-block">
              <button class="btn bg-soft-warning ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><svg class="svg-inline--fa fa-search fa-w-16 text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg><!-- <i class="fas fa-search text-warning"></i> Font Awesome fontawesome.com --></button>
              <div class="dropdown-menu dropdown-menu-lg-end p-0 rounded" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form action="{{URL::to('/timkiem-laptop')}}" method="get">
                  <input class="form-control border-200" type="search" name="key" placeholder="Search" aria-label="Search" style="background:#CCCCCC;">
                </form>
              </div>
            </div><a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="#!">Contact Us</a>
            <form class="d-flex my-3 d-block d-lg-none">
              <input class="form-control me-2 border-200 bg-light" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <!--  -->
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url({{url('public/frontend/img/biaa.png')}});background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
           <!--  <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/illustrations/hero.png" alt="hero-header" /></div> -->
           <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-8">
            <h1 class="fw-normal fs-6 fs-xxl-7">Mua bán, sữa chữa Laptop cũ </h1>
            <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">Lắp đặt camera, sữa chữa tivi. <br> Đào tạo dạy nghề</h1>
            <p class="fs-1 mb-5">Tạo niềm tin<br />uy tín, chất lượng. </p><a class="btn btn-primary me-2" href="https://www.facebook.com/laptopcutaiquangtri" role="button">FACE BOOK <i class="fas fa-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
    </section>
    <section class="py-7" id="services" container-xl="container-xl">

      <div class="container">
        <div class="row justify-content-center">
          <h4>Kết quả tìm kiếm</h4>

        </div>
        <div class="row h-100 justify-content-center">
          @foreach($timkiem_laptop as $key=>$laptop)
          <div class="col-md-4 pt-4 px-md-2 px-lg-3">
            <div class="card h-100 px-lg-5 card-span">
              <div class="card-body d-flex flex-column justify-content-around">
                <div class="text-center pt-5"><img height="250" width="250" src="{{URL::to('public/upload/sanpham/'.$laptop->anh_laptop)}}" alt="..." />
                  <h5 class="my-4">{{ $laptop->ten_laptop}} </h5>
                </div>

                <ul class="list-unstyled">
                  <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>{{ $laptop->mota_laptop}}
                  </li>
                    <!-- <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span> Máy đẹp long lanh
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Giá : 6.500.000đ
                    </li> -->
                    <li><p><b>Giá : {{ $laptop->gia_laptop}} </b> </p></li>
                  </ul>
                  <div class="text-center my-5">
                    <div class="d-grid">
                      <button class="btn btn-outline-danger" type="button"  data-toggle="modal" data-target="#myModal1">Đặt hàng ngay</button>
                    </div>

                  </div>
                </div>
              </div>
          </div>
            @endforeach
           
            <!-- The Modal -->
            <div  class="modal fade" id="myModal1" style="margin-top: 120px;margin-left: 400px; height: 700px; width: 600px; text-align: center;">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title" style="color: #49c5c4">VUI LÒNG ĐIỀN THÔNG TIN</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form  action="{{URL::to('/save-donhang')}}" method="post">
                      
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Họ và tên</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Số điện thoại</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="phone">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Tên Laptop</label>
                        <div class="col-lg-12">
                          <select class="form-control m-bot15" name="name_sp">
                           
                          @foreach($timkiem_laptop as $key=>$laptop)
                           <option>{{ $laptop->ten_laptop}}.  <b> Giá:{{ $laptop->gia_laptop}}</b> </option>
                           @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Địa chỉ khách hàng</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="add">
                        </div>
                      </div>
                      <button onclick="alert('Đặt hàng thành công. Chúng tôi sẽ liên hệ với bạn.')"   style="border-radius: 1px;  background-color: pink;">Đặt hàng</button> <br>
                      <?php
                      $message = Session::get('message');
                      if($message) {
                        echo '<span class = "text-alert">'.$message.'</span>';
                        Session::put('message',null);
                      } 
                      ?>
                    </form>
                  </div>
                </div>
              </div>

          </div>
          <!-- end of .container-->

        </section>


      </section>

    </section>
    
    <section> 

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5 col-xl-4"><img src="{{('public/frontend/img/callback.png')}}" alt="..." />
            <h5 class="text-danger">Gửi Mail về chúng tôi nếu bạn cần</h5>
            <h2>Chúng tôi sẽ tiếp đón bạn.</h2>
            <p class="text-muted">Monday to Friday, 9am-5pm.</p>
          </div>
          <div class="col-md-6 col-lg-5 col-xl-4">
            <form class="row">
              <div class="mb-3">
                <label class="form-label visually-hidden" for="inputName">Name</label>
                <input class="form-control form-quriar-control" id="inputName" type="text" placeholder="Name" />
              </div>
              <div class="mb-3">
                <label class="form-label visually-hidden" for="inputEmail">Another label</label>
                <input class="form-control form-quriar-control" id="inputEmail" type="email" placeholder="Email" />
              </div>
              <div class="mb-5">
                <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                <textarea class="form-control form-quriar-control is-invalid border-400" id="validationTextarea" placeholder="Message" style="height: 150px" required="required"></textarea>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary" type="submit">Send Message<i class="fas fa-paper-plane ms-2"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section id="findUs">

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8 col-lg-5 mb-6 text-center">
                <h5 class="text-danger">LIÊN HỆ</h5>
                <!--  <h2>Access us easily</h2> -->
              </div>
              <div class="col-12">
                <div class="card card-span rounded-2 mb-3">
                  <div class="row">
                    <div class="col-md-8 col-lg-9 d-flex"><img class="w-100 fit-cover rounded-md-start rounded-top rounded-md-top-0" src="{{('public/frontend/img/lh.jpg')}}" alt="map" /></div>
                    <div class="col-md-4 col-lg-3 d-flex flex-center">
                      <div class="card-body">
                        <h5>Contact with us</h5>
                        <p class="text-700 my-4"> <i class="fas fa-map-marker-alt text-warning me-3"></i><span>31 Kim Đồng, Gio Linh, Quảng Trị</span></p>
                        <p><i class="fas fa-phone-alt text-warning me-3"></i><span class="text-700">Monday - Friday: 8 am - 10pm<br/><span class="ps-4">Sunday: 11 am - 9pm  </span></span></p>
                        <p><i class="fas fa-envelope text-warning me-3"> </i><a class="text-700" href="levuong@gmail.com"> levuong@gmail.com</a></p>
                        <ul class="list-unstyled list-inline mt-5">
                          <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-square fs-2"></i></a></li>
                          <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram-square fs-2"></i></a></li>
                          <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter-square fs-2"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button class="btn btn-primary px-5" type="submit"><i class="fas fa-phone-alt me-2"></i><a class="text-light" href="tel:123-456789">Call us to 0917.774.234 </a></button>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>

        <section class="bg-1000">

          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h2 class="fw-bold text-white">Chúng tôi sẽ thường xuyên cập nhật</h2>
                <!-- <p class="text-300">We ensure that your product is delivered in the safest possible<br />manner, at the correct location, at the right time.</p> -->
              </div>
              <div class="col-lg-6">
                <h5 class="text-primary mb-3">Bạn muốn tư vấn gì?</h5>
                <form class="row gx-2 gy-2 align-items-center">
                  <div class="col">
                    <div class="input-group-icon">
                      <label class="visually-hidden" for="inputEmailCta">Address</label>
                      <input class="form-control input-box form-quriar-control text-light" id="inputEmailCta" type="email" placeholder="Enter your mail" />
                    </div>
                  </div>
                  <div class="d-grid gap-3 col-sm-auto">
                    <button class="btn btn-danger" type="submit">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
          <!-- ============================================-->





        </section>

        <section class="py-0 bg-1000">

          <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-4">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">DuyenMay &copy; Your Company, 2021</p>
              </div>
              <div class="col-12 col-sm-8 col-md-6">
                <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="fw-bold text-primary" href="https://themewagon.com/" target="_blank">Lê Vương Computer </a>
                </p>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
          <!-- ============================================-->


        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->




        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="{{asset('public/frontend/vendors/@popperjs/popper.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/is/is.min.js')}}"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="{{asset('public/frontend/vendors/fontawesome/all.min.js')}}"></script>
        <script src="{asset{('public/frontend//js/theme.js')}}"></script>

        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
      </div>
    </body>

    </html>