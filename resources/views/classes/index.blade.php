@extends('layouts.app')
@section('page-title')
Classes
@endsection
@section('main-content')

<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Classes </h3>
         </div>
      </div>

      <div class="title_right">
         <div class="col-md-4 col-sm-4 col-lg-6 mr-auto form-group pull-right top_search">
            <a class="btn btn-success" href="/class/create"> Create New Class</a>
         </div>
      </div>
      @include('layouts.flash-message')
      <div class="clearfix"></div>
      <div class="row" style="display: block;">
         <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
               <div class="x_content">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Title</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     	@foreach($classes as $class)
                     	@php 
                     		$count = 1; 
                     	@endphp
	                        <tr>
	                           <th scope="row">{{ $count }}</th>
	                           <td>{{ $class->title }}</td>
	                           <td>
	                           		@if($class->status == 'Active')
		                           		<div class="fa-hover"><i class="fa fa-thumbs-up"></i> Active</div>
	                           		@else
		                           		<div class="fa-hover"><i class="fa fa-thumbs-down"></i> Deactive</div>
	                           		@endif
	                           </td>
	                           <td>
	                                   <a class="btn btn-info" href="/class/{{ $class->id }}">Show</a>
	                           
	                                   <a class="btn btn-primary"   href="#" >Edit</a>
	                           
	                                   @csrf
	                                   @method('DELETE')
	                           
	                                   <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure do you wan\'t to delete the category?')">Delete</button>
	                           </td>
	                        </tr>
	                        @php 
	                        	$count = $count+1; 
	                        @endphp
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection