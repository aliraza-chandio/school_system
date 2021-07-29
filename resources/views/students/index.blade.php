@extends('layouts.app')
 
@section('page-title')
Students
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
                   <h3>Students </h3>
                </div>
                <div class="title_right">
                   <div class="col-md-3 col-sm-3   form-group pull-right top_search">
                      <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Student</a>
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
                                @foreach ($students as $student)
                                   <tr>
                                      <th scope="row">{{ ++$i }}</th>
                                      <td>{{ $student->name }}</td>
                                      <td>{{ $student->email }}</td>
                                      <td>{{ $student->phone_no }}</td>
                                      @php
                                      // $class = Classes::find($student->class_id);

                                      @endphp
                                      <td>{{ $student->title }}</td>
                                      {{-- <td>{{ $class->title }}</td> --}}
                                      <td>
                                          <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                                      
                                              <a class="btn btn-info" href="/students/{{ $student->id }}">Show</a>
                                      
                                              <a class="btn btn-primary"   href="{{ route('students.edit',$student->id) }}" >Edit</a>
                                      
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
              {{-- {!! $students->links() !!} --}}
                </div>
             </div>
          </div>
       </div>       
@endsection