@extends('layouts.web')
@section('content')

<!----banner---->
<div class="banner">
    <div class="container">
        <h1>Dream it. Believe it. Make it happen!</h1>
        <form class="form">
            <div class="row">
                <div class="col-md-2 form-group">
                    <label for="formGroupExampleInput">I’m Looking for</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Women</option>
                      <option>Man</option>
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <label for="formGroupExampleInput">Age</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>20</option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>                     
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <label for="formGroupExampleInput">To</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option>
                      <option>31</option>                     
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <label for="formGroupExampleInput">Religon</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Hindu</option>
                        <option>Muslim</option>
                        <option>sikh</option>
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <label for="formGroupExampleInput">Mother Tongue</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>Gujrati</option>
                        <option>Punjabi</option>
                        <option>Marathi</option>
                        <option>Telugu</option>
                        <option>Tamil</option>
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <a href="{{url('/search-result')}}" class="btn btn-dark">Search</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-----success stories--->
<div class="success">
    <div class="container">
        <h2>Success Stories</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="row">           
            <div class="col-md-4 storie">
                <img src="{{asset('public/web/img/img_1.jpg')}}">
                <h6>Ajay & Neha</h6>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
                <a href="{{url('/success')}}">View</a>
            </div>
            <div class="col-md-4 storie">
                <img src="{{asset('public/web/img/img_2.jpg')}}">
                <h6>Ajay & Neha</h6>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
                <a href="{{url('/success')}}">View</a>
            </div>
            <div class="col-md-4 storie">
                <img src="{{asset('public/web/img/img_3.jpg')}}">
                <h6>Ajay & Neha</h6>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
                <a href="{{url('/success')}}">View</a>
            </div>
        </div>
    </div>
</div>
<!-- play store area -->
<div class="store">
    <div class="container">
        <div class="row all_store">
            <div class="col-md-5">
                <div class="store_text">
                    <h6>shubh vivah ceremony</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <div class="row">
                        <div class="col-lg-4">
                        
                            <a href="" ><img src="{{asset('public/web/img/app_store.png')}}" alt="paly store" class="img-fluid"></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="" ><img src="{{asset('public/web/img/play_store.png')}}" alt="paly store" class="img-fluid"></a>
                        </div>
                    </div>   
                </div>
            </div>
                <div class="col-md-7">
                    <div class="store_images">
                        <img src="{{asset('public/web/img/main_store.png')}}" alt="paly store" class="img-fluid">
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- play store area--> 
<div class="membership">
    <div class="container">
        <h2>Membership Plans</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="membership_new_1">
                    <h3>Free</h3>
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Browse Profiles</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Shortlist & Send Interest</li>
                        <li><i class="fa fa-times" aria-hidden="true"></i>Message and chat with unlimited users</li>
                        <li><i class="fa fa-times" aria-hidden="true"></i>View contacts of members you like</li>
                        <li><i class="fa fa-times" aria-hidden="true"></i>Priority customer support</li>
                        <li><i class="fa fa-times" aria-hidden="true"></i>Make your contacts visible to others</li>
                        <li><i class="fa fa-times" aria-hidden="true"></i>Profile Boost</li>
                        <a href="">Register Free</a>
                    </ul>
                </div>
            </div>
            <!--<div class="col-md-2 d-flex flex-warp align-content-center heart-div">
				<img src="{{asset('public/web/img/heart.png')}}" alt="" class="img-fluid">
			</div>-->
            <div class="col-md-4">
                <div class="membership_new_2">
                   <h3>Paid Membership</h3>
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Browse Profiles</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Shortlist & Send Interest</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Message and chat with unlimited users</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>View contacts of members you like</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Priority customer support</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Make your contacts visible to others</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Profile Boost</li>
                        <a href="">Membership Plans</a> 
                    </ul>
                </div>
            </div>          
        </div>
    </div>
</div>

<!------Member profile----->
<div class="profile">
    <div class="member_profile">
        <h2>Member Profile</h2>
            <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride= "carousel">
                <div class="container">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <a href="{{url('/profile')}}">
                                    <img class="d-block" src="{{asset('public/web/img/pro_1.jpg')}}" alt="First slide" class="img-fluid">
                                </a>
                                 <a href="{{url('/profile')}}">
                                    <img class="d-block" src="{{asset('public/web/img/pro_2.jpg')}}" alt="First slide"class="img-fluid">
                                </a>
                                <a href="{{url('/profile')}}">
                                    <img class="d-block" src="{{asset('public/web/img/pro_3.jpg')}}" alt="First slide"class="img-fluid">
                                </a>
                                <a href="{{url('/profile')}}">
                                    <img class="d-block" src="{{asset('public/web/img/pro_4.jpg')}}" alt="First slide" class="img-fluid">
                                </a>
                                <a href="{{url('/profile')}}">
                                    <img class="d-block" src="{{asset('public/web/img/pro_5.jpg')}}" alt="First slide" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                 <a href="{{url('/profile')}}">
                                    <img class="d-block" src="{{asset('public/web/img/pro_5.jpg')}}" alt="First slide" class="img-fluid">
                                </a>
                                <a href="{{url('/profile')}}">
                                    <img class="d-block" src="{{asset('public/web/img/pro_4.jpg')}}" alt="First slide" class="img-fluid">
                                </a>
                                 <a href="{{url('/profile')}}">
                                    <img class="d-block" src="{{asset('public/web/img/pro_2.jpg')}}" alt="First slide" class="img-fluid">
                                </a>
                                <a href="{{url('/profile')}}">
                                    <img class="d-block" src="{{asset('public/web/img/pro_1.jpg')}}" alt="First slide" class="img-fluid">
                                </a>
                                 <a href="{{url('/profile')}}">
                                    <img class="d-block" src="{{asset('public/web/img/pro_3.jpg')}}" alt="First slide" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                 </a>
                <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <!---responsive our app---->
    <div class="profile_1">
        <div class="member_profile">
            <h2>Member Profile</h2>
                <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride= "carousel">
                    <div class="container">
                        <div class="carousel-inner" role="listbox">
                            <a href="{{url('/profile')}}">
                                <div class="carousel-item active">
                                    <img class="d-block" src="{{asset('public/web/img/pro_1.jpg')}} " alt="First slide" class="img-fluid">
                                </div>
                            </a>
                             <a href="{{url('/profile')}}">
                                <div class="carousel-item">
                                    <img class="d-block" src="{{asset('public/web/img/pro_2.jpg')}} " alt="Second slide" class="img-fluid">
                                </div>
                            </a>
                            <a href="{{url('/profile')}}">
                                <div class="carousel-item">
                                    <img class="d-block" src="{{asset('public/web/img/pro_3.jpg')}} " alt="Third slide" class="img-fluid">
                                </div>
                            </a>
                            <a href="{{url('/profile')}}">
                                <div class="carousel-item">
                                    <img class="d-block" src="{{asset('public/web/img/pro_4.jpg')}} " alt="Four slide" class="img-fluid">
                                </div>
                            </a>
                            <a href="{{url('/profile')}}">
                                <div class="carousel-item">
                                    <img class="d-block" src="{{asset('public/web/img/pro_5.jpg')}} " alt="Five slide" class="img-fluid">
                                </div>
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
@endsection