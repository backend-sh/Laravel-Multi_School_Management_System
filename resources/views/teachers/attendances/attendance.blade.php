@extends('layouts.app')

@section('content')
@include('table_style') 
    <section class="content-header">
        <!-- <h1 class="pull-left"><i class="fa fa-calendar">  Attendance</i></h1> -->
        <!-- <h1 class="pull-right" style="margin-top: -10px;margin-bottom: 5px;margin-right: 50px"><i class="fa fa" aria-hidden="true">MARK ATTENDANCE</i></h1> -->
        <a  class="pull-left btn btn-danger" href="{{url('home')}}" style="margin-top: -10px;margin-bottom: 5px;margin-right: 50px"><i class="fa fa-back-arrow" aria-hidden="true">Return</i></a>

             <!-- Split button -->
             <div class="btn-group pull-right">
                    <button type="button" class="btn btn-DANGER">MARK CLASS ATTENDANCE </button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                    @foreach($classes as $grade) 
                    <li>
                    <a data-toggle="tooltip" title="{{$grade->class_name}}" class="dropdown-item" href="{{url('get-class-attendance', $grade->class_code)}}">
                    <label for=""  class="active">{{$grade->semester_name}} </label> | {{$grade->class_code}}
                    </a></li>
                    @endforeach
                    </ul>
                    </div>
                    {{--<a href="#" onclick="$('#markAttendance').modal({'backdrop': 'static'});"class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-pencil"> Mark Attendance</i></a>--}}
    </section>
    <div class="clearfix"></div>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">



<style>
    .btn-block{
        height:28px;
        text-emphasis: center;
        text-anchor: top;
    }
</style>

@php
    $date = date('d-m-Y'); // this for the date current date
@endphp

<div class="panel-default">
    <div class="panel-heading">
    <div class="col-md-2 pull-right">
                <!-- <b style="font-weight:bolder;">  Date: </b> -->
                <input type="text" name="attendance_date"  id="attendance_date" class="form-control"
                value="<?php echo date('d-m-Y')?>" disabled >
              </div>
    <a href="#"> <button class="btn bg-navy pull-right" data-toggle="modal" data-target="#ReportList">Attendance Report</button></a>
        @isset($class_name)
        <a href="{{route('AttendanceList',$class_name->teacher_id)}}" style="margin-right:10px;">
            <button class="btn bg-navy pull-right">Attendance List</button></a>
        @endisset
        <h3 style="font-weight:bold;text-transform: uppercase; text-align:left">
            <i class="fa fa-calendar"></i> mark <b style="color:red">  attendance</b>
           </h3>
    </div>
    <div class="panel-body">

        {{-- this row is for the search form okay --}}
        <div class="row">
            <div class="col-md-3">
                <form action="{{url('/search/attendance/by/roll_no')}}" method="get">   search by Roll Number
                 <div class="form-group">
                    <div class="input-group">
                    <input type="search" name="roll_no" id="roll_no" class="form-control" placeholder="Roll No."/>
                    <span class="input-group-btn">
                        <button id="filter" class="btn btn-primary btn-block" onclick="searchStationTable();">
                            <span class="glyphicon glyphicon-search">Search</span>
                        </button>
                    </span>
                    </div>
                 </div>
                </form>
            </div>
            {{-- ===== --}}
            <div class="row">
                <div class="col-md-3">
                    <form action="{{url('/search/attendance/by/class')}}" method="get">  serach by class
                     <div class="form-group">
                        <div class="input-group">
                            <select name="class_id" id="class_id" class='form-control select_2_single'>
                                <option value="" selected disabled>select class</option>
                                @foreach ($classes as $class)
                                <option value="{{$class->class_code}}">{{$class->class_name}}</option>
                                @endforeach

                            </select>

                        <span class="input-group-btn">
                            <button id="filter" class="btn btn-primary btn-block" onclick="searchStationTable();">
                                <span class="glyphicon glyphicon-search">Search</span>
                            </button>
                        </span>
                    </form>
                        </div>
                     </div>
                </div>

                <div class="col-md-3">
                    <form action="{{url('/search/attendance/by/date')}}" method="get">  search by date
                    <div class="form-group">
                       <div class="input-group">
                       <input type="search" name="attendance_date" id="attendance_date" class="form-control" placeholder="Date"
                        autocomplete="off" />
                       <span class="input-group-btn">
                           <button id="filter" class="btn btn-primary btn-block" onclick="searchStationTable();">
                               <span class="glyphicon glyphicon-search">Search</span>
                           </button>
                       </span>
                       </div>
                    </div>
                </form>
               </div>
            </div>
        </div>

    </div>
</div>
@if($attendances != $date)
<form action="{{url('MarkAttendanceClass')}}" method="post">
    @csrf
    @if($classes)
    @include('teachers.attendances.mark_attendance')

    <button type="submit" id="addAttendance" class="btn bg-navy pull-right"><i class="fa fa-pencil"></i> Mark-Attendance</button>
    @endif

</form>
@endif
</div>
</div>
<div class="text-center">

</div>
</div>
@endsection

{{-- here will be our js part okay --}}
@if($classes)
@include('teachers.attendances.day_attendance') 
@endif
@section('scripts')
<script type="text/javascript">

// {{-- i will explain this script later okay  --}}

        $('#semester_id').on('change',function(e){
        var semester_id = $('#semester_id').val();
          getStudentsByclass()
          $('#department_id').empty();
          $('#class_id').empty();
          $('#course_id').empty();


        });

        $('#faculty_id').on('change',function(e){
        var faculty_id = $('#faculty_id').val()
        getByfaculty()
          $('#class_id').empty();
          $('#course_id').empty();
        });

        $('#department_id').on('change',function(e){
        var department_id = $('#department_id').val()
        getBydepartment()
        $('#course_id').empty();
        });

        $('#class_id').on('change',function(e){
        var class_id = $('#class_id').val()
        getBycourse()
        });

function getStudentsByclass(){

  var semester_id = $('#semester_id').val()
  var degree_id = $('#degree_id').val()
  var faculty_id = $('#faculty_id')
  $(faculty_id).empty();
  $('#faculty_id').append($('<option>').text("--Select Faculty--").attr('value',""));
        $.get("{{ url('class-attendance') }}",
        {'semester_id':semester_id},function(data){
        console.log(data);
$.each(data,function(i,f){
    $(faculty_id).append($('<option/>',{
            value : f.faculty_id,
            text  : f.faculty_name

    }))
})



})
}

function getByfaculty(){

  var faculty_id = $('#faculty_id').val()
  var department_id = $('#department_id')
  $(department_id).empty();
  $('#department_id').append($('<option>').text("--Select Department--").attr('value',""));
        $.get("{{ url('dynamic-by-faculty') }}",
        {'faculty_id':faculty_id},function(data){

        console.log(data);
 $.each(data,function(i,d){
    $(department_id).append($('<option/>',{
            value : d.department_id,
             text  : d.department_name

    }))
 })

})
}

function getBydepartment(){
var department_id = $('#department_id').val()
var class_id = $('#class_id')
$(class_id).empty();
  $('#class_id').append($('<option>').text("--Select Class--").attr('value',""));
      $.get("{{ url('dynamic-by-class') }}",
      {'department_id':department_id},function(data){

      console.log(data);
$.each(data,function(i,c){
  $(class_id).append($('<option/>',{
          value : c.id,
           text  : c.class_name

  }))
})


})
}

function getBycourse(){
var class_id = $('#class_id').val()
var course_id = $('#course_id')
$(course_id).empty();
  $('#course_id').append($('<option>').text("--Select Course--").attr('value',""));
      $.get("{{ url('dynamic-by-course') }}",
      {'class_id':class_id},function(data){

      console.log(data);
$.each(data,function(i,c){
  $(course_id).append($('<option/>',{
          value : c.id,
           text  : c.id

  }))
})


})
}


   $('#attendance_date').datetimepicker({
                        format: 'DD-MM-YYYY',
                        useCurrent: false
                        // autoCompelete: false
                    });

    $('#attendance_date').on('clcik',function(){
    });

$(document).ready(function(){
  if($('#class_id').val() == '')
  {
    $('#addAttendance').hide();
  }else
  {
    $('#addAttendance').show();

    }

alert(1);
    // $('#markAttendance').on('hidden.bs.modal', function (e) {
    //     $('#markAttendance').modal('handleUpdate')
})
})

  $("#class").on('change', function(){
  var classid = $("#class").val();
  //alert(classid);
alert(1)
  if($('#class').val() == '')
  {
    $('#addAttendance').hide();
  }else
  {
    $('#addAttendance').show();

    }

  $.ajax({
    type: 'get',
    dataType: 'html',
    url: '{{ url ('/get/attendance/class')}}',
    data: {'class_id': classid},

    success:function(data){
      console.log(data);
        $("#student").html(data);

    }
  });
});

$('#attendance_date').datetimepicker({
                      format: 'DD-MM-YYYY',
                      useCurrent: false
                      // autoCompelete: false
   });

   function attendance_date(val) {
  document.getElementById('attendance_date1').value = val;

}



</script>
@endsection