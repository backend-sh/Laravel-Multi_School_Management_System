@php 
use App\Institute;
$institute = Institute::where('school_id', auth()->user()->school_id)->first();
@endphp

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Marks Sheet</title>


    <link rel="stylesheet" type="text/css" href="{{asset('markssheetcontent/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('markssheetcontent/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('markssheetcontent/result.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('markssheetcontent/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('markssheetcontent/stylesheet.css')}}">
    <script type="text/javascript">
        //<![CDATA[
        var Croogo = {"basePath":"\/","params":{"controller":"student_results","action":"index","named":[]}};
        //]]>
    </script>

    <script type="text/javascript" src="{{asset('/markssheetcontent/jquery-1.8.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/markssheetcontent/js.js')}}"></script>
    <script type="text/javascript" src="{{asset('/markssheetcontent/admin.js')}}"></script>

<style type="text/css">
.btn-print {
    color: #ffffff;
    background-color: #2e032e;
     /* #49b3e2; */
    border-color: #aed0df;
    float: right;

    font-size: 40px;
    padding: 5px;
    margin: 10px 10px;
    border-radius: 20px;
}

.btn-print:hover,
.btn-print:focus,
.btn-print:active,
.btn-print.active,
.open .dropdown-toggle.btn-print {
  color: #ffffff;
  background-color: rgb(117, 5, 61);
  border-color: rgb(0, 0, 0);
}

.btn-print:active,
.btn-print.active,
.open .dropdown-toggle.btn-print {
  background-image: none;
}

.btn-print .badge {
  color: #34BA1F;
  background-color: #ffffff;
}
@media print {
  .page {
    margin: 0;
    border: initial;
    border-radius: initial;
    width: initial;
    min-height: initial;
    box-shadow: initial;
    background: initial;
    page-break-after: always;
  }
}

.test{
    font-size:12px !important;
    color: #34BA1F;
}
</style>

  <style>
  .rotate_text {
    writing-mode: vertical-lr;
    -webkit-writing-mode: vertical-lr;
    -ms-writing-mode: vertical-lr;
    -webkit-transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
    -o-transform: rotate(-180deg);
    transform: rotate(-180deg);
}

.rotated_cell {
    width: 10%;
    text-align: center !important;
    vertical-align: bottom;
    padding: 1px;
    padding-bottom: 10px;
    padding-top: 20px;
    background:#FFE4E1;
}

