@extends('layout.adminMaster')
@section('content')
<h1 style="margin:1em 0 0.5em 0.8em;">Dashboard</h1>
<div class="row no-gutters">
	<div class="col-md-3 contain">
		<div class="row no-gutters posts">
			<div class="col-md-6">
				<i class="far fa-file-alt dash"></i>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<h1 style="margin:10px 0 0 0">26</h1>
				<p>Total Post</p>
			</div>
		</div>
		<div class="row no-gutters infob">
			<div class="col-md-6">
				<a href="">View Details</a>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<a href=""><i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>

	<div class="col-md-3 contain">
		<div class="row no-gutters user">
			<div class="col-md-6">
				<i class="fas fa-users dash"></i>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<h1 style="margin:10px 0 0 0">26</h1>
				<p>Total User</p>
			</div>
		</div>
		<div class="row no-gutters infou">
			<div class="col-md-6">
				<a href="">View Details</a>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<a href=""><i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>

	<div class="col-md-3 contain">
		<div class="row no-gutters meet">
			<div class="col-md-6">
				<i class="fas fa-comments-dollar dash"></i>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<h1 style="margin:10px 0 0 0">26</h1>
				<p>Meet Request</p>
			</div>
		</div>
		<div class="row no-gutters infom">
			<div class="col-md-6">
				<a href="">View Details</a>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<a href=""><i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>

	<div class="col-md-3 contain">
		<div class="row no-gutters project">
			<div class="col-md-6">
				<i class="fas fa-tasks dash"></i>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<h1 style="margin:10px 0 0 0">26</h1>
				<p>New Projects</p>
			</div>
		</div>
		<div class="row no-gutters infop">
			<div class="col-md-6">
				<a href="">View Details</a>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<a href=""><i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
</div>
@endsection