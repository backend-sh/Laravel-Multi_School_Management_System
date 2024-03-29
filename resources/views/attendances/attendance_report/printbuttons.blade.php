{{-- -----------------------------PDF BUTTON--------------------- --}}
<div class="btn btn-group" style="margin-top:20px; float:left; margin-right:-25px;  ">
    <button type="button" class="btn btn-danger "><i class="fa fa-file-pdf-o" style="color:white"></i> PDF</button>
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" 
    aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="munu" id="export-menu" >
    <li id="export-to-pdf">
    <a href="{{url('print-single-class-timetable-pdf',$class_name->class_id)}}" class="btn btn">Download PDF</a>
    </li>
    <li role="separator" class="divider"></li>
    <li id="import-to-pdf"><a href="">Import PDF</a></li>
    </ul>
</div>

{{-- -------------------------EXCEL BUTTON--------------------------- --}}
<div class="btn btn-group" style="margin-top:20px; float:left; margin-right:-25px;">
<button type="button" class="btn btn-success "><i class="fa fa-file-excel-o" style="color:white"></i> EXCEL</button>
<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
<span class="caret"></span>
<span class="sr-only">dropdown</span>
</button>
<ul class="dropdown-menu" role="munu" id="export-menu">
<li id="export-to-excel">
<a href="{{url('export-excel-xlsx-courses')}}" class="btn btn-info" style="color:#fff;margin-bottom:3px" >Export Excel To Xlsx</a>
</li>
<li id="export-to-excel">
<a href="{{url('export-excel-xls-courses')}}" class="btn btn-primary"style="color:#fff;margin-bottom:3px" >Export Excel To Xls</a>
</li>
<li id="export-to-excel">
<a href="{{url('export-excel-csv-courses')}}" class="btn btn-warning"style="color:#fff;margin-bottom:3px" >Export Excel To Csv</a>
</li>
<li class="divider"></li>
<li id="import-to-excel"><a data-toggle="modal" data-target="#excel-add-modal" class="btn btn-danger"style="color:#fff" >Import Excel</a></li>
</ul>
</div>
{{-- ---------------------------- WORD BUTTON------------------------- --}}
<div class="btn btn-group" style="margin-top:20px; float:left; margin-right:-25px; ">
<button type="button" class="btn btn-primary "><i class="fa fa-file-word-o" style="color:white"></i> WORD</button>
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="caret"></span>
<span class="sr-only">dropdown</span>
</button>
<ul class="dropdown-menu" role="munu" id="export-menu" >
<li id="export-to-word">
<a href="{{url('pdf-download-class-schedule')}}"  class="btn btn">Export WORD</a>
</li>
<li role="separator" class="divider"></li>
<li id="import-to-word"><a href="">Import WORD</a></li>
</ul>
</div>