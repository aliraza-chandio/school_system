@extends('layouts.app')

@section('page-title')
    Dashboard
@endsection


@section('main-content')
<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Dashboard</h3>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12">
            <div class="">
               <div class="x_content">
                  <div class="row">
                     <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                           <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                           </div>
                           <div class="count">{{ $teachersCount }}</div>
                           <h3>All Teachers</h3>
                           
                        </div>
                     </div>
                     <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                           <div class="icon"><i class="fa fa-comments-o"></i>
                           </div>
                           <div class="count">{{ $classesCount }}</div>
                           <h3>All Classes</h3>
                           
                        </div>
                     </div>
                     <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                           <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                           </div>
                           <div class="count">{{ $classesActive }}</div>
                           <h3>Active Classes </h3>
                           
                        </div>
                     </div>
                     <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                           <div class="icon"><i class="fa fa-check-square-o"></i>
                           </div>
                           <div class="count">{{ $classesDeactive }}</div>
                           <h3>Deactive Classes </h3>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection