@extends('layouts.app')
@section('page-title')
{{ $pageTitle }}
@endsection

@section('main-content')

<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Create Students</h3>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 ">
            <div class="x_panel">
               <div class="x_content">
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Name</label>
                        <div class="col-md-9 col-sm-9 ">
                           <p>{{ $student->name }}</p>
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                        <div class="col-md-9 col-sm-9 ">
                           <p>{{ $student->email }}</p>
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Phone no</label>
                        <div class="col-md-9 col-sm-9 ">
                           <p>{{ $student->phone_no }}</p>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Class</label>
                        <div class="col-md-9 col-sm-9 ">
                           <p>{{ $student->title }}</p>
                        </div>
                     </div>
                     <div class="ln_solid"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection