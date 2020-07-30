@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#classroom-add-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle" aria-hidden="true"> Add New ClassRoom</i></a>
        </h1>
<h1 class="pull-right" style="margin-top: -10px;margin-bottom: 5px;margin-right: 50px">
<i class="fa fa-id-sun-o" aria-hidden="true"> Class Rooms</i></h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
            <div class="pull-right">
            <a href="{{url('pdf-download-classroom')}}" class="btn btn  btn-x"> 
            <i class="fa fa-file-pdf-o text-red" style="color:white"></i> PDF </a>

            <a href="{{url('export-excel-xlsx-classroom')}}" class="btn btn  btn-x"> 
            <i class="fa fa-file-excel-o text-green" style="color:white"></i> Excel </a>

            <a href="{{url('pdf-download-classroom')}}" class="btn btn  btn-x"> 
            <i class="fa fa-file-word-o text-blue" style="color:white"></i> Word </a>

            <a href="#" onclick="window.print();" class="btn btn  btn-x"> 
            <i class="fa fa-print text-light-blue" style="color:white"></i> Print </a>
            </div>
            <div class="clearfix"></div>
                    @include('class_rooms.table')

                    {!! Form::open(['route' => 'classRooms.store']) !!}

                    @include('class_rooms.fields')

                    {!! Form::close() !!}
            </div>
        <div class="text-center">
        
        </div>

@endsection
