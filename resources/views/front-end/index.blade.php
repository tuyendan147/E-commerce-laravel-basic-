
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Siêu thị mini</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="{!! url('public/css/bootstrap.css') !!}" rel="stylesheet" type="text/css" media="all" />
	<link href="{!! url('public/css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
	<link href="{!! url('public/css/font-awesome.css') !!}" rel="stylesheet">
	<!--pop-up-box-->
	<link href="{!! url('public/css/popuo-box.css') !!}" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="{!! url('public/css/jquery-ui1.css') !!}">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p>Hàng giảm giá và khuyến mãi</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.html">
						<span>Siêu</span>thị
						<span>MINI</span>
						
						<img src="{!!url('public/images/logo2.png')!!}" alt=" " width="100px" height="80px">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
							<span class="fa fa-map-marker" aria-hidden="true"></span>Cửa hàng</a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal1">
								<span class="fa fa-truck" aria-hidden="true"></span>order</a>
							</li>
							<li>
								<span class="fa fa-phone" aria-hidden="true"></span> 0903552623
							</li>
							<li>
								<a href="#" data-toggle="modal" data-target="#myModal1">
									<span class="fa fa-unlock-alt" aria-hidden="true"></span> Đăng nhập </a>
								</li>
								<li>
									<a href="#" data-toggle="modal" data-target="#myModal2">
										<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Đăng ký </a>
									</li>
								</ul>
								<!-- //header lists -->
								<!-- search -->
								<div class="agileits_search">
									<form action="{!! url('timkiem') !!}" method="post">
										{!! csrf_field() !!}
										<input name="Search" type="search" placeholder="Tìm kiếm thông tin các loại mặt hànng" required="">
										<button type="submit" class="btn btn-default" aria-label="Left Align">
											<span class="fa fa-search" aria-hidden="true"> </span>
										</button>
									</form>
								</div>
								<!-- //search -->
								<!-- cart details -->
								<div class="top_nav_right">
									<div class="wthreecartaits wthreecartaits2 cart cart box_1">
										<form action="#" method="post" class="last">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="display" value="1">
											<button class="w3view-cart" type="submit" name="submit" value="">
												<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
											</button>
										</form>
									</div>
								</div>
								<!-- //cart details -->
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<!-- shop locator (popup) -->
					<!-- Button trigger modal(shop-locator) -->
					<div id="small-dialog1" class="mfp-hide">
						<div class="select-city">
							<h3>Chọn vị trí của bạn</h3>
							<select class="list_of_cities">
								<optgroup label="Popular Cities">
									<option selected style="display:none;color:#eee;">Lựa chọn thành phố	</option>
									<option>Hồ Chí Minh</option>
									<option>Đà Nẵng</option>
									<option>Hà Nội</option>
									<option>Hải Phòng</option>
									<option>Cần Thơ</option>
									<option>Quảng Nam</option>
									<option>Quảng Ngãi</option>>
								</optgroup>
								<optgroup label="Alabama">
									<option>Birmingham</option>
									<option>Montgomery</option>
									<option>Mobile</option>
									<option>Huntsville</option>
									<option>Tuscaloosa</option>
								</optgroup>

							</select>
							<div class="clearfix"></div>
						</div>
					</div>
					<!-- //shop locator (popup) -->
					<!-- signin Model -->
					<!-- Modal1 -->
					<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body modal-body-sub_agile">
									<div class="main-mailposi">
										<span class="fa fa-envelope-o" aria-hidden="true"></span>
									</div>
									<div class="modal_body_left modal_body_left1">
										<h3 class="agileinfo_sign">Đăng Nhập </h3>
										<p>
											Hãy tham gia cửa hàng tạp
											<a href="#" data-toggle="modal" data-target="#myModal2">
											ĐĂNG KÝ NÀO </a>
										</p>
										<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" 
                                        {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!-- //Modal content-->
						</div>
					</div>
					<!-- //Modal1 -->
					<!-- //signin Model -->
					<!-- signup Model -->
					<!-- Modal2 -->
					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body modal-body-sub_agile">
									<div class="main-mailposi">
										<span class="fa fa-envelope-o" aria-hidden="true"></span>
									</div>
									<div class="modal_body_left modal_body_left1">
										<h3 class="agileinfo_sign">Đăng ký</h3>
										<p>
											Hãy tham gia cửa hàng tạp hóa hãy thiết lập tài khoản~!!!
										</p>
										 <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
										<p>
											<a href="#">Nhấp vào đăng ký , tôi đồng ý các điều khoản</a>
										</p>
									</div>
								</div>
							</div>
							<!-- //Modal content-->
						</div>
					</div>
					<!-- //Modal2 -->
					<!-- //signup Model -->
					<!-- //header-bot -->
					<!-- navigation -->
					<div class="ban-top">
						<div class="container">
							<div class="agileits-navi_search">
								<form action="#" method="post">
									<select id="agileinfo-nav_search" name="agileinfo_search" required="">
										<option value="">Tất cả danh mục</option>
										<option value="Kitchen">Phòng bếp</option>
										<option value="Household">Hộ gia đình</option>
										<option value="Snacks &amp; Beverages">Đồ ăn nhẹ</option>
										<option value="Personal Care">Chăm sóc cá nhân</option>
										<option value="Gift Hampers">Quà tặng</option>
										<option value="Fruits &amp; Vegetables">Rau củ quả</option>
										<option value="Baby Care">Chăm sóc trẻ</option>
										<option value="Soft Drinks &amp; Juices">Nước giải khát và nước ép</option>
										<option value="Frozen Food">Thực ăn đông lạnh</option>
										<option value="Bread &amp; Bakery">tịm bánh mì</option>
										<option value="Sweets">kẹo</option>
									</select>
								</form>
							</div>
							<div class="top_nav_left">
								<nav class="navbar navbar-default">
									<div class="container-fluid">
										<!-- Brand and toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
											aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav menu__list">
											<li class="active">
												<a class="nav-stylehead" href="{!! url('/')!!}">Home
													<span class="sr-only">(current)</span>
												</a>
											</li>
											<li class="">
												<a class="nav-stylehead" href="about.html">About Us</a>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Phòng bếp
													<span class="caret"></span>
												</a>
												<ul class="dropdown-menu multi-column columns-3">
													<div class="agile_inner_drop_nav_info">
														<div class="col-sm-4 multi-gd-img">
															<ul class="multi-column-dropdown">
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/3">Cửa hàng bánh mì</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Đồ ăn</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Coffee</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Trái cây</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">kẹp và socola</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Gia vị</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Mứt , Mật ong</a>
																</li>
															</ul>
														</div>
														<div class="col-sm-4 multi-gd-img">
															<ul class="multi-column-dropdown">
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/3">Dưa</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Mì</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Gạo</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Nước</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Đồ ăn nhẹ</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Dầu</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Thịt</a>
																</li>
															</ul>
														</div>
														<div class="col-sm-4 multi-gd-img">
															<img src="images/nav.png" alt="">
														</div>
														<div class="clearfix"></div>
													</div>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gia đình
													<span class="caret"></span>
												</a>
												<ul class="dropdown-menu multi-column columns-3">
													<div class="agile_inner_drop_nav_info">
														<div class="col-sm-6 multi-gd-img">
															<ul class="multi-column-dropdown">
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Nhà bếp</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Đồ gia dụng	</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Dụng cụ vệ sinh</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Đồ gia dụng khác</a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2"></a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2">Làm tươi hoa quả </a>
																</li>
																<li>
																	<a href="{!! url('xem-danh-muc')!!}/2"> Rửa chén </a>
																</li>
															</ul>
														</div>
														<div class="col-sm-6 multi-gd-img">
															<ul class="multi-column-dropdown">
																<li>
																	<a href="product2.html">chăm sóc </a>
																</li>
																<li>
																	<a href="product2.html">phụ kiện vệ sinh</a>
																</li>
																<li>
																	<a href="product2.html">Nhu cầu</a>
																</li>
																<li>
																	<a href="product2.html">Bánh quy</a>
																</li>
																<li>
																	<a href="product2.html">Trang trí</a>
																</li>
																<li>
																	<a href="product2.html">Đồ nhựa </a>
																</li>
																<li>
																	<a href="product2.html">Chăm sóc tại nhà</a>
																</li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</ul>
											</li>
											<li class="">
												<a class="nav-stylehead" href="faqs.html">Faqs</a>
											</li>
											<li class="dropdown">
												<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Pages
													<b class="caret"></b>
												</a>
												<ul class="dropdown-menu agile_short_dropdown">
													<li>
														<a href="icons.html">Web Icons</a>
													</li>
													<li>
														<a href="typography.html">Typography</a>
													</li>
												</ul>
											</li>
											<li class="">
												<a class="nav-stylehead" href="contact.html">Contact</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<!-- //navigation -->
				<!-- banner -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators-->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1" class=""></li>
						<li data-target="#myCarousel" data-slide-to="2" class=""></li>
						<li data-target="#myCarousel" data-slide-to="3" class=""></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="container">
								<div class="carousel-caption">
									<h3>Tiết kiệm 
										<span>Lớn</span>
									</h3>
									<p>Khuyến mãi
										<span>10%</span></p>
										<a class="button2" href="{!! url('xem-danh-muc')!!}/3">Mua ngay </a>
									</div>
								</div>
							</div>
							<div class="item item2">
								<div class="container">
									<div class="carousel-caption">
										<h3>Tiết kiệm
											<span>Lành mạnh</span>
										</h3>
										<p>Giảm giá
											<span>30%</span> </p>
											<a class="button2" href="{!! url('xem-danh-muc')!!}/2">Mua ngay </a>
										</div>
									</div>
								</div>
								<div class="item item3">
									<div class="container">
										<div class="carousel-caption">
											<h3>Tiết kiệm
												<span>Hơn</span>
											</h3>
											<p>Nhận ưu đãi tốt hơn lên tới
												<span>20%</span>
											</p>
											<a class="button2" href="{!! url('xem-danh-muc')!!}/3">Mua ngay </a>
										</div>
									</div>
								</div>
								<div class="item item4">
									<div class="container">
										<div class="carousel-caption">
											<h3>Giảm giá
												<span>Hôm nay</span>
											</h3>
											<p>Nhận giảm giá
												<span>40%</span> Tất cả mặc hàng</p>
												<a class="button2" href="{!! url('xem-danh-muc')!!}/2">Mua ngay</a>
											</div>
										</div>
									</div>
								</div>
								<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<!-- //banner -->

							<!-- top Products -->
							<div class="ads-grid">
								<div class="container">
									<!-- tittle heading -->
									<h3 class="tittle-w3l">Sản phẩm tốt nhất của chúng tôi
										<span class="heading-style">
											<i></i>
											<i></i>
											<i></i>
										</span>
									</h3>


									<!-- //tittle heading -->
									<!-- product left -->
									<div class="side-bar col-md-3">
										<div class="search-hotel">
											<h3 class="agileits-sear-head">Tìm kiếm mặc hàng</h3>
											<form action="#" method="post">
												<input type="search" placeholder="Product name..." name="search" required="">
												<input type="submit" value=" ">
											</form>
										</div>
										<!-- price range -->

										<!-- //price range -->
										<!-- food preference -->
										<div class="left-side">
											<h3 class="agileits-sear-head">Món ăn ưa thích</h3>
											<ul>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">Ăn chay</span>
												</li>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">Người không ăn chay</span>
												</li>
											</ul>
										</div>
										<!-- //food preference -->
										<!-- discounts -->
										<div class="left-side">
											<h3 class="agileits-sear-head">Giảm giá</h3>
											<ul>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">5% trở lên</span>
												</li>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">10% trở lên</span>
												</li>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">20% trở lên</span>
												</li>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">30% trở lên</span>
												</li>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">50% trở lên</span>
												</li>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">60% trở lên</span>
												</li>
											</ul>
										</div>
										<!-- //discounts -->
										<!-- reviews -->
										<div class="customer-rev left-side">
											<h3 class="agileits-sear-head">Đánh giá của khách hàng</h3>
											<ul>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<span>5.0</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<span>4.0</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star-half-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<span>3.5</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<span>3.0</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star" aria-hidden="true"></i>
														<i class="fa fa-star-half-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<i class="fa fa-star-o" aria-hidden="true"></i>
														<span>2.5</span>
													</a>
												</li>
											</ul>
										</div>
										<!-- //reviews -->
										<!-- cuisine -->
										<div class="left-side">
											<h3 class="agileits-sear-head">Món ăn những quốc gia</h3>
											<ul>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">Hàn Quốc</span>
												</li>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">Nhật Bản</span>
												</li>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">Thái </span>
												</li>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">Trung quốc</span>
												</li>
												<li>
													<input type="checkbox" class="checked">
													<span class="span">Việt Nam</span>
												</li>
											</ul>
										</div>
										<!-- //cuisine -->
										<!-- deals -->
										<div class="deal-leftmk left-side">
											<h3 class="agileits-sear-head">Ưu đãi đặc biệt </h3>
											<div class="special-sec1">
												<div class="col-xs-4 img-deals">
													<img src="{!!url('public/images/d2.jpg')!!}" alt="" width="70px" height="70px">
												</div>
												<div class="col-xs-8 img-deal1">
													<h3>Khoai tây chiên</h3>
													<a href="single.html">8.000 đồng</a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="special-sec1">
												<div class="col-xs-4 img-deals">
													<img src="{!!url('public/images/d1.jpg')!!}" alt="">
												</div>
												<div class="col-xs-8 img-deal1">
													<h3>Bingo Mad Angles</h3>
													<a href="single.html">9.000 đồng</a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="special-sec1">
												<div class="col-xs-4 img-deals">
													<img src="{!!url('public/images/d4.jpg')!!}" alt="" width="70px" height="70px">
												</div>
												<div class="col-xs-8 img-deal1">
													<h3>Muối</h3>
													<a href="single.html">15.000 đồng</a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="special-sec1">
												<div class="col-xs-4 img-deals">
													<img src="{!!url('public/images/d5.jpg')!!}" alt="" width="70px" height="70px">	
												</div>
												<div class="col-xs-8 img-deal1">
													<h3>Trái cây khô</h3>
													<a href="single.html">200.000 đồng</a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="special-sec1">
												<div class="col-xs-4 img-deals">
													<img src="{!!url('public/images/d3.jpg')!!}" alt="" width="70px" height="70px">
												</div>
												<div class="col-xs-8 img-deal1">
													<h3>Sữa</h3>
													<a href="single.html">55.000 đồng</a>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<!-- //deals -->
									</div>
									<!-- //product left -->
									<!-- product right -->
									<div class="agileinfo-ads-display col-md-9">
										<div class="wrapper">
											<!-- first section (nuts) -->
											<div class="product-sec1">
												<h3 class="heading-tittle">Các loại hạt</h3>

@foreach($hangnhabeprangoai as $row)
<div class="col-md-4 product-men">
	<div class="men-pro-item simpleCart_shelfItem">
		<div class="men-thumb-item">
			<img src="{!!url('public/images/'.$row->anh)!!}" alt="" width="132px" height="150px">
			<div class="men-cart-pro">
				<div class="inner-men-cart-pro">
					<a href="{!! url('xem-chi-tiet-san-pham')!!}/{!! $row->id !!}" class="link-product-add-cart">Xem qua</a>
				</div>
			</div>
			<span class="product-new-top">Mới</span>
		</div>
		<div class="item-info-product ">
			<h4>
				<a href="single.html">{!! $row->tensanpham !!}</a>
			</h4>
			<div class="info-product-price">
				<span class="item_price">{!! $row->gia !!} đồng</span>
				<del>{!! $row->giakhuyenmai !!} đồng</del>
			</div>
			<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<a href="{!! url('them-vao-gio-hang') !!}/{!! $row->id !!}" class="button"> <button>thêm giỏ hàng</button></a>
			</div>

		</div>
	</div>
</div>
@endforeach



												<div class="clearfix"></div>
											</div>
											<!-- //first section (nuts) -->
											<!-- second section (nuts special) -->
											<div class="product-sec1 product-sec2">
												<div class="col-xs-7 effect-bg">
													<h3 class="">Năng lượng thuần khiết</h3>
													<h6>Thưởng thức các sản phẩm tốt</h6>
													<p>Nhận thêm 10% giảm giá</p>
												</div>
												<h3 class="w3l-nut-middle">Các loại hạt và trái cây</h3>
												<div class="col-xs-5 bg-right-nut">
													<img src="{!!url('public/images/nut1.jpg')!!}" alt="" width="300px" height="262px">
												</div>
												<div class="clearfix"></div>
											</div>
											<!-- //second section (nuts special) -->
											<!-- third section (oils) -->
											<div class="product-sec1">
												<h3 class="heading-tittle">Dầu</h3>

@foreach($doan as $row)
<div class="col-md-4 product-men">
	<div class="men-pro-item simpleCart_shelfItem">
		<div class="men-thumb-item">
			<img src="{!!url('public/images/'.$row->anh)!!}"  alt="" width="106px" height="150px">
			<div class="men-cart-pro">
				<div class="inner-men-cart-pro">
					<a href="{!! url('xem-chi-tiet-san-pham')!!}/{!! $row->id !!}" class="link-product-add-cart">Xem qua</a>
				</div>
			</div>
			<span class="product-new-top">Mới</span>
		</div>
		<div class="item-info-product ">
			<h4>
				<a href="single.html">{!! $row->tensanpham !!}</a>
			</h4>
			<div class="info-product-price">
				<span class="item_price">{!! $row->gia !!} đồng</span>
				<del>{!! $row->giakhuyenmai !!} đồng</del>
			</div>
			<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<a href="{!! url('them-vao-gio-hang') !!}/{!! $row->id !!}" class="button"> <button>thêm giỏ hàng</button></a>
			</div>

		</div>
	</div>
</div>
@endforeach
										
												<div class="clearfix"></div>
											</div>
											<!-- //third section (oils) -->
											<!-- fourth section (noodles) -->
											<div class="product-sec1">
												<h3 class="heading-tittle">Mì</h3>

												@foreach($mi as $row)
<div class="col-md-4 product-men">
	<div class="men-pro-item simpleCart_shelfItem">
		<div class="men-thumb-item">
			<img src="{!!url('public/images/'.$row->anh)!!}"  alt="" width="106px" height="150px">
			<div class="men-cart-pro">
				<div class="inner-men-cart-pro">
					<a href="{!! url('xem-chi-tiet-san-pham')!!}/{!! $row->id !!}" class="link-product-add-cart">Xem qua</a>
				</div>
			</div>
			<span class="product-new-top">Mới</span>
		</div>
		<div class="item-info-product ">
			<h4>
				<a href="single.html">{!! $row->tensanpham !!}</a>
			</h4>
			<div class="info-product-price">
				<span class="item_price">{!! $row->gia !!} đồng</span>
				<del>{!! $row->giakhuyenmai !!} đồng</del>
			</div>
			<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<a href="{!! url('them-vao-gio-hang') !!}/{!! $row->id !!}" class="button"> <button>thêm giỏ hàng</button></a>
			</div>

		</div>
	</div>
</div>
@endforeach
												<div class="clearfix"></div>
											</div>
											<!-- //fourth section (noodles) -->
										</div>
									</div>
									<!-- //product right -->
								</div>
							</div>
							<!-- //top products -->
							<!-- special offers -->
							<div class="featured-section" id="projects">
								<div class="container">
									<!-- tittle heading -->
									<h3 class="tittle-w3l">Ưu đãi đặc biệt
										<span class="heading-style">
											<i></i>
											<i></i>
											<i></i>
										</span>
									</h3>
									<!-- //tittle heading -->
									<div class="content-bottom-in">
										<ul id="flexiselDemo1">
											<li>
												<div class="w3l-specilamk">
													<div class="speioffer-agile">
														<a href="single.html">
															<img src="{!!url('public/images/s1.jpg')!!}" alt="" width="109px" height="150px">
														</a>
													</div>
													<div class="product-name-w3l">
														<h4>
															<a href="single.html">rượu, 1l</a>
														</h4>
														<div class="w3l-pricehkj">
															<h6>200.000 đồng</h6>
															<p>Tiết kiệm 30.000 đồng</p>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Aashirvaad, 5g" />
																	<input type="hidden" name="amount" value="200000₫" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="VND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="w3l-specilamk">
													<div class="speioffer-agile">
														<a href="single.html">
															<img src="{!!url('public/images/s4.jpg')!!}"alt="">
														</a>
													</div>
													<div class="product-name-w3l">
														<h4>
															<a href="single.html">Cà chua, 950g</a>
														</h4>
														<div class="w3l-pricehkj">
															<h6>100.000 đồng</h6>
															<p>Giảm được 20.000 đồng</p>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Kissan Tomato Ketchup, 950g" />
																	<input type="hidden" name="amount" value="100000₫" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="VND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="w3l-specilamk">
													<div class="speioffer-agile">
														<a href="single.html">
															<img src="{!!url('public/images/s2.jpg')!!}" alt="" width="109px" height="150px	">
														</a>
													</div>
													<div class="product-name-w3l">
														<h4>
															<a href="single.html">Đường, 1g</a>
														</h4>
														<div class="w3l-pricehkj">
															<h6>69.000 đồng</h6>
															<p>Giảm 10.000 đồng</p>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Đường, 1g" />
																	<input type="hidden" name="amount" value="69000₫" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="VND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="w3l-specilamk">
													<div class="speioffer-agile">
														<a href="single2.html">
															<img src="{!!url('public/images/s3.jpg')!!}" alt="" width="150px" height="150px">
														</a>
													</div>
													<div class="product-name-w3l">
														<h4>
															<a href="single2.html">Dầu gọi clear</a>
														</h4>
														<div class="w3l-pricehkj">
															<h6>187.000 đồng</h6>
															<p>Giảm giá 30.000 đồng</p>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Dầu gọi clear" />
																	<input type="hidden" name="amount" value="187000₫" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="VND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="w3l-specilamk">
													<div class="speioffer-agile">
														<a href="single.html">
															<img src="{!!url('public/images/s8.jpg')!!}" alt="" width="150px" height="150px">
														</a>
													</div>
													<div class="product-name-w3l">
														<h4>
															<a href="single.html">Dầu xả , 1L</a>
														</h4>
														<div class="w3l-pricehkj">
															<h6>160.000 đồng</h6>
															<p>Giảm giá 40.000 đồng</p>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Dầu xả, 1l" />
																	<input type="hidden" name="amount" value="160000₫" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="VND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="w3l-specilamk">
													<div class="speioffer-agile">
														<a href="single2.html">
															<img src="{!!url('public/images/s6.jpg')!!}" alt="" width="150px" height="150px">
														</a>
													</div>
													<div class="product-name-w3l">
														<h4>
															<a href="single2.html">Dầu gội cho nữ, 80g</a>
														</h4>
														<div class="w3l-pricehkj">
															<h6>121.000 đồng</h6>
															<p>Giảm giá 30.000 đồng</p>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Dầu gội cho nữ , 80 g" />
																	<input type="hidden" name="amount" value="121.000 đồng" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="VND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="w3l-specilamk">
													<div class="speioffer-agile">
														<a href="single.html">
															<img src="{!!url('public/images/s5.jpg')!!}" alt="">
														</a>
													</div>
													<div class="product-name-w3l">
														<h4>
															<a href="single.html"> 2 chai nước ngọt, 2.25L </a>
														</h4>
														<div class="w3l-pricehkj">
															<h6>50.000 đồng</h6>
															<p>Giảm 10.000 đồng</p>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="2 chai nước ngọt, 2.25L " />
																	<input type="hidden" name="amount" value="50000₫" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="VND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="w3l-specilamk">
													<div class="speioffer-agile">
														<a href="single2.html">
															<img src="{!!url('public/images/s9.jpg')!!}" alt="" width="150px" height="150px">
														</a>
													</div>
													<div class="product-name-w3l">
														<h4>
															<a href="single2.html">Dầu xã, 0.5l</a>
														</h4>
														<div class="w3l-pricehkj">
															<h6>153.000 đồng</h6>
															<p>Giảm 40.000 đồng</p>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Dầu xả, 0,5l" />
																	<input type="hidden" name="amount" value="153.000₫" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="VND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- //special offers -->
							<!-- newsletter -->
							<div class="footer-top">
								<div class="container-fluid">
									<div class="col-xs-8 agile-leftmk">
										<h2>Nhận hàng tạp hóa </h2>
										<p>Giao hàng miễn phí</p>
										<form action="#" method="post">
											<input type="email" placeholder="E-mail" name="email" required="">
											<input type="submit" value="Subscribe">
										</form>
										<div class="newsform-w3l">
											<span class="fa fa-envelope-o" aria-hidden="true"></span>
										</div>
									</div>
									<div class="col-xs-4 w3l-rightmk">
										<img src="{!!url('public/images/tab3.png')!!}"alt=" ">
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!-- //newsletter -->
							<!-- footer -->
							<footer>
								<div class="container">
									<!-- footer first section -->
									<p class="footer-main">
										<span>"Siêu thị mini"</span> Chúng tôi cố gấng phát triển theo một hướng tích cực nhất .Và mong muốn thả moản nhu cầu cho người mua hàng bằng cách trực tuyến </p>
										<!-- //footer first section -->
										<!-- footer second section -->
										<div class="w3l-grids-footer">
											<div class="col-xs-4 offer-footer">
												<div class="col-xs-4 icon-fot">
													<span class="fa fa-map-marker" aria-hidden="true"></span>
												</div>
												<div class="col-xs-8 text-form-footer">
													<h3>Theo giõi đơn hàng</h3>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="col-xs-4 offer-footer">
												<div class="col-xs-4 icon-fot">
													<span class="fa fa-refresh" aria-hidden="true"></span>
												</div>
												<div class="col-xs-8 text-form-footer">
													<h3>Miễn phí và dễ dàng</h3>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="col-xs-4 offer-footer">
												<div class="col-xs-4 icon-fot">
													<span class="fa fa-times" aria-hidden="true"></span>
												</div>
												<div class="col-xs-8 text-form-footer">
													<h3>Hủy trực tuyến </h3>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
										</div>
										<!-- //footer second section -->
										<!-- footer third section -->
										<div class="footer-info w3-agileits-info">
											<!-- footer categories -->
											<div class="col-sm-5 address-right">
												<div class="col-xs-6 footer-grids">
													<h3>Thể loại</h3>
													<ul>
														<li>
															<a href="product.html">Tạp hóa</a>
														</li>
														<li>
															<a href="product.html">Trái cây</a>
														</li>
														<li>
															<a href="product.html">Nước ngọt </a>
														</li>
														<li>
															<a href="product2.html">Máy rửa chén</a>
														</li>
														<li>
															<a href="product.html">Bánh quy</a>
														</li>
														<li>
															<a href="product2.html">Đồ trẻ con</a>
														</li>
													</ul>
												</div>
												<div class="col-xs-6 footer-grids agile-secomk">
													<ul>
														<li>
															<a href="product.html">Đồ ăn nhẹ</a>
														</li>
														<li>
															<a href="product.html">Bánh mì</a>
														</li>
														<li>
															<a href="product.html">kẹo</a>
														</li>
														<li>
															<a href="product.html">Socola</a>
														</li>
														<li>
															<a href="product2.html">Chăm sóc</a>
														</li>
														<li>
															<a href="product.html">Trái cây</a>
														</li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
											<!-- //footer categories -->
											<!-- quick links -->
											<div class="col-sm-5 address-right">
												<div class="col-xs-6 footer-grids">
													<h3>Đường dẫn</h3>
													<ul>
														<li>
															<a href="about.html">About Us</a>
														</li>
														<li>
															<a href="contact.html">Contact Us</a>
														</li>
														<li>
															<a href="help.html">Help</a>
														</li>
														<li>
															<a href="faqs.html">Faqs</a>
														</li>
														<li>
															<a href="terms.html">Điều khoản sử dụng</a>
														</li>
														<li>
															<a href="privacy.html">Chính sách bảo mật</a>
														</li>
													</ul>
												</div>
												<div class="col-xs-6 footer-grids">
													<h3>Liên lạc	</h3>
													<ul>
														<li>
															<i class="fa fa-map-marker"></i> Cao đẳng công nghệ thông tin</li>
															<li>
																<i class="fa fa-mobile"></i> 0903552623	</li>
																<li>
																	<i class="fa fa-phone"></i> 0901999415 </li>
																	<li>
																		<i class="fa fa-envelope-o"></i>
																		<a href="mailto: congtuyen.tran.it@gmail.com"> congtuyen.tran.it@gmail.com</a>
																	</li>
																</ul>
															</div>
														</div>
														<!-- //quick links -->
														<!-- social icons -->
														<div class="col-sm-2 footer-grids  w3l-socialmk">
															<h3>Theo giõi chúng tôi</h3>
															<div class="social">
																<ul>
																	<li>
																		<a class="icon fb" href="#">
																			<i class="fa fa-facebook"></i>
																		</a>
																	</li>
																	<li>
																		<a class="icon tw" href="#">
																			<i class="fa fa-twitter"></i>
																		</a>
																	</li>
																	<li>
																		<a class="icon gp" href="#">
																			<i class="fa fa-google-plus"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="agileits_app-devices">
																<h5>Tải ứng dụng</h5>
																<a href="#">
																	<img src="{!!url('public/images/1.png')!!}" alt="">
																</a>
																<a href="#">
																	<img src="{!!url('public/images/2.png')!!}" alt="">
																</a>
																<div class="clearfix"> </div>
															</div>
														</div>
														<!-- //social icons -->
														<div class="clearfix"></div>
													</div>
													<!-- //footer third section -->
													<!-- footer fourth section (text) -->
													<div class="agile-sometext">
														<div class="sub-some">
															<h5>Châm ngôn sống của chúng tôi</h5>
															<p>Đặt hàng trực tuyến. Tất cả các sản phẩm yêu thích của bạn từ siêu thị trực tuyến giá thấp để giao hàng tại nhà.“Bạn không thể kết nối các dấu chấm (các sự kiện trong cuộc đời) khi nhìn về phía trước, mà chỉ có thể kết nối được chúng khi nhìn lại quá khứ. Hãy tin rằng chúng sẽ kết nối với nhau trong tương lai	
															“Điều quan trọng mà tôi sớm học được đó là bạn luôn phải đặt ra một mục tiêu cụ thể trong cuộc sống, cả ngắn hạn và dài hạn, cũng giống như bạn làm với công việc của mình vậy. Đặt ra những mục tiêu như thế giúp bạn có những kế hoạch rõ ràng để hoàn thành và thực hiện nó. Chúng tôi áp dụng điều này trong công việc, dù hiếm khi dùng chúng trong cuộc sống của mình.”</p>
														</div>
														<div class="sub-some">
															<h5>Mua sắm trực tuyến với các ưu đãi và ưu đãi tốt nhất</h5>
															<p> Nhận tới 40% giảm giá mỗi ngày Các sản phẩm thiết yếu được hiển thị trên trang ưu đãi. Phạm vi bao gồm tạp hóa, chăm sóc cá nhân, chăm sóc trẻ em, đồ dùng cho thú cưng, chăm sóc sức khỏe và các sản phẩm cần thiết hàng ngày khác. Giảm giá có thể thay đổi từ sản phẩm đến sản phẩm</p>
														</div>
														<!-- brands -->
														<div class="sub-some">
															<h5>Thương hiệu nổi tiếng</h5>
															<ul>
																<li>
																	<a >“Rất nhiều công ty không thành công từ trước tới nay. Họ đã không làm tốt điều gì ư? Họ bỏ lỡ tương lai.”
																	</a>
																</li>

																<li>
																	<a href="product.html">cocacola</a>
																</li>
																<li>
																	<a href="product.html">sprit</a>
																</li>
																<li>
																	<a href="product.html">sting</a>
																</li>
																<li>
																	<a href="product.html">redbool</a>
																</li>
																<li>
																	<a href="product.html">clear</a>
																</li>
																<li>
																	<a href="product.html">romano</a>
																</li>
																<li>
																	<a href="product.html">PS</a>
																</li>
																<li>
																	<a href="product.html">NET CAFE</a>
																</li>
																<li>
																	<a href="product2.html">DOVE</a>
																</li>
																<li>
																	<a href="product2.html">DONY</a>
																</li>
																<li>
																	<a href="product2.html">xmen</a>
																</li>
																<li>
																	<a href="product2.html">NEFTUN</a>
																</li>
																<li>
																	<a href="product2.html">NEFTUN</a>
																</li>
																<li>
																	<a href="product2.html">NEFTUN</a>
																</li>
																<li>
																	<a href="product2.html">NEFTUN</a>
																</li>


															</div>
															<!-- //brands -->
															<!-- payment -->
															<div class="sub-some child-momu">
																<h5>Payment Method</h5>
																<ul>
																	<li>
																		<img src="{!!url('public/images/pay2.png')!!}" alt="">
																	</li>
																	<li>
																		<img src="{!!url('public/images/pay5.png')!!}" alt="">
																	</li>
																	<li>
																		<img src="{!!url('public/images/pay2.png')!!}" alt="">
																	</li>
																	<li>
																		<img src="{!!url('public/images/pay4.png')!!}" alt="">
																	</li>
																	<li>
																		<img src="{!!url('public/images/pay6.png')!!}" alt="">
																	</li>
																	<li>
																		<img src="{!!url('public/images/pay3.png')!!}"alt="">
																	</li>
																	<li>
																		<img src="{!!url('public/images/pay4.png')!!}"alt="">
																	</li>
																	<li>
																		<img src="{!!url('public/images/pay6.png')!!}" alt="">
																	</li>
																	<li>
																		<img src="{!!url('public/images/pay3.png')!!}"  alt="">
																	</li>

																</ul>
															</div>
															<!-- //payment -->
														</div>
														<!-- //footer fourth section (text) -->
													</div>
												</footer>
												<!-- //footer -->
												<!-- copyright -->
												<div class="copy-right">
													<div class="container">
														<p>© 2019 SIÊU THỊ MINI
															<a> Trần Tuyển</a>
														</p>
													</div>
												</div>
												<!-- //copyright -->

												<!-- js-files -->
												<!-- jquery -->
												<script src="{!! url('public/js/jquery-2.1.4.min.js')!!}"></script>
												<!-- //jquery -->

												<!-- popup modal (for signin & signup)-->
												<script src="{!! url('public/js/jquery.magnific-popup.js')!!}"></script>
												<script>
													$(document).ready(function () {
														$('.popup-with-zoom-anim').magnificPopup({
															type: 'inline',
															fixedContentPos: false,
															fixedBgPos: true,
															overflowY: 'auto',
															closeBtnInside: true,
															preloader: false,
															midClick: true,
															removalDelay: 300,
															mainClass: 'my-mfp-zoom-in'
														});

													});
												</script>
												<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="{!! url('public/js/minicart.js')!!}"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
			len = items.length,
			total = 0,
			i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="{!! url('public/js/jquery-ui.js')!!}"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="{!! url('public/js/jquery.flexisel.js')!!}"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src= "{!! url('public/js/SmoothScroll.min.js')!!}" ></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="{!! url('public/js/move-top.js')!!}"></script>
	<script src="{!! url('public/js/easing.js')!!}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="{!! url('public/js/bootstrap.js')!!}"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


</body>

</html>