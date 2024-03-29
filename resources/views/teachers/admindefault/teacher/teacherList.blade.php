
@extends('layouts.new-layouts.app')
@include('fee.stylesheet.css-payment')
@section('content')
    <!-- <section class="content-header">

<h1 class="pull-right" style="margin-top: -10px;margin-bottom: 5px;margin-right: 50px"> <i class="fa fa-user"></i> STUDENT<b style="color:red">LIST</b></h1>
<a  class="pull-left btn btn-danger" href="{{url('home')}}" style="margin-top: -10px;margin-bottom: 5px;margin-right: 50px"><i class="fa fa-back-arrow" aria-hidden="true">Return</i></a>
<style>
th{
  text-align: center;
  font-family: 'Times New Roman', Times, serif;
  font-style: initial;
  font-weight: bold;
  font-size:large
}
</style> -->

    <!-- </section> -->
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
              <div class="clearfix"></div>
        @if($message = Session::get('success'))
      <div class="alert-success">
        <p>{{$message}}</p>
      </div>
        @endif

       <div class="page-title">
              <div class="title_left">
                <h2>MANAGE TEACHERS</h2>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table Teachers</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                      <div class=" pull-right">
                      <li>Display by </li>
                      <select name="display" id="display" class="form-control col-md-2 select_2_single1" style1="margin-right:100%">
                      <option value="table" selected="selected">Table</option>
                      <option value="gride">Gride</option>
                      </select>
                      </div>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

 
  <div class="clearfix"></div>
  <div class="" id="table">
        @include('teachers.teacher.table_list')
  </div>
      <!-- <hr> -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <ul class="pagination" id="myPager"></ul>
        </div>
      </div>
      </div>
      <div class="" id="gride" style="display:none">
        @include('teachers.teacher.gallary_list')
        </div>
</div>    
</div>    
</div>
@endsection

@section('scripts')
@include('fee.script.calculate') 
@include('fee.script.payment')
<script>
$(document).ready(function(){


  var _token = $('input[name="_token"]').val();

function Sort_gender(sort_by_gender = '')
{
$.ajax({
url:"{{ url('sort/teachers') }}",
method:"GET",
data:{sort_by_gender:sort_by_gender, _token:_token},
//    dataType:"json",
success:function(response)
{


 
 $('#show-teacher-list').html(response);
 $('#show-total').show();
 $('#fee_report').show();
 $('#print-student-transaction').hide();
 // $('.show-student-paid').html(data) 
}
})
}


$('#display').on('change', function(){
  var table = $(this).val();

  if(table == 'table'){
   $('#gride').hide();
   $('#table').show();

  }else if(table == 'gride')
  {
    $('#gride').show();
   $('#table').hide();
  }
})



function fetch_data_roll_no(roll_no = '')
  {
    $.ajax({
    url:"{{ url('sort/teachers') }}",
    method:"GET",
    data:{roll_no:roll_no,  _token:_token},
    //  dataType:"json",
    success:function(response)
    {
      
      $('#show-teacher-list').html(response);
      $('class_name').html(response.class_name);
      $('#show-total').show();
      $('#print-student-transaction').show();
      $('#fee_report').show();
    }
    })
  }

  //Filter by Class Code 
$('#sort_by_gender').on('change',function()
{

    var sort_by_gender = $('#sort_by_gender').val();

    if(sort_by_gender != '')
    {
      Sort_gender(sort_by_gender);
    $('#roll_id').show();
    $('#print-student-transaction').hide();

    }
    else
    {
      Sort_gender();
    }
});

$('#filter').click(function(){
  var roll_no = $('#roll_no').val();

    if(roll_no != '')
    {
      fetch_data_roll_no(roll_no)
      $('#roll_id').hide();
      $('#print-student-transaction').show();

    }
    else
    {
    alert('Enter Student Roll Number to search please!');
    $('#show-total').hide();
    $('#fee_report').hide();
    }
  });


  $('#refresh').click(function(){
    $('#roll_no').val('');
    $('#diaplay').val();
    fetch_data_roll_no();
    Sort_gender();
    $('#show-total').hide();
    $('#fee_report').hide();

    $('#gride').hide();
    $('#table').show();
    
    $('#sort_by_gender option').prop('selected', function () { 
      if (this.defaultSelected) { 
                  this.selected = true; 
                  return false; 
              } 
    }); 

    $('#display option').prop('selected', function () { 
      if (this.defaultSelected) { 
                  this.selected = true; 
                  return false; 
              } 
    }); 
  });










// GET SEMESTER DEGREEE
$('#semester_id').on('change',function(e){
getStudentsByclass()
var semester_id = $(this).val();
var degree = $('#degree_id')
$(degree).empty();
$.get("{{ route('dynamicDegrees') }}",{semester_id:semester_id},function(data){  

console.log(data);
$.each(data,function(i,l){
$(degree).append($('<option/>',{
value : l.degree_id,
text  : l.degree_name
}))
}) 
})
});

// GET SEMESTER DEGREEE
$('#faculty_id').on('change',function(e){
getStudentsByclass()
var faculty_id = $(this).val();
var department_id = $('#department_id')
$(department_id).empty();
$.get("{{ route('dynamicDepartments') }}",{faculty_id:faculty_id},function(data){  
    
console.log(data);
$.each(data,function(i,l){
$(department_id).append($('<option/>',{
value : l.department_id,
text  : l.department_name
}))
}) 
})
});

// GET SEMESTER DEGREEE
// $('#faculty_id').on('change',function(e){
function getStudentsByclass(){
var faculty_id = $('#faculty_id').val();
var department_id = $('#department_id').val()
var class_id = $('#class_id').val()
var semester_id = $('#semester_id').val()
var degree_id = $('#degree_id').val()
var student_id = $('#student_id')
$(student_id).empty();
$.get("{{ route('dynamicStudentsByClass') }}",
{faculty_id:faculty_id,'department_id':faculty_id,'class_id':class_id,
'semester_id':semester_id,'degree_id':degree_id},function(data){  

console.log(data);
$.each(data,function(i,l){
$(student_id).append($('<option/>',{
value : l.id,
text  : l.first_name + " " + l.last_name
// text  : 
}))
}) 
})
}
});
</script>
@endsection 


