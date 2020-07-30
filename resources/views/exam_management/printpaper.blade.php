<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Academic Information System| (AIS)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- The styles -->
  <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
  <link href="css/charisma-app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/markssheetcontent/result.css')}}">
   
    <script type="text/javascript">
        //<![CDATA[
        var Croogo = {"basePath":"\/","params":{"controller":"student_results","action":"index","named":[]}};
        //]]>
    </script>

    <script type="text/javascript" src="{{url('/markssheetcontent/jquery-1.8.2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/markssheetcontent/js.js')}}"></script>
    <script type="text/javascript" src="{{url('/markssheetcontent/admin.js')}}"></script>
  <script src="bower_components/jquery/jquery.min.js"></script>


  <link rel="shortcut icon" href="img/favicon.ico">
<style type="text/css">
  .wraperResult1 {
    /* background: #fff url(../images/markssheet/certificate-bg.png) no-repeat; */
    margin: 0 auto;
    padding: 0;
    font-family: "Times New Roman", Times, serif;
    color: #000;
    position: relative;
    background-color: #fff;
    overflow: hidden;
    
}
@media print {
  footer {page-break-after: always;}
}
.print:last-child {
     page-break-after: auto;
}
.form-inline {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-align: center;
    align-items: center;
}

.resHdr {
    width: 660px;
    height: 161px !important;
     padding: 0 0 0 0 !important; 
    margin: 0 auto;
    /* background: url(../images/reshdr-bg.png) no-repeat center bottom; */
    position: relative;
    z-index: 2;
    text-align: center;
}
.restopleft {
   
    font-size: 13px !important;
    
}

.hdr-result{
  padding-bottom:10px;
}

</style>

</head>

<body>
  <div class="ch-container">
    <div class="row">
      <div class="box col-md-12">
        <body>
    <div id="app">
       
        <div class="container-fluid">
            <div class="row">
                <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                        <div class="" id="" >
                        <!-- <button type="button" class="btn btn-info pull-right" style="margin-right: 5px;"><i class="fa fa-print" onclick="window.print();"></i> Print
                        </button> -->
                              @for($i=0;$i<count($gmcqs);$i++)
                                  <?php  
                                  $mcqNum = 1; 
                                  $shortNum = 1; 
                                  $longNum = 1; 
                                  ?>
                              <div id="printableArea">
                                <div class="wraperResult1">
                                  <div class="resHdr">
                                      <img src="{{asset('FrontEnd/img/Logo_of_UTG.gif')}}" alt="logo" srcset="" style="width:70px; margin-left:30px">
                                      <div class="schoolIdentity">
                                          <img src="{{url('images/markssheet/success.png')}}"style="width:65%;" alt="">
                                          <div class="hdrText hdr-result">
                                                    <h4>Year 2020</h4>
                                              <div style="width:115px;margin:0 auto;"><hr></div>
                                          </div><!--end of hdrText-->
                                      </div><!-- end of schoolIdentity -->
                                  </div><!-- end of resHdr -->
                                  <br><br><br><br><br><br><br>
                                  <div class="resContainer">
                                      <div class="resTophdr">
                                          <div class="restopleft">
                                              <table class="std-information" style="float:left">
                                                <tr>
                                                  <th class="left">Name:</th>
                                                  <td class="">...........................................................</td> 
                                                  <th class="right">RollNo:</th>
                                                  <td class="">............................................................</td>
                                                  <th class="left">Year:</th>
                                                  <td class=""> ...........................................................</td> 
                                                  </tr>
                                                  <tr><td></td></tr>
                                                  <tr><td></td></tr>
                                                  <tr><td></td></tr>
                                                  <tr>
                                                  <th class="left">Class:</th>
                                                  <td class=""> .........................................................</td>
                                                  <th class="left">Department:</th>
                                                  <td class=""> .........................................................</td>
                                                 <th class="left">Subject:</th>
                                                 <td class="right"> .....................................................</td>
                                               </tr>
                                              
                                              
                                              </table>
                                              {{--<div class="row">
                                              <div class="col-md-12">
                                              <div class="col-md-3">Name :</div>
                                              <div class="col-md-3">Roll No :</div>
                                              <div class="col-md-3">Class:</div>
                                              <div class="col-md-3">Section:</div>
                                              <div class="col-md-3">Subject:</div>
                                              <div class="col-md-3">session : </div>
                                              </div>
                                              </div>--}}
                                          </div><!-- end of restopleft -->
                                        </div>
                                                <br><br><br><br>

                            @foreach($gmcqs[$i] as $qc)
                            <div class="print">
                                @if($qc->question_type == 1)
                                   @if( $longNum==1)
                                  <h1><span class="badge badge-info">Theory Question</span></h1><hr>
                                  @endif
                                    <p style="font-size: 1.2rem">{{$longNum}}: {{ $qc->question_name }}</p>

                                      <?php $longNum++; ?>
                                  @elseif($qc->question_type == 2)
                                     <!-- <h1><span class="badge badge-info">Multiple Choice </span></h1><hr> -->
                                    <p style="font-size: 1.2rem">{{ $mcqNum }}: {{ $qc->question_name }}</p>
                                    <?php
                                    
                                       $questionNum = 1;
                                        if($qc->choices!=''){
                                        $choices = explode(";", $qc->choices);
                                        }else{
                                        $choices = array();
                                        }
                                        $choicenum = 1;
                                       
                                    ?>
                                    <div class="form-group">
                                        
                                        <!-- <div class="form-inline container"> -->
                                            @if($choices)
                                            @foreach($choices as $choice)
                                                <div class="form-check col-sm-3">
                                                    <label for="mc_c{{ $choicenum }}" class="form-check-label">
                                                        <input class="form-check-input1" type="checkbox" name="answer[{{ $questionNum }}]" id="mc_c{{ $choicenum }}" value="{{ $choicenum++ }}">
                                                        {{ $choice }}
                                                    </label>
                                                </div>
                                                &nbsp &nbsp
                                                &nbsp &nbsp
                                                 <!-- <br><br> -->
                                            @endforeach
                                            @endif
                                        <!-- </div> -->
                                    </div>  
                                 <?php  $mcqNum++; ?>
                                @elseif($qc->question_type == 3)
                               
                                @if( $shortNum==1)
                                  <h1><span class="badge badge-info">Basic Question</span></h1><hr>
                                @endif
                                    <p style="font-size: 1.2rem">{{ $shortNum }}: {{ $qc->question_name }}</p>
                                    <div class="form-group">
                                        <div class="form-check-inline">
                                        </div>
                                    </div>
                                     <?php $shortNum++; ?>
                                @endif
                            </div>
                        @endforeach
                        {{--<input type="hidden" name="quiz_event_id" value="{{ $quiz->quiz_event_id }}">--}}
                    </form>
                </main>
            </div>
        </div>
        <footer></footer>
         @endfor
    </div>

    {{--<script src="{{ asset('assets/js/jquery-3.2.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/teckquiz.js') }}"></script>--}}

        </div>
      </div>
    </div>

  </div><!--/.fluid-container-->

  <!-- external javascript -->

  <script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript">
 $( document ).ready(function() {
  
    });
  </script>
</body>
</html>


