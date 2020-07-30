@include('attendances.style')
@include('table_style')

    <div class="box-body">
    @php
       $date = date('d-m-Y');
    @endphp

    <div class="panel-default">
        <div class="panel-heading">
            <div class="col-md-2 pull-right">
                <input type="text" name="class_name"  id="class_nam" class="form-control edit_atten" value="{{$edited_date->class_name}}" disabled >
            </div>
            <div class="col-md-2 pull-right">
            <input type="text" name="semester_name"  id="semester_nam" class="form-control edit_atten" value="{{$edited_date->semester_name}}" disabled >
            </div>
            <h3 style="font-weight:bold;text-transform: uppercase; text-align:left">
             <i class="fa fa-calendar"></i> Update CLASS<b style="color:red">  ATTENDANCE</b>
            </h3>

            </div>
            <form action="{{url('teacher_update_attendance')}}" method="post">
                @csrf
            <div class="panel-body">
                <div  id="wait"></div>
                <div class="form-group ">
                    {{-- {{$date}} --}}
                  <div class="col-md-6">
                    <?php
                        $date = date('d-m-Y');
                    $nameOfDay = date('l', strtotime($date));
                    echo "<h4 style='color:red; font-weight:bolder;text-transform:uppercase'>$nameOfDay   <b style='color:black'>Attendance</b></h4>  ";
                    ?>

                {{-- <hr class="line"> --}}

                  </div>
                  <div class="col-md-2">
                          {{-- <b style="font-weight:bolder;">  Date: </b>  --}}
                          <input type="text" name="attendance_date"  id="attendance_dat" style="margin-left:240%;" class="form-control" value="{{$edited_date->attendance_date}}" disabled >
                        </div>

                          </div>
                          </div>
                        </div>

        <div class="table-responsive">

        <table class="table table-striped table-bordered table-hover" id="student">
            <thead>
                <tr>
                <th>Roll No.</th>
                    <th>Student Name</th>
                    <th>Present</th>
                    <th>Absent</th>
                    <th>Late</th>
                    <th>Sick</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($edit_attendances as $key => $item)
                <tr>
                <td>{{$item->roll_no}}
                <input type="hidden" id="roll_no" name="roll_no" value="{{$item->roll_no}}">
                <input type="hidden" name="teacher_id" id="teacher_id" value="{{$item->teacher_id}}">
                <input type="hidden" name="class_id" id="class_id" value="{{$item->class_code}}">
                <input type="hidden" name="course_id" id="course_id" value="{{$item->course_id}}">
                <input type="hidden" name="attendance_date" id="attendance_date" value="{{$date}}">
                <input type="hidden" name="edit_date" id="edit_date" value="{{$date}}">

                </td>
                <td>
                <input class="atten" type="hidden" name="attendance_id[]" id="attendance_id" value="
                {{$item->attendance_id}}" class="form-control"
                style="border:none;" readonly>
                <label for=""> {{$item->student_first_name }} {{$item->student_last_name}}</label>
                </td>
                <td align="center">
                <div id="ck-button-present">
                <label>
                <input style="cursor:pointer;" class="atten" type="checkbox"id="attendance_status" name="attendance_status[{{$item->attendance_id}}]" value="present"
                @if ($item->attendance_status == "present")
                checked
               @endif />
                <span>Present</span>
                </label>
                </div>
                </td>

                <td align="center">
                <div id="ck-button-absent">
                <label>
                <input class="atten" type="checkbox"id="attendance_status" name="attendance_status[{{$item->attendance_id}}]" value="absent"
                 @if ($item->attendance_status == "absent")
                 checked
                @endif />
                <span>Absent</span>
                </label>
                </div>
                </td>

                <td align="center">
                <div id="ck-button-late">
                <label>
                <input class="atten" type="checkbox"id="attendance_status" name="attendance_status[{{$item->attendance_id}}]" value="late"
                @if ($item->attendance_status == "late")
                 checked
                @endif />
                <span>Late</span>
                </label>
                </div>
                </td>

                <td align="center">
                <div id="ck-button-sick">
                <label>
                <input class="atten" type="checkbox"id="attendance_status" name="attendance_status[{{$item->attendance_id}}]" value="sick"
                @if ($item->attendance_status == "sick")
                checked
               @endif />
                <span>Sick</span>
                </label>
                </div>
                </td>

                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
    <button type="submit" class="btn bg-navy  pull-right"><i class="fa fa-refresh"></i> Update Attendance</button>
    </form>
    </div>
{{-- </div>  --}}
{{-- </div>
</div>
</div> --}}

