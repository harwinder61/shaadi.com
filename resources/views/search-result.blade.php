@extends('layouts.web')
@section('content')


<div class="container search-result-box">
	<h3>Your Search Result</h3>
</div>

<section class="card-area section--padding filter-box-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 marital">
        		<div class="marital-box">
	                <div class="sidebar-widget">
	                    <h3 class="title stroke-shape">Marital Status</h3>
	                    <div class="sidebar-category">
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r6">
	                            <label for="r6">Excellent</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r7">
	                            <label for="r7">All</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r8">
	                            <label for="r8">Unmarried</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r9">
	                            <label for="r9">Divorced</label>
	                        </div>
	                    </div>
	                </div><!-- end sidebar-widget -->

	                <div class="sidebar-widget">
	                    <h3 class="title stroke-shape">Working</h3>
	                    <div class="sidebar-category">
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r6">
	                            <label for="r6">All</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r7">
	                            <label for="r7">Notworking</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r8">
	                            <label for="r8">Student</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r9">
	                            <label for="r9">Teacher</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r10">
	                            <label for="r10">Doctor</label>
	                        </div>
	                    </div>
	                </div><!-- end sidebar-widget -->

	                <div class="sidebar-widget">
	                    <h3 class="title stroke-shape">Income</h3>
	                    <div class="sidebar-category">
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r6">
	                            <label for="r6">All</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r7">
	                            <label for="r7">No Income</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r8">
	                            <label for="r8">INR 1.50 to 3.00 Lakhs</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r9">
	                            <label for="r9">INR 2.50 to 4.00 Lakhs</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r10">
	                            <label for="r10">INR 4.50 to 5.00 Lakhs</label>
	                        </div>
	                    </div>
	                </div><!-- end sidebar-widget -->

	                <div class="sidebar-widget">
	                    <h3 class="title stroke-shape">Education</h3>
	                    <div class="sidebar-category">
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r6">
	                            <label for="r6">All</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r7">
	                            <label for="r7">Bsc</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r8">
	                            <label for="r8">Mba</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r9">
	                            <label for="r9">Poor</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r10">
	                            <label for="r10">+2</label>
	                        </div>
	                    </div>
	                </div><!-- end sidebar-widget -->

	                <div class="sidebar-widget">
	                    <h3 class="title stroke-shape">Mother Tongue</h3>
	                    <div class="sidebar-category">
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r6">
	                            <label for="r6">All</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r7">
	                            <label for="r7">Hindi</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r8">
	                            <label for="r8">Telgu</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r9">
	                            <label for="r9">Marathi</label>
	                        </div>
	                        <div class="custom-checkbox">
	                            <input type="checkbox" id="r10">
	                            <label for="r10">Punjabi</label>
	                        </div>
	                    </div>
	                </div><!-- end sidebar-widget -->
	            </div>
	        </div>

	        <div class="col-lg-8">
    			<div class="profile-area">
    				<div class="row">
						<div class="col-md-4 card-img hotel-img-list">
							<a href="hotel-single.html" class="d-block">
								<img src="{{asset('public/web/img/neha.jpg')}}" alt="hotel-img" class="img-fluid">
							</a>
						</div>
						<div class="col-md-3 card-body">
							<h6 class="card-title"><a href="">Nandni</a></h6>
							<p>20 yrs, 162cm - 5ft 4in</p>
							<p>Hindu</p>
							<p>Unmarried</p>
							<p>23 year</p>
						</div> 
						<div class="col-md-3 card-body-rate-list student d-flex flex-wrap align-content-center">
							<p>Student</p>
							<p>Mumbai</p>
							<p>Diploma</p>
						</div>
						<div class="col-md-2 d-flex flex-wrap align-content-center">
							<div class="like">
								<a href="">Like</a>
							</div>
						</div>
            		</div><!-- end card-item -->
	        	</div><!--profile area-->

	        	<div class="profile-area">
    				<div class="row">
						<div class="col-md-4 card-img hotel-img-list">
							<a href="hotel-single.html" class="d-block">
								<img src="{{asset('public/web/img/neha.jpg')}}" alt="hotel-img" class="img-fluid">
							</a>
						</div>
						<div class="col-md-3 card-body">
							<h6 class="card-title"><a href="">Nandni</a></h6>
							<p>20 yrs, 162cm - 5ft 4in</p>
							<p>Hindu</p>
							<p>Unmarried</p>
							<p>23 year</p>
						</div> 
						<div class="col-md-3 card-body-rate-list student d-flex flex-wrap align-content-center">
							<p>Student</p>
							<p>Mumbai</p>
							<p>Diploma</p>
						</div>
						<div class="col-md-2 d-flex flex-wrap align-content-center">
							<div class="like">
								<a href="">Like</a>
							</div>
						</div>
            		</div><!-- end card-item -->
	        	</div><!--profile area-->

	        	<div class="profile-area">
    				<div class="row">
						<div class="col-md-4 card-img hotel-img-list">
							<a href="hotel-single.html" class="d-block">
								<img src="{{asset('public/web/img/neha.jpg')}}" alt="hotel-img" class="img-fluid">
							</a>
						</div>
						<div class="col-md-3 card-body">
							<h6 class="card-title"><a href="">Nandni</a></h6>
							<p>20 yrs, 162cm - 5ft 4in</p>
							<p>Hindu</p>
							<p>Unmarried</p>
							<p>23 year</p>
						</div> 
						<div class="col-md-3 card-body-rate-list student d-flex flex-wrap align-content-center">
							<p>Student</p>
							<p>Mumbai</p>
							<p>Diploma</p>
						</div>
						<div class="col-md-2 d-flex flex-wrap align-content-center">
							<div class="like">
								<a href="">Like</a>
							</div>
						</div>
            		</div><!-- end card-item -->
	        	</div><!--profile area-->

	        	<div class="profile-area">
    				<div class="row">
						<div class="col-md-4 card-img hotel-img-list">
							<a href="hotel-single.html" class="d-block">
								<img src="{{asset('public/web/img/neha.jpg')}}" alt="hotel-img" class="img-fluid">
							</a>
						</div>
						<div class="col-md-3 card-body">
							<h6 class="card-title"><a href="">Nandni</a></h6>
							<p>20 yrs, 162cm - 5ft 4in</p>
							<p>Hindu</p>
							<p>Unmarried</p>
							<p>23 year</p>
						</div> 
						<div class="col-md-3 card-body-rate-list student d-flex flex-wrap align-content-center">
							<p>Student</p>
							<p>Mumbai</p>
							<p>Diploma</p>
						</div>
						<div class="col-md-2 d-flex flex-wrap align-content-center">
							<div class="like">
								<a href="">Like</a>
							</div>
						</div>
            		</div><!-- end card-item -->
	        	</div><!--profile area-->

	        	<div class="profile-area">
    				<div class="row">
						<div class="col-md-4 card-img hotel-img-list">
							<a href="" class="d-block">
								<img src="{{asset('public/web/img/neha.jpg')}}" alt="hotel-img" class="img-fluid">
							</a>
						</div>
						<div class="col-md-3 card-body">
							<h6 class="card-title"><a href="">Nandni</a></h6>
							<p>20 yrs, 162cm - 5ft 4in</p>
							<p>Hindu</p>
							<p>Unmarried</p>
							<p>23 year</p>
						</div> 
						<div class="col-md-3 card-body-rate-list student d-flex flex-wrap align-content-center">
							<p>Student</p>
							<p>Mumbai</p>
							<p>Diploma</p>
						</div>
						<div class="col-md-2 d-flex flex-wrap align-content-center">
							<div class="like">
								<a href="">Like</a>
							</div>
						</div>
            		</div><!-- end card-item -->
	        	</div><!--profile area-->

	        	<div class="profile-area">
    				<div class="row">
						<div class="col-md-4 card-img hotel-img-list">
							<a href="" class="d-block">
								<img src="{{asset('public/web/img/neha.jpg')}}" alt="hotel-img" class="img-fluid">
							</a>
						</div>
						<div class="col-md-3 card-body">
							<h6 class="card-title"><a href="">Nandni</a></h6>
							<p>20 yrs, 162cm - 5ft 4in</p>
							<p>Hindu</p>
							<p>Unmarried</p>
							<p>23 year</p>
						</div> 
						<div class="col-md-3 card-body-rate-list student d-flex flex-wrap align-content-center">
							<p>Student</p>
							<p>Mumbai</p>
							<p>Diploma</p>
						</div>
						<div class="col-md-2 d-flex flex-wrap align-content-center">
							<div class="like">
								<a href="">Like</a>
							</div>
						</div>
            		</div><!-- end card-item -->
	        	</div><!--profile area-->

	        	<div class="profile-area">
    				<div class="row">
						<div class="col-md-4 card-img hotel-img-list">
							<a href="" class="d-block">
								<img src="{{asset('public/web/img/neha.jpg')}}" alt="hotel-img" class="img-fluid">
							</a>
						</div>
						<div class="col-md-3 card-body">
							<h6 class="card-title"><a href="">Nandni</a></h6>
							<p>20 yrs, 162cm - 5ft 4in</p>
							<p>Hindu</p>
							<p>Unmarried</p>
							<p>23 year</p>
						</div> 
						<div class="col-md-3 card-body-rate-list student d-flex flex-wrap align-content-center">
							<p>Student</p>
							<p>Mumbai</p>
							<p>Diploma</p>
						</div>
						<div class="col-md-2 d-flex flex-wrap align-content-center">
							<div class="like">
								<a href="">Like</a>
							</div>
						</div>
            		</div><!-- end card-item -->
	        	</div><!--profile area-->

	        	<div class="profile-area">
    				<div class="row">
						<div class="col-md-4 card-img hotel-img-list">
							<a href="" class="d-block">
								<img src="{{asset('public/web/img/neha.jpg')}}" alt="hotel-img" class="img-fluid">
							</a>
						</div>
						<div class="col-md-3 card-body">
							<h6 class="card-title"><a href="">Nandni</a></h6>
							<p>20 yrs, 162cm - 5ft 4in</p>
							<p>Hindu</p>
							<p>Unmarried</p>
							<p>23 year</p>
						</div> 
						<div class="col-md-3 card-body-rate-list student d-flex flex-wrap align-content-center">
							<p>Student</p>
							<p>Mumbai</p>
							<p>Diploma</p>
						</div>
						<div class="col-md-2 d-flex flex-wrap align-content-center">
							<div class="like">
								<a href="">Like</a>
							</div>
						</div>
            		</div><!-- end card-item -->
	        	</div><!--profile area-->
        	</div>
        </div>
	</div> <!---container-->
</section> <!----section-->

@endsection