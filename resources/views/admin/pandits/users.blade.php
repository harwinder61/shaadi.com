@extends('layouts.admin')

@section('content')
<style type="text/css">
  div#example_filter {
    display: none;
}
button.dt-button.buttons-excel.buttons-html5 {
    background-image: linear-gradient(#9e58ff, #d88aff)!important;
    border: none;
    color: #fff;
    font-size: 16px;
}

button.dt-button.buttons-excel.buttons-html:hover {
    background-image: linear-gradient(#9e58ff, #d88aff) !important;
    border: none !important;
    color: #fff !important;
    font-size: 16px !important;
}

.dt-buttons {
    position: relative !important;
    float: left !important;
    margin-top: -41px !important;
}
</style>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Franchises </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Franchise</a></li>
        </ol>
      </nav>
    </div>
    @if(session('msg_send'))
      <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{session('msg_send')}}
      </div>
    @endif
    
    @if(session('msg_error'))
      <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> {{session('msg_error')}}
      </div>
    @endif
    
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a href="{{url('/admin/pandit/create')}}">
              <button class="btn btn-block btn-lg btn-gradient-primary add_user">+ Add a Franchise</button>
            </a>
            <!-- <a href="{{url('admin/downloadFranchise')}}">
              <button class="btn btn-block btn-lg btn-gradient-primary add_user"> Franchise</button>
            </a> -->
            @if(isset($users))
              <table class="table table-striped" id="example">
                <thead>
                  <tr>
                    <th> Code </th>
                    <th> Name </th>
                    <!-- <th> Email </th> -->
                    <th> Son/Daughter of </th>
                    <th> Date of Birth </th>
                    <th> Mobile </th>
                   <!--  <th> Mobile2 </th> -->
                    <th> Gender </th>
                    <th> Address </th>
                    <th> Landmark </th>
                
                    <!-- <th> Date </th> -->
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $rs)
                    <tr>
                      <td class="py-1"> {{$rs->code}}</td>
                      <td> {{$rs->name}} <br> {{$rs->last_name}} </td>
                      <!-- <td> {{ $rs->email}}</td> -->
                      <td> {{ $rs->son_daughter}}</td>
                       <td> {{ $rs->dob }}</td>
                      <td> {{ $rs->mobile1}},<br>{{ $rs->mobile2}}</td>
                      <td> {{ $rs->gender}} </td>
                      <!-- <td> {{ $rs->mobile2}}</td> -->
                      <td> {{ $rs->address}} </td>
                      <td> {{ $rs->landmark}} </td>
                   
                   <!--    <td> {{date('d-m-Y', strtotime($rs->created_at)) }}</td> -->
                      <td>
                        <div class="row icons-list">
                          <div class="col-sm-6 col-md-4 col-lg-3">
                            <a href="{{url('/admin/pandit/edit')}}/{{$rs->id}}">
                              <i class="mdi mdi-table-edit" title="edit"></i>
                            </a>
                          </div>
                          <div class="col-sm-6 col-md-4 col-lg-3">
                            <i class="mdi mdi-delete-forever delete-user" id="{{$rs->id}}" title="delete" ></i>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {!! $users->render() !!}@endif
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CONFIRMATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body delete_user_text">
        Are you sure want to delete this pandit.
      </div>
      <form  action="{{url('/admin/pandit/delete')}}">
        @csrf
        <div class="modal-footer delete_user_footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary user_delete">YES, DELETE IT</button>
          <input type="hidden" name="user_id" class="user_id">
        </div>
      </form>
    </div>
  </div>
</div>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" defer></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js" defer></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js" defer></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js" defer></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js" defer></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            //'copy', 'csv', 'excel', 'pdf', 'print'
            'excel'
        ]
    } );
} );
</script>
@endsection