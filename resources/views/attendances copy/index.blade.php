@extends('layouts.new-layouts.app')

@section('content')
    <!-- <section class="content-header">
        <h1 class="pull-left"><i class="fa fa-calendar">  Attendance</i></h1>
        <h1 class="pull-right">
            {{-- <a data-toggle="modal" data-target="#attendance-show" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-pencil"> Mark Attendance</i></a> --}}
            <a href="{{url('class/attendance/list')}}" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-pencil"> Mark Attendance</i></a>
        </h1>
    </section> -->
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <!-- <div class="box box-primary">
            <div class="box-body"> -->
                    @include('attendances.attendance')


            <!-- </div>
        </div> -->
        <div class="text-center">
    
    </div>
  </div>
@endsection

