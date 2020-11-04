@extends('layouts.web')
@section('content')
<!--banner -->
<div class="contact_banner">
	<div class="container">
		<h2>Contact Us</h2>
	</div>
</div>

<!--contact us -->
<div class="contact_page">
    <div class="container">
		<h3>Contact With Us</h3> 								
		<div class="con_form">
			 <form action="/action_page.php">
				<div class="row">
					 <div class="col-md-6 name">
						<input type="text" class="form-control" id="name" placeholder="Name" name="name">
					 </div>
					 <div class="col-md-6 name">
						<input type="text" class="form-control" id="email" placeholder="Email" name="email">
					 </div>
				</div>					
				<div class="row">							  
					<div class="col-md-6 name">
						<input type="subject" class="form-control" id="subject" placeholder="Subject" name="subject">
					</div>				
					<div class="col-md-6 name">
						<input type="phone" class="form-control" id="phone" placeholder="Phone No." name="phone">
					</div>
				</div>																	
				<div class="row">								
				<div class="col-md-12 name">
					<input type="message-box" class="form-control" id="message" placeholder="Message" name="message">
				</div>
				</div>															
				<center><button type="Send" class="btn btn-primary mt-3 send"><strong>SEND</strong></button></center>
			</form>							
		</div>															
	</div>
</div>

@endsection