@extends('layouts.app')
@section('page-title')
Create Student
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
                  <form class="form-horizontal form-label-left" action="{{ route('students.store') }}" method="POST">
                    @csrf
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Name</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Phone no</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="number" class="form-control" name="phone_no" placeholder="Phone no">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3">Date Of Birth
                        </label>
                        <div class="col-md-9 col-sm-9">
                           <input id="birthday" class="date-picker form-control" name="dob" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                           <script>
                              function timeFunctionLong(input) {
                                 setTimeout(function() {
                                    input.type = 'text';
                                 }, 60000);
                              }
                           </script>
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Address</label>
                        <div class="col-md-9 col-sm-9 ">
                           <textarea name="address" class="form-control" cols="30" rows="2"></textarea>
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Password</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="password" class="form-control" value="" name="password" placeholder="Password">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Country</label>
                        <div class="col-md-9 col-sm-9 ">
                           <select class="form-control" name="country_id" id="country">
                              <option>Choose option</option>
                              @foreach($countries as $country)
                                 <option value="{{ $country->id }}">{{ $country->name }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">City</label>
                        <div class="col-md-9 col-sm-9 ">
                           <select class="form-control" name="city_id" id="city">
                              <option>Choose option</option>
                              @foreach($cities as $city)
                                 <option value="{{ $city->id }}">{{ $city->name }}</option>
                              @endforeach
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