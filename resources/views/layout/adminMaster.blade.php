<!DOCTYPE html>
<html>
<head>
<title>Admin | FusionsVisual</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="icon" type="image/png" sizes="462x454" href="{{asset('admin/img/Group.png')}}">
<!-- Our Custom CSS -->
<link rel="stylesheet" href="{{asset('admin/admin.css')}}">
<link rel="stylesheet" href="{{asset('admin/style.css')}}">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<!-- Font Awesome JS -->
<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
<div class="wrapper">
	<!--Side nav-->
	<nav id="sidebar">
		<div class="sidebar-header">
			<img src="{{asset('admin/img/Group2.png')}}" class="img-fluid">
		</div>
		<ul class="list-unstyled components">
			<li>
				<a href="{{url('/dashboard')}}"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;Dashboard</a>
			</li>
			<li>
				<a href="#managepage" data-toggle="collapse" onclick="rotate(1)" aria-expanded="false"><i class="far fa-file-alt"></i>&nbsp;&nbsp;Manage Page <i class="fas fa-angle-down rotate icon r1"></i></a>
				<ul class="collapse list-unstyled" id="managepage">
					<li>
						<a href="">Home</a>
					</li>
					<li>
						<a href="">Portfolio</a>
					</li>
					<li>
						<a href="">Meet Us</a>
					</li>
					<li>
						<a href="">Contact Us</a>
					</li>
					<li>
						<a href="">About Us</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#manageuser" data-toggle="collapse" onclick="rotate(2)" aria-expanded="false"><i class="fas fa-users-cog"></i>&nbsp;Manage User<i class="fas fa-angle-down rotate icon r2"></i></a>
				<ul class="collapse list-unstyled" id="manageuser">
					<li>
						<a href="#h6">User List</a>
					</li>
					<li>
						<a href="#h7" >Add User</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#h8"><i class="fas fa-comments-dollar"></i>&nbsp;&nbsp;Meet Request</a>
			</li>
			<li>
				<a href="#h9" ><i class="fas fa-tasks"></i>&nbsp;&nbsp;Projects</a>
			</li>
			<li>
				<a href="#newsletter" data-toggle="collapse" onclick="rotate(3)" aria-expanded="false"><i class="far fa-envelope-open"></i>&nbsp;&nbsp;Newsletter<i class="fas fa-angle-down rotate icon r3"></i></a>
				<ul class="collapse list-unstyled" id="newsletter">
					<li>
						<a href="#h10">Subscriber List</a>
					</li>
					<li>
						<a href="#h11">Send Mail</a>
					</li>
					<li>
						<a href="#h12">Edit Mail Template</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#blog" data-toggle="collapse" onclick="rotate(4)" aria-expanded="false"><i class="fas fa-rss-square"></i>&nbsp;&nbsp;Blog<i class="fas fa-angle-down rotate icon r4"></i></a>
				<ul class="collapse list-unstyled" id="blog">
					<li>
						<a href="#h13">Add Post</a>
					</li>
					<li>
						<a href="#h14">Post List</a>
					</li>
				</ul>
			</li>
			<li><a href="#h15"><i class="far fa-question-circle"></i>&nbsp;&nbsp;FAQ</a></li>
		</ul>
	</nav>

	<!--Content-->
	<div id="content">
		<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
			<div class="container-fluid">
				<button type="button" id="sidebarCollapse" class="btn btn-outline-info">
					<i class="fas fa-align-justify"></i>
					<!-- <span>Hide / Show Menu</span> -->
				</button>
				<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-align-justify"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav ml-auto">
						<li class="nav-item">
							<a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">{{Auth::user()->name}} <i class="fas fa-sign-out-alt"></i></a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container-fluid">
			@yield('content')
		</div>
	</div>
</div>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$("#sidebar").mCustomScrollbar({
			theme: "minimal"
		});

		$('#sidebarCollapse').on('click', function () {
			$('#sidebar, #content').toggleClass('active');
			$('.collapse.in').toggleClass('in');
			$('a[aria-expanded=true]').attr('aria-expanded', 'false');
		});
	});

	$(function(){
		rotate(99);
	});

	function rotate(pil){
		switch(pil){
			case 1 :
			$('.r1').toggleClass('down');
			break;
			case 2 :
			$('.r2').toggleClass('down');
			break;
			case 3 :
			$('.r3').toggleClass('down');
			break;
			case 4 :
			$('.r4').toggleClass('down');
			break;
		}
	}

</script>
<script type="text/javascript">
    $('.table-responsive').on('show.bs.dropdown', function () {
     $('.table-responsive').css( "overflow", "inherit" );
});

$('.table-responsive').on('hide.bs.dropdown', function () {
     $('.table-responsive').css( "overflow", "auto" );
})
</script>
</body>
</html>