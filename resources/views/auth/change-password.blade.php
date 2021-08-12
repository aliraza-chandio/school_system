@extends('layouts.app')
@section('page-title')
Change Passowrd
@endsection

@section('main-content')

<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Change Passowrd</h3>
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
                  <form class="form-horizontal form-label-left" action="/change-password/store" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Old Password</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="password" class="form-control" name="old_password" placeholder="Old Password">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">New Password</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="password" class="form-control" name="new_password" placeholder="New Password">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Confirm Password</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
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