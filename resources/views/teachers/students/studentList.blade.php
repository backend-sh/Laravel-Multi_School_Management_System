
<?php   $template = App\Institute::where('school_id', auth()->user()->school_id)->first(); ?>

@extends($template->template == '0' ? 'layouts.new-layouts.app' : 'layouts.adminTem.app')

@section('content')


@if($template->template == '0')
@include('flash::message')
        @include('teachers.admindefault.students.studentList')
 
@else
@include('flash::message')
  @include('teachers.adminbsb.students.studentList')


@endif

@endsection