.column {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
  </style>

  <style>

  html {
  font-family:arial;
  font-size: 18px;
}

.card{
  border: none !important;
}

.td{
  border: 1px solid #726E6D;
  /* padding: 10px; */
  font-size: 13px;
  /* line-height: 1.4px; */
  /* height: 0.5em !important; */
}

.td-header{
  border: 1px solid #726E6D;
  /* font-size: 13px; */
  font-weight: bold !important;
}

.td-bottom{
  border: 1px solid #726E6D;
  /* padding: 10px; */
  font-size: 8px !important;
  color: black !important;
  /* line-height: 1.4px; */
  /* height: 0.5em !important; */
}

.td-body{
  border: 1px solid #726E6D;
  padding: 10px;
  width: 1em !important;
  font-size: 13px;
  line-height: 1px;
  text-align: center !important;
  height: 0em !important;
  font-weight: bold !important;
}

.td-body1{
  border: 1px solid #726E6D;
  padding: 10px;
  width: 1em !important;
  font-size: 10px;
  line-height: 1px;
  /* text-align: center !important; */
  height: 0em !important;
}

.td-footer{

  border-left: 1px solid #726E6D;
  border-bottom: 1px solid #726E6D;
  padding: 15px;
}

.td-footer1{

  /* border-left: 1px solid #726E6D; */
  border-bottom: 1px solid #726E6D;
  padding: 15px;
}

thead{
  font-weight:bold;
  text-align:center;
  /* background: #625D5D; */
  color:rgb(3, 3, 3);
}

table {
  border-collapse: collapse;
}

.footer {
  text-align:right;
  font-weight:bold;
}

tbody >tr:nth-child(odd) {
  /* background: #D1D0CE; */
}

</style>

</head>

<body class="scms-result-print page">
  <button class="btn-print" onclick="printDiv('printableArea')">Print</button>
<div id="printableArea">
  <div class="wraperResult">
    <div class="resHdr-bottom">

        <style>
  .hr-class{
    border: 2px solid rgb(1, 40, 49) !important;
  }
  .signature{
    border: 1px solid rgb(206, 206, 206) !important;
    width: 80px !important;
    float: right;
  }
  .signature-director{
    /* border: 1px solid rgb(105, 103, 103) !important; */
    width: 120px !important;
    text-align: center !important;
    margin-top:5%;
    color:black !important;
  }
  .signa{
      text-align: center !important;
      padding: 29%;
  }
</style>
 <div class="container-fluid">

  <table style="width:100%" class="header-title">
  <tr>
  <td   style="text-align: left">
 <span style="line-height:1.6; font-weight: bold; text-transform:uppercase">
    {{-- <img src="" width="150" alt=""> --}}
            <img src="{{ $institute->image != '' ? asset('institute_logo/'.$institute->image) : asset('institute_logo/default_logo.jpg') }}" alt="" class="resLogo"  style="width:90px; margin-left:30px">            <div class="schoolIdentity">
  
</span>
  </td>
  <td   style="text-align: right">
  
   <span style="line-height:1.3; font-size:14px; font-weight: bold; text-transform:uppercase; font-family:'Times New Roman', Times, serif">
  Angle Rue Dumez et Multidor, Maïs Gâté <br>
  Port-au-Prince, Haïti <br>
  www.amusarts.net  <br>
  50937436044 <br>
  pmucommunucatiion@gmail.com
  </span>
  </td>

  </tr>
  </table>
  <hr class="hr-class">
  <div class="" style="text-align: center !important; font-size:15px;">
            <strong >BULLETIN SCOLAIRE <br>
          Année Scolaire 2019 -2020</strong>
  </div>
  <table style="width:100%" class="header-title">
  <tr>
  <td   style="text-align: left">
 <span style="line-height:1.6;  font-size:12px; font-weight: bold; text-transform:uppercase">
   <label for="">Nom: </label> &nbsp;
   <span> {{$student->first_name}} </span> <br>

   <label for="">Prénom: </label> &nbsp;
   <span> {{$student->last_name}} </span>
  </span>
  </td>
  <td  style="text-align: right">
   <span style="line-height:1.6;  font-size:12px; font-weight: bold; text-transform:uppercase">
    <label for="">Class: </label> &nbsp;
   <span> </span> <br>

   <label for="">Période: </label> &nbsp;
   <span style="font-weight: bold">  7 Jan - 14 Fév 2020 </span>
  </span>
  </td>

  </tr>
  </table>
           
        </div><!-- end of schoolIdentity -->
    </div><!-- end of resHdr -->

    <div class="resContainer">
        {{-- <div class="resTophdr"  style="margin-bottom:40px"> --}}

        <div class="btmcontainer">
            <div class="overalreport-left overalreportAll">
                {{-- <h2 class="markTitle"></h2> --}}
    <table style="margin-top: 5%">
    <thead>
      <tr>
        <td  class="td1" colspan="3" align="right"><b>Période</b> </td>
        <td  class="td-body rotated_cell" style="text-align: center !important; padding-left: 4% !important" rowspan="3"> <div class="rotate_text"> coefficients</div> </td>
        <td  class="td-header" colspan="4"> <strong>1er Contrôle</strong> </td>
        <td  class="td-body rotated_cell" rowspan="3" style="padding-left: 3% !important"> <div class="rotate_text">Mention</div> </td>
      </tr>
      <tr>
        <td  class="td-body" colspan="3">Matières </td>
        <td  class="td-body1" colspan="1"> 20% </td>
        <td  class="td-body1" colspan="1"> 20% </td>
        <td  class="td-body1"> 60% </td>
        <td  class="td-body1"> 100% </td>
      </tr>
      <tr>
        <td  class="td" colspan="3" style="font-size: 12px; background:#FFE4E1">Langues, Littératures Et Art  </td>
        <td  class="td-body" style="background:#FFE4E1;"> DT </td>
        <td  class="td-body" style="background:#FFE4E1;"> TT </td>
        <td  class="td-body" style="background:#FFE4E1;"> EF </td>
        <td  class="td-body" style="background:#FFE4E1;"> NT </td>
      </tr>
      
    </thead>
    <tbody>
             
                {{-- <tr>
                 <td>{{$subject->subcode}}</td>
                    <td class="cTitle">{{$subject->subname}}</td>
                    <td colspan="2"><b>{{$subject->written}}</b></td>
                    <td colspan="2"><b>{{$subject->mcq}}</b></td>
                    <td colspan="2"><b>{{$subject->ca}}</b></td>
                    <td colspan="2"><b>{{$subject->practical}}</b></td>


                    <td><b>{{$subject->total}}</b></td>
                    <td><b>{{$subject->outof}}</b></td>
                    <td><b>{{$subject->point}}</b></td>
                    <td><b>{{$subject->grade}} </b></td> 
                    <!--<td><b>&nbsp;</b></td>
                    <td><b>&nbsp;</b></td>
                    <td><b>&nbsp;</b></td>
                    <td><b>&nbsp;</b></td>
                    <td><b>&nbsp;</b></td>
                    <td><b>&nbsp;</b></td>-->
                </tr> --}}
                
        @foreach($subcollection as $subject)

        @if(!empty($subject))
      <tr>
        <td  class="td" rowspan="7"></td>
        <td  class="td" colspan="2">{{$subject->subname}}</td>
        <td  class="td-body"> 100</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A </td>
        <td  class="td-body"> 12.0 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
        @endif
        @endforeach
      <tr>
        {{-- <td  class="td"> </td> --}}
        <td  class="td" colspan="2">Ethics </td>
        <td  class="td-body"> 100</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>

      </tr>
      <tr>
        {{-- <td  class="td"></td> --}}
        <td  class="td" colspan="2">Digital Signal Processing </td>
        <td  class="td-body"> 100</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A </td>
        <td  class="td-body"> 12 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>

      </tr>
      <tr>
        {{-- <td  class="td"> </td> --}}
        <td  class="td" colspan="2">Combinatorial Algorithms </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> B+ </td>
        <td  class="td-body"> 9.99</td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>

      </tr>
      <tr>
        {{-- <td  class="td"></td> --}}
        <td  class="td" colspan="2">Multi-Variable Calculus </td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
       <tr>
        {{-- <td  class="td"></td> --}}
        <td  class="td" colspan="2">Multi-Variable Calculus </td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
       <tr>
        {{-- <td  class="td"></td> --}}
        <td  class="td" colspan="2">Multi-Variable Calculus </td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>

       <tr>
        <td  class="td" rowspan="5"></td>
        <td  class="td" colspan="2">Mathématiques: Algèbre</td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
      <tr>
        {{-- <td  class="td"></td> --}}
        <td  class="td" colspan="2"><b style="font-size: 14px">Mathématiques: Géométrie</b></td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
      <tr>
        {{-- <td  class="td"></td> --}}
        <td  class="td" colspan="2">Sciences Physiques</td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
      <tr>
        {{-- <td  class="td"></td> --}}
        <td  class="td" colspan="2">Informatique</td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
      <tr>
        {{-- <td  class="td"></td> --}}
        <td  class="td" colspan="2">Électricité Bâtiment</td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>

       <tr>
        <td  class="td" rowspan="7"></td>
        <td  class="td" colspan="2"><b style="font-size: 14px">Sciences Expérimentales </b></td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
      <tr>
        <td  class="td" colspan="2">Éducation Sexuelle </td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
      <tr>
        <td  class="td" colspan="2">Sciences Expérimentales</td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
      <tr>
        <td  class="td" colspan="2">Sciences Expérimentales</td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
      <tr>
        <td  class="td" colspan="2">Sciences Expérimentales </td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
      <tr>
        <td  class="td" colspan="2">Sciences Expérimentales</td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>
      <tr>
        <td  class="td" colspan="2">Sciences Expérimentales </td>
        <td  class="td-body">200</td>
        <td  class="td-body"> 3.0 </td>
        <td  class="td-body"> A- </td>
        <td  class="td-body"> 10.98 </td>
        <td  class="td-body"> 200</td>
        <td  class="td-body"> </td>
      </tr>

       
    </tbody>
    <tfoot>
      <tr>
        <td class="td-footer" rowspan="3"></td>
        <td  class="td-footer1" style="border: none; font-size: 13px; margin-top: 10px; line-height: 2px" colspan="4" class="footer" align="right">Sur</td>
        <td  class="td"> 2800</td>
        <td  class="td"> Total</td>
        <td  class="td" colspan="2" align="center" ><b>2800</b></td>
      </tr>
      <tr>
        <td  class="td-footer1" style="font-size: 13px; margin-top: 3px" colspan="4" rowspan="2" class="footer" align="right">Nombre d’élèves</td>
        <td  class="td" >10</td>
        <td  class="td" >Moyenne</td>
        <td  class="td" colspan="2"></td>
        {{-- <td  class="td" colspan="2"></td> --}}
      </tr>
       <tr>
        {{-- <td  class="td" colspan="4" rowspan="2" class="footer" align="right">Nombre d’élèves</td> --}}
        <td  class="td" ></td>
        <td  class="td" >Place</td>
        <td  class="td" colspan="2"></td>
        {{-- <td  class="td" colspan="2"></td> --}}
      </tr>
  </table>
               
            </div><!-- end of overalreport -->

            <div class="overalreport-right gpagrading-right" style="margin-top:10%">
                <label class="" style="font-size: 15px; margin-top:2%; font-weight:bold;">Disciplines Générales et Valeurs</label>
                <table class="pagetble" style="height:181px; font-size:10px !important" >
                    <thead>
                    <tr>
                        <td  colspan="3" align="right" style="border-left: 1px solid #fff !important"></td>
                        <td  class="td" colspan="6" style="background:#FFE4E1"> <b>Observations</b> </td>
                    </tr>
                    <tr>
                        <td  style="font-size:10px !important; text-align:left" class="td" colspan="3">Retard </td>
                        <td  style="font-size:10px !important; text-align:left" class="td" colspan="4">  </td>
                    </tr>
                    <tr>
                        <td  style="font-size:10px !important; text-align:left" class="td" colspan="3">Absence </td>
                        <td  style="font-size:10px !important; text-align:left" class="td" colspan="4">  </td>
                    </tr>
                    <tr>
                        <td  style="font-size:10px !important; text-align:left" class="td" colspan="3">Respect + Discipline  </td>
                        <td  style="font-size:10px !important; text-align:left" class="td" colspan="4"> </td>
                    </tr>
                    <tr>
                        <td  style="font-size:10px !important; text-align:left" class="td" colspan="3"><b>Solidarité + Participation</b> </td>
                        <td  style="font-size:10px !important; text-align:left" class="td" colspan="4"> </td>
                    </tr>
                    <tr>
                        <td  style="font-size:10px !important; text-align:left" class="td" colspan="3">Esprit de services  </td>
                        <td  style="font-size:10px !important; text-align:left" class="td" colspan="4"> </td>
                    </tr>
                    </thead>
                </table>
                   
                    <br>
                <table style="width: 100% !important; height:106px; border-top: 1px solid gray" class="pagetble" >
                    <tbody>
                        <thead >
                        <tr>
                            <td  colspan="6" align="left" style="background:#FFE4E1"><b>Moyenne </b></td>
                            <td  colspan="6" align="left" style="background:#FFE4E1"><b>Observation </b></td>
                        </tr>
                        <tr>
                            <td  class="td" colspan="6" rowspan="3"></td>
                            <td  class="td" colspan="6" rowspan="3"> </td>
                        </tr>
                        </thead>
                    </table>
                    <br>
                    <table class="pagetble" style="height:181px; font-size:10px; border-top: 1px solid gray">
                    <thead >
                    <tr>
                        <td  colspan="3" align="left" style="background:#FFE4E1"><b>Légende</b></td>
                    </tr>
                    <tr>
                        <td  class="td-bottom" colspan="3">Mention  </td>
                        <td  class="td-bottom" colspan="4"> Équivalence </td>
                        <td  class="td-bottom" colspan="4"> DT: Devoir total </td>
                    </tr>
                    <tr>
                        <td  class="td-bottom" colspan="3">EX : Excellent </td>
                        <td  class="td-bottom" colspan="4"> A= (90-100) </td>
                        <td  class="td-bottom" colspan="4"> TT=Test total </td>
                    </tr>
                    <tr>
                        <td  class="td-bottom" colspan="3">TB= Très Bien </td>
                        <td  class="td-bottom" colspan="4"> B= (80-89) </td>
                        <td  class="td-bottom" colspan="4"> EF: évaluation finale </td>
                    </tr>
                    <tr>
                        <td  class="td-bottom" colspan="3"><b>AB= Assez Bien</b> </td>
                        <td  class="td-bottom" colspan="4"> C= (70-79)  </td>
                        <td  class="td-bottom" colspan="4"> Nt=Notes Totales </td>
                    </tr>
                    <tr>
                        <td  class="td-bottom" colspan="3">AB= Assez Bien </td>
                        <td  class="td-bottom" colspan="4"> D= (50-69)</td>
                        <td  class="td-bottom" colspan="4"> ITAP: Initiation à la Technologie et aux </td>
                    </tr>
                    <tr>
                        <td  class="td-bottom" colspan="3">TF: Très Faible  </td>
                        <td  class="td-bottom" colspan="4"> E : (≤49) </td>
                        <td  class="td-bottom" colspan="4"> Activités Productive</td>
                    </tr>
                    </thead>
                </table>
                <br>
                    <strong  class="signa">Signatures</strong><br><br>
                <label for="">Direction </label>  
                <div class="" style="float: right;">
                    <hr class="signature"><br>
                    <p for="" style="text-align: center !important; margin-top: 2px ">Parents</p>
                </div>

                
            </div><!-- end of overalreport -->


        </div><!-- end of resmidcontainer -->
    </div><!-- end of resContainer -->
    <hr class="signature-director" >
   <div class="" style="text-align: center !important">
        <label for="" > Ismael JOSEPH <br> Director</label>
   </div>
   <div class="" style="text-align: center !important; font-size:11px">
       <p>"… Faites tout pour la gloire de DIEU” 1 Co 10 :31</p>
   </div>



   <script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

   </script>
</body><!-- end of fromwrapper-->
</html>

