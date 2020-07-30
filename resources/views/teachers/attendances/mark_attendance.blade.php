
@include('attendances.style') 

@php
   $date = date('d-m-Y');

   $monthly = date('F', strtotime($date));
   $year = date('Y', strtotime($date));
   $day = date('l', strtotime($date));
@endphp
@if ($classes)
<div class="table-responsive">

    <table class="table  table-hover" id="student">
        <thead>
            <tr>
            <th>Roll No.</th>
                <th>Student Name</th>
                <th>Present</th>
                <th>Absent</th>
                <th>Late</th>
                <th>Sick</th>
                {{-- <th>hllo</th> --}}
            </tr>
        </thead>
        <tbody>
        <b></b>
       
        @foreach ($students as $key => $item)
            <tr>
            <td>{{$item->roll_no}}
            <input type="hidden" id="roll_no" name="roll_no" value="{{$item->roll_no}}">
            <input type="hidden" name="teacher_id" id="teacher_id" value="{{$item->teacher_id}}">
            <input type="hidden" name="class_id" id="class_id" value="{{$item->class_code}}">
            <input type="hidden" name="semester_id" id="semester_id" value="{{$item->semester_id}}">
            <input type="hidden" name="course_id" id="course_id" value="{{$item->course_id}}">
            <input type="hidden" name="degree_id" id="degree_id" value="{{$item->degree_id}}">
            <input type="hidden" name="attendance_date" id="attendance_date1" value="{{$date}}">
            <input type="hidden" name="month" id="month" value="{{$monthly}}">
            <input type="hidden" name="year" id="year" value="{{$year}}">
            <input type="hidden" name="day" id="day" value="{{$day}}">
            </td>
            <td>
            <input class="atten" type="hidden" name="student_id[]" id="student_id" value="
            {{$item->student_id}}" class="form-control"
            style="border:none;" readonly>
            <label for=""> {{$item->student_firstname }} {{$item->student_lastname}}</label>
            </td>
            <td align="center">
            <div id="ck-button-present">
            <label>
            <input style="cursor:pointer;" class="atten" type="radio"id="attendance_status"
            name="attendance_status[{{$item->student_id}}]" value="present" / checked >
            <span>Present</span>
            </label>
            </div>
            </td>

            <td align="center">
            <div id="ck-button-absent">
            <label>
            <input class="atten" type="radio"id="attendance_status"
            name="attendance_status[{{$item->student_id}}]" value="absent" />
            <span>Absent</span>
            </label>
            </div>
            </td>

            <td align="center">
            <div id="ck-button-late">
            <label>
            <input class="atten" type="radio"id="attendance_status"
            name="attendance_status[{{$item->student_id}}]" value="late" />
            <span>Late</span>
            </label>
            </div>
            </td>

            <td align="center">
            <div id="ck-button-sick">
            <label>
            <input class="atten" type="radio"id="attendance_status"
            name="attendance_status[{{$item->student_id}}]" value="sick" />
            <span>Sick</span>
            </label>
            </div>
            </td>
            </tr>
            @endforeach


        </tbody>

    </table>
</div>

@endif

