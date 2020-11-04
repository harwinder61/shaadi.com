@extends('layouts.web')
@section('content')
<section class="help_banner">
	<div class="container">
		<h3>How We can help You?</h3>
	</div>
</section>
<!-- contact information -->
<section class="info">
	<div class="container">
		<div class="row contact-info"> 
		  <div class="col-md-4">
		    <div class="envelo">
		      <i class="fa fa-envelope" aria-hidden="true"></i>
		      <h6>Email</h6>
		      <p><a href="mailto:info@example.com">info@example.com</a></p>
		    </div>
		  </div>
		  <div class="col-md-4">
		    <div class="envelo">
		      <i class="fa fa-phone" aria-hidden="true"></i>
		      <h6>Phone Number</h6>
		      <p><a href="tel:+1234567890">+1 2345678901</a></p>
		    </div>
		  </div>
		  <div class="col-md-4">
		    <div class="envelo">
		      <i class="fa fa-location-arrow" aria-hidden="true"></i>
		      <h6>Address</h6>
		      <p><a href="">Lorem ipsum dummy address</a></p>
		    </div>
		  </div>
		</div>
	</div>
</section>

<section class="faq-list">
	<div class="container py-3">
	    <div class="row">
	        <div class="col-12 mx-auto">
	            <div class="accordion" id="faqExample">
	                <div class="card">
	                    <div class="card-header p-2" id="headingOne">
	                        <h5 class="mb-0">
	                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	                              Q: Login Help?
	                            </button>
	                          </h5>
	                    </div>

	                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
	                        <div class="card-body">
	                            <b>Answer:</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
	                        </div>
	                    </div>
	                </div>
	                <div class="card">
	                    <div class="card-header p-2" id="headingTwo">
	                        <h5 class="mb-0">
	                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	                          Q: Register Help?
	                        </button>
	                      </h5>
	                    </div>
	                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
	                        <div class="card-body">
	                            <b>Answer:</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
	                        </div>
	                    </div>
	                </div>
	                <div class="card">
	                    <div class="card-header p-2" id="headingThree">
	                        <h5 class="mb-0">
	                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	                              Q. Profile & Photos?
	                            </button>
	                          </h5>
	                    </div>
	                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
	                        <div class="card-body">
	                            <b>Answer:</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
	                        </div>
	                    </div>
	                </div>
	                <div class="card">
	                    <div class="card-header p-2" id="headingThree">
	                        <h5 class="mb-0">
	                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	                              Q. Paid Services?
	                            </button>
	                          </h5>
	                    </div>
	                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
	                        <div class="card-body">
	                            <b>Answer:</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
	                        </div>
	                    </div>
	                </div>
	            </div>

	        </div>
	    </div>
	    <!--/row-->
	</div>
	<!--container-->
</section>

@endsection