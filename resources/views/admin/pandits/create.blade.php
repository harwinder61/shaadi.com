@extends('layouts.admin')

@section('content')

<style type="text/css">
    h3 {
        color: #9a55ff;
    }
</style>
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Pandit Registration </h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Pandit</a></li>
					<li class="breadcrumb-item active" aria-current="page">Registration</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 grid-margin stretch-card">
        	<div class="card">
        		<div class="card-body">
                   <!--  <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="{{url('/admin/pandit/store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputName1">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="first_name" id="exampleInputName1" placeholder="Enter First Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputName2">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="last_name" id="exampleInputName2" placeholder="Enter Last Name">
                                    </div>
                                </div>
                            </div>
                        </div>

                    	<div class="row">
                            <div class="col-md-6">
                            	<div class="form-group row">
                            		<label class="col-sm-3 col-form-label" for="exampleInputEmail3">Email address</label>
                                    <div class="col-sm-9">
                            		  <input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email">
                                    </div>
                            	</div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                            		<label class="col-sm-3 col-form-label" for="exampleSelectGender">Gender</label>
                                     <div class="col-sm-9">
                                		<select class="form-control" id="exampleSelectGender" name="gender">
                                            <option>Select Gender</option>
                                			<option value="male">Male</option>
                                			<option value="female">Female</option>
                                		</select>
                                    </div>
                            	</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail33">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="dob" id="datepicker" placeholder="dd-mm/yyyy" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail35">Son/Daughter of:</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="son_daughter" id="exampleInputEmail35" placeholder="Son/Daughter of">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputName5">Mobile Number1</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="mobile1" id="exampleInputName5" placeholder="Enter Mobile Number" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" maxlength="10" >

                                        <span class="text-danger">{{ $errors->first('mobile1') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputName54">Mobile Number2</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="mobile2" id="exampleInputName54" placeholder="Enter Mobile Number" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" maxlength="10" >

                                        <span class="text-danger">{{ $errors->first('mobile2') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail3343">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="address" id="exampleInputEmail3343" placeholder="Address">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail334343">Landmark</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="landmark" id="exampleInputEmail334343" placeholder="Landmark">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                   
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail3343">Adhar Card </label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="adhar_card" id="exampleInputEmail3343">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail334343">Photo</label>
                                    <div class="col-sm-9">
                                      <input type="file" class="form-control" name="image" id="exampleInputEmail334343">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h3>Bank Details :</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail3343">Account Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="account_name" id="exampleInputEmail3343" placeholder="Account name">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail334343">Account Number</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="account_nbr" id="exampleInputEmail334343" placeholder="Account Number" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail3343">Bank Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="bank_name" id="exampleInputEmail3343" placeholder="Bank name">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail334343"> IFSC Code</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="ifsc_code" id="exampleInputEmail334343" placeholder="IFSC Code" >
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail3343">Bank Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="bank_address" id="exampleInputEmail3343" placeholder="Bank Address">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                   
                                    <label class="col-sm-3 col-form-label" for="exampleInputEmail3343">Cancel Check pic </label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="cancel_check" id="exampleInputEmail3343">
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />

<script type="text/javascript">
    $("#datepicker").datepicker({
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        yearRange: '-99:-18'
    });
</script>      
@endsection