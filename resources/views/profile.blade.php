@extends('layouts.app')
@section('page-title')
Profile
@endsection

@section('main-content')

<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Profile</h3>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 ">
            <div class="x_panel">
               <div class="x_content">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <br />
                  <form class="form-horizontal form-label-left" action="/profile/store" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Name</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" placeholder="Name">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Email">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Phone no</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="number" class="form-control" name="phone_no" value="{{ Auth::user()->phone_no }}" placeholder="Phone no">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Address</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="number" class="form-control" name="address" value="{{ Auth::user()->address }}" placeholder="Address">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">User Profile</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="file" class="form-control" name="user_profile">
                        </div>
                     </div>
                     <div class="ln_solid"></div>
                     <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                           <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection