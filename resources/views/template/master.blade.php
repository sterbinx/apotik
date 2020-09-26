<!DOCTYPE html>
<html lang="en">
<head>
	<title>Laravel @yield('title')</title>
	@include('template.head')
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				<a href="{{ url('/') }}" class="logo">
					<img src="{{ asset('/img/Logo.png') }}" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
		            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
		                <li class="nav-item dropdown hidden-caret">
		                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
		                        <div class="avatar-sm">
		                            <img src="{{('/img/default-profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
		                        </div>
		                    </a>
		                    <ul class="dropdown-menu dropdown-user animated fadeIn">
		                        <div class="dropdown-user-scroll scrollbar-outer">
		                            <li>
		                                <div class="user-box">
		                                    <div class="avatar-lg"><img src="{{('/img/default-profile.jpg')}}" alt="image profile" class="avatar-img rounded"></div>
		                                    <div class="u-text">
		                                        <h4>{{ Auth::user()->name }}</h4>
		                                        <p class="text-muted" style="margin-bottom: -3px;">{{ Auth::user()->email }}</p>
		                                        <p class="text-muted">{{ UserHelp::getUserRole() }}</p>
		                                    </div>
		                                </div>
		                            </li>
		                            <li>
		                                <div class="dropdown-divider"></div>
										{{-- <a class="dropdown-item" href="{{ route('/logout') }}">Logout</a> --}}
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
		                            </li>
		                        </div>
		                    </ul>
		                </li>
		            </ul>
		        </div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
			@include('template.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					@yield('content')
					<?php 	
						if (!empty($content)) {
							@include($content);
						} 
					?>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2020, made with <i class="fa fa-heart heart text-danger"></i> by Saya Sendiri
					</div>				
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{ asset('/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('/js/core/bootstrap.min.js') }}"></script>

	<script src="{{ asset('/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
	<script src="{{ asset('/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
	<script src="{{ asset('/js/plugin/chart.js/chart.min.js') }}"></script>
	<script src="{{ asset('/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('/js/plugin/chart-circle/circles.min.js') }}"></script>
	<script src="{{ asset('/js/plugin/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
	<script src="{{ asset('/js/plugin/sweetalert2/js/sweetalert2.all.min.js') }}"></script>
	<script src="{{ asset('/js/atlantis.min.js') }}"></script>
	<script src="{{ asset('/js/setting-demo.js') }}"></script>
	<script src="{{ asset('/js/plugin/select2/js/select2.full.min.js') }}"></script>
	<script src="{{ asset('/js/plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('/plugin/colorpicker/dist/js/bootstrap-colorpicker.js') }}"></script>
	<script src="{{ asset('/js/custom.js') }}"></script>
	@stack('scriptfooter')
</body>
</html>