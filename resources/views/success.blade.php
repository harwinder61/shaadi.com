@extends('layouts.web')
@section('content')
<div class="success_banner">
	<h3>Success Stories</h3>
</div>
<div class="married">
	<div class="container">
		<h2><span>The Married</span> Couple</h2>
		<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
		<div class="row">
			<div class="col-md-5">
				<div class="man">
				<h6>Ajay</h6>
				<h3>Sharma</h3>
				<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
				</div>	
			</div>
			<div class="col-md-2 heart">
				<img src="{{asset('public/web/img/heart.png')}}" alt="heart" class="img-fluid">
			</div>
			<div class="col-md-5">			
				<div class="woman">
				<h6>Neha</h6>
				<h3>Sharma</h3>
				<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
				</div>
			</div>			
		</div>
	</div>
</div>

@endsection