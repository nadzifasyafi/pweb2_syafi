{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ready Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.html" class="logo">
					Ready Dashboard
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">

					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-envelope"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
								<span class="notification">3</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span>
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span>
											</div>
										</a>
										<a href="#">
											<div class="notif-img">
												<img src="assets/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span>
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span>
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="assets/img/profile.jpg" alt="user-img" width="36" class="img-circle"><span >Hizrian</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="assets/img/profile.jpg" alt="user"></div>
										<div class="u-text">
											<h4>Hizrian</h4>
											<p class="text-muted">hello@sarapiri.com</p>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Log out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                         </form>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="assets/img/profile.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="index.html">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
							</a>
						</li>
                        <li class="nav-item">
							<a href="booxing">
								<i class="la la-th"></i>
								<p>Tables Booking</p>
							</a>
						</li>
                        <li class="nav-item">
							<a href="deskripsi">
								<i class="la la-th"></i>
								<p>Tables Deskripsi</p>
							</a>
						</li>
						<li class="nav-item update-pro">
							<button  data-toggle="modal" data-target="#modalUpdate">
								<i class="la la-hand-pointer-o"></i>
								<p>Update To Pro</p>
							</button>
						</li>
					</ul>
				</div>
			</div>
						{{-- ISI DASHBOARD --}}
                        <div class="main-panel">
                            <div class="content">
                                <div class="container-fluid">
                                    <h4 class="page-title">Selamat Datang di Applikasi Weeding Organizier</h4>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card card-stats card-warning">
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="la la-users"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                <p class="card-category">Admin</p>
                                                                <h4 class="card-title">1</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card card-stats card-success">
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="la la-bar-chart"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                <p class="card-category">Sales</p>
                                                                <h4 class="card-title">$ 1,345</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card card-stats card-danger">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="la la-newspaper-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                <p class="card-category">Subscribers</p>
                                                                <h4 class="card-title">1303</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card card-stats card-primary">
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="la la-check-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                <p class="card-category">Order</p>
                                                                <h4 class="card-title">576</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Paket wedding</h4>
                                                    <p class="card-category">Complete</p>
                                                </div>
                                                <div class="card">
                                                     <img src="https://api-media.sf-tools.com/get?__sig=eZ4Pszag-Af53AoxZdZnnw&__expires=1680232944&uri=https%3A%2F%2Fscontent.cdninstagram.com%2Fv%2Ft51.2885-15%2F299005258_1200342083843476_4760048213224719520_n.jpg%3Fstp%3Ddst-jpg_e35%26_nc_ht%3Dscontent.cdninstagram.com%26_nc_cat%3D104%26_nc_ohc%3D8GMCWZQCNTEAX-USNQh%26edm%3DAPs17CUBAAAA%26ccb%3D7-5%26oh%3D00_AfBVdTaxaVqA4_bDQDFj-5AfogdmpH9uskd9RzsE_fTzkA%26oe%3D642B975F%26_nc_sid%3D978cb9" alt="Gambar footer">
                                                </div>
                                            </div>
                                        </div>

                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Paket Fotografer</h4>
                                                        <p class="card-category">Complete</p>
                                                    </div>
                                                    <div class="card">
                                                         <img src="https://api-media.sf-tools.com/get?__sig=66HbqzBRF8x5hj0A8XfeqQ&__expires=1680233128&uri=https%3A%2F%2Fscontent.cdninstagram.com%2Fv%2Ft51.2885-15%2F313878259_1591737174587932_8529432851852234068_n.jpg%3Fstp%3Ddst-jpg_e35%26_nc_ht%3Dscontent.cdninstagram.com%26_nc_cat%3D104%26_nc_ohc%3DZKo3vAnqFaUAX_EG1kO%26edm%3DAPs17CUBAAAA%26ccb%3D7-5%26oh%3D00_AfAgZxY5-live06qb_4JXsqkWLxQbeBDXeu2rnn_ej__cQ%26oe%3D642B441A%26_nc_sid%3D978cb9" alt="Gambar footer">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Paket Undangan</h4>
                                                        <p class="card-category">Complete</p>
                                                    </div>
                                                    <div class="card">
                                                         <img src="https://tse1.mm.bing.net/th?id=OIP.nkKy2L9MqQlfarxo6dOV3wHaHa&pid=Api&P=0" alt="Gambar footer">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Paket Hantaran</h4>
                                                        <p class="card-category">Complete</p>
                                                    </div>
                                                    <div class="card">
                                                         <img src="http://www.seputarpernikahan.com/wp-content/uploads/2015/04/16110285_117458478763333_7818406127443378176_n.jpg" alt="Gambar footer">
                                                    </div>
                                                </div>
                                            </div>

                                            <footer class="footer">
                                                <div class="container-fluid">
                                                    <nav class="pull-left">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="http://www.themekita.com">
                                                                    ThemeKita
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">
                                                                    Help
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="https://themewagon.com/license/#free-item">
                                                                    Licenses
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    <div class="copyright ml-auto">
                                                        2018, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
                                                    </div>
                                                </div>
                                            </footer>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                                                <p>
                                                    <b>We'll let you know when it's done</b></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </body>
                            <script src="assets/js/core/jquery.3.2.1.min.js"></script>
                            <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
                            <script src="assets/js/core/popper.min.js"></script>
                            <script src="assets/js/core/bootstrap.min.js"></script>
                            <script src="assets/js/plugin/chartist/chartist.min.js"></script>
                            <script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
                            <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
                            <script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
                            <script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
                            <script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
                            <script src="assets/js/plugin/chart-circle/circles.min.js"></script>
                            <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
                            <script src="assets/js/ready.min.js"></script>
                            <script src="assets/js/demo.js"></script>
                            </html>

