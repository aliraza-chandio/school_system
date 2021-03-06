@extends('layouts.app')
 
@section('page-title')
Teachers
@endsection

@section('main-content')
@php
//use App\Models\Classes;
//for laravel 8
// use App\Classes;
@endphp
       <div class="right_col" role="main">
          <div class="">
             <div class="page-title">
                <div class="title_left">
                   <h3>Teachers </h3>
                </div>
                <div class="title_right">
                   <div class="col-md-3 col-sm-3 form-group pull-right top_search">
                      <a class="btn btn-success" href="{{ route('teachers.create') }}"> Create New Teacher</a>
                   </div>
                </div>
             </div>
             <div class="clearfix"></div>
             <div class="row" style="display: block;">
                <div class="col-md-12 col-sm-12  ">
                   <div class="x_panel">
                      <div class="x_content">
                         <table class="table table-striped">
                            <thead>
                               <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Phone</th>
                                  <th>Class</th>
                                  <th>Action</th>
                               </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                   <tr>
                                      <th scope="row">{{ ++$i }}</th>
                                      <td>{{ $teacher->name }}</td>
                                      <td>{{ $teacher->email }}</td>
                                      <td>{{ $teacher->phone_no }}</td>
                                      <td>{{ $teacher->title }}</td>
                                      <td>
                                          <form action="{{ route('teachers.destroy',$teacher->id) }}" method="POST">
                                      
                                              <a class="btn btn-info" href="/teachers/{{ $teacher->id }}">Show</a>
                                      
                                              <a class="btn btn-primary"   href="{{ route('teachers.edit',$teacher->id) }}" >Edit</a>
                                      
                                              @csrf
                                              @method('DELETE')
                                      
                                              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure do you wan\'t to delete the category?')">Delete</button>
                                          </form>
                                      </td>
                                   </tr>
                                @endforeach
                            </tbody>
                         </table>
                      </div>
                   </div>
              {!! $teachers->links() !!}
                </div>
             </div>
          </div>
       </div>       
@endsection