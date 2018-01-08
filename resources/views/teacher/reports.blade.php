@extends('layouts.class')
@section('content')
<div class="container">
    <!-- Student-group btn - Desktop view - START -->



    <div class="row">
        <div class="text-center hidden-xs">
            <div class="btn-group">
                <button class="btn " id="student-btn" onclick="window.location.href='{{ route('class.view',request()->route('id')) }}'">
                    <img src="/images/cute1.png" style="width: 25px;">
                        <span>
                            Students
                        </span>
                    </img>
                </button>
                <button "="" class="btn" id="group-btn" onclick="window.location.href='{{ route('groups.view',request()->route('id')) }}'">
                    <img src="/images/group1.png" style="width: 30px;">
                        <span>
                            Groups
                        </span>
                    </img>
                </button>
                <button class="btn active">
                    <img src="/images/view_report_icon.png">
                        <span>
                            View reports
                        </span>
                    </img>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" id="report_container" style="padding: 0px;">
            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3 r_menu_container">
                <span class="r_menu_header">
                    CONNECTIONS
                </span>
                <a href="javascript:void(0);">
                    <img src="/images/cute5.png" />
                        Parent accounts
                </a>
                <a href="javascript:void(0);">
                    <img src="/images/cute6.png" />
                        Student accounts
                </a>
                <span class="r_menu_header">
                    STUDENTS
                    <span class="pull-right">
                        <div class="dropdown">
                            <a aria-expanded="true" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" id="filterDropdown" type="button">
                                First Name
                                <span class="caret">
                                </span>
                            </a>
                            <ul aria-labelledby="filterDropdown" class="dropdown-menu">
                                <li>
                                    <a href="#" onclick="">
                                         Today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Yesterday
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        This Week 
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Last Week
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Most Needs to Work
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Highest Combined
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </span>
                </span>

                <a href="javascript:void(0);" class="active" onclick=" ShowReportClass();">
                    <img src="/images/group1.png" />
                        Whole Class
                </a>
                @foreach($students as $student)
                <a href="javascript:void(0);" class="student_report_list" onclick="ShowReportClass({{ $student->user_id }});">
                    <img src="/images/@if(empty($student->prof_pic))cute2.png @endif" />
                        {{ str_limit(\App\User::where('id',$student->user_id)->first()->name,32) }}

                        
                </a>
                @endforeach
            </div>
            {{-- End of sidebar and student list --}}

            {{-- Start Charts --}}
            <div class="col-md-9 col-lg-9 col-xs-9" style="padding: 0px;">
                  <div class="chart-filter r_menu_header">
                     WHOLE CLASS REPORTS   
                  </div>
                  <div class="col-md-4 col-xs-4 col-lg-4 chart-filter-container" >
                     <div class="dropdown">

                            <input type="hidden" name="sid" id="sid" value="" />
                            <a aria-expanded="true" href="javascript:void(0);" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" id="filterDropdown" type="button">
                                Today 
                                <span class="caret">
                                </span>
                            </a>
                            <ul aria-labelledby="filterDropdown" class="dropdown-menu">
                                 <li>
                               <a href="#" data-id="" onclick="ShowReportClass($('#sid').val(),'Yesterday');">
                                        Yesterday 
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="ShowReportClass($('#sid').val(),'This Week');">
                                         This Week 
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="ShowReportClass($('#sid').val(),'Last Week');">
                                        Last Week
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="ShowReportClass($('#sid').val(),'This Month');">
                                        This Month ({{ date('F')  }})
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Last Month ({{ Date('F', strtotime(date('F') . " last month")) }})
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Most Needs to Work
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Highest Combined
                                    </a>
                                </li>
                            </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-6 pull-right text-right chart-filter-container">
                           <div class="btn-group">
                              <button class="btn btn-xs active" id="group-btn">Attendance</button>
                              <button class="btn btn-xs " id="group-btn">Points</button>
                           </div>
                  </div>

                <canvas id="pie-chart" width="800" height="450"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- student - attendance - footer - start -->
      <nav class="navbar navbar-default navbar-fixed-bottom" style="background-color: white">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-3">
               <ul class="nav navbar-nav navbar-center">
                  <li><a href="{{ route('attendance.view',request()->route('id')) }}"><img src="/images/attendance_icon.png" width="16px" icon="clock" style="margin-right: 1rem;">Attendance</a></li>
                  <li>
                     <a href="multiple_attendance_view.php"><img src="/images/select_multiple_icon.png" width="16px" icon="clock" style="margin-right: 1rem;">Select multiple</a>
                  </li>
                  <li>
                     <a href="" id="random-selection"><img src="/images/random_icon.png" width="16px" icon="clock" style="margin-right: 1rem;">Random</a>
                  </li>
                  <li>
                     <a href=""><img src="/images/timer_icon.png" width="16px" icon="clock" style="margin-right: 1rem;">Timer</a>
                  </li>
                  <li>
                     <a href=""><img src="/images/toolkit_icon.png" width="16px" icon="clock" style="margin-right: 1rem;">Toolkit</a>
                  </li>
                  <li>
                     <a href=""><img src="https://teach-static.classdojo.com/d59ef2b45edf38d933e630d762306923.png" width="16px" icon="clock" style="margin-right: 1rem;">Big Ideas</a>
                  </li>
                  <li>
                     <a href=""><img src="https://teach-static.classdojo.com/ee99a313fe44fc8423f111b3199fe30f.png" width="16px" icon="clock" style="margin-right: 1rem;">Student mode</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Student - attendance - footer - end -->
<script type="text/javascript">
   jQuery(document).ready(function($) {
      ShowReportClass();
   });


   function ShowReportClass(id,filter) {
    if(id!=''){
      $("#sid").val(id);
    }
      $.ajax({
      url: "{{ route('attendance.reports.chart',request()->route('id')) }}",
      method: "POST",
      data: {student_id:id,filter:filter},
      dataType:'json',
      success: function(data) {
         // console.log(data);

         $('.chart-filter').html(data.title);
        var chartjs =  new Chart(document.getElementById("pie-chart"), {
          type: 'doughnut',
          data: {
            labels: ["Absent", "Present", "Late_Leave", "Late"],
            datasets: [{
              label: "Population (millions)",
              backgroundColor: ["#e74c3c", "#2ecc71","#f39c12","#d35400"],
              data: [data.Absent,data.Present,data.Late_Leave,data.Late]
            }]
          },
          options: {
            title: {
              display: true,
              text: data.title
            }
          }
      });
      },
      error: function(data) {
         console.log(data);
      }
   });
   
      
   }



</script>
@endsection
