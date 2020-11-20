
<?php   $template = App\Institute::where('school_id', auth()->user()->school_id)->first(); ?>

@extends($template->template == '0' ? 'layouts.new-layouts.app' : 'layouts.adminTem.app')

@section('content')


@if($template->template == '0')

        @include('teachers.admindefault.attendances.attendanceList')
 
@else

  @include('teachers.adminbsb.attendances.attendanceList')


@endif

@endsection
