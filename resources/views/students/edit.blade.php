{{-- @extends('layouts.app')
   
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
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
  
    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $student->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection --}}


@extends('layouts.app')
@section('page-title')
{{ $pageTitle }}
@endsection

@section('main-content')

<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Edit Student</h3>
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
                  <form class="form-horizontal form-label-left" action="{{ route('students.update',$student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Name</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="text" class="form-control" value="{{ $student->name }}"  name="name" placeholder="Name">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="email" class="form-control" value="{{ $student->email }}"  name="email" placeholder="Email">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Phone no</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="number" class="form-control" value="{{ $student->phone_no }}"  name="phone_no" placeholder="Phone no">
                        </div>
                     </div>
                       <input type="hidden" value="{{ $student->id }}" name="id">
                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Classes</label>
                        <div class="col-md-9 col-sm-9 ">
                           <select class="form-control" name="class_id">
                              <option>Choose option</option>
                              <option value="1" {{ $student->class_id === 1 ? "selected" : "" }}  >One</option>
                              <option value="2" {{ $student->class_id === 2 ? "selected" : "" }}  >Two</option>
                              <option value="3" {{ $student->class_id === 3 ? "selected" : "" }}  >Three</option>
                              <option value="4" {{ $student->class_id === 4 ? "selected" : "" }}  >Four</option>
                           </select>
                        </div>
                     </div>
                     <div class="ln_solid"></div>
                     <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                           <a href="{{ route('students.index') }}" class="btn btn-primary">Cancel</a>
                           <button type="reset" class="btn btn-danger">Reset</button>
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