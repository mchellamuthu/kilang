<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=1024">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dexter</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- font-awesome icons -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" rel="stylesheet"> <!-- toggle - button -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.css" />

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/project.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/geodata/geodatasource-countryflag.css') }}">
    {{-- Select2 --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/css/select2-bootstrap.min.css') }}">
  </head>
  <body style="background-color: rgb(245, 245, 243);">
    <!-- Email verification - Start -->
    <div class="dojo-header-content">
       <div class="dojo-header-text">
          <span>You still need to verify your email!</span>
          <a href="" class="resend-email">Resend email to {{ Auth::user()->email }}</a> or
          <a href="" class="update-email" data-toggle="modal" data-target="#update-email-address">update your email address</a>
       </div>
    </div>
    <!-- Email verification - End -->

    <!-- Navigation for user profile - Start -->
      <nav class="navbar navbar-default navbar-settings">
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand hidden-xs" href="/"><img class="img-responsive" src="/images/dexter_logo.png"/></a>
            </div>
            <div class="nav navbar-nav navbar-center class-name">Demo class</div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><img class="img-responsive" src="/images/header_navigation_images/logo7.png"/></a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle withImageAndIcon" data-toggle="dropdown" role="button">
                        <div class="profile-icon"></div>
                        <div class="updated-profile-icon"></div>
                        {{ Auth::user()->fullName }} <b class="caret"></b>
                     </a>
                     <ul class="dropdown-menu">
                        <li>
                           <a href="#" data-toggle="modal" data-target="#update-email-address">Account Settings</a>
                        </li>
                        <li>
                           <a href="#" data-toggle="modal" data-target="#myTeacherModal">Refer a teacher</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>
      <!-- Navigation for user profile - End -->

      <!-- Class selection navigation - Start -->
      <nav class="navbar navbar-default" role="navigation">
         <div class="container-fluid main_navigation">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#class-view-navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#"><button onclick="window.history.go(-1); return false;" class="btn-sm your-class-back-btn"><img src="images/class_view_images/back_button.png"><span>Your classes</span> </button></a>
            </div>
            <div class="navbar-collapse collapse" id="class-view-navbar-collapse">
               <ul class="nav navbar-nav navbar-center custom_menu">
                  <li class="active">
                     <a href="student_view.php">
                     <i class="glyphicon glyphicon-home"></i>
                     Classroom <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="story_view.php">
                     <i class="glyphicon glyphicon-picture"></i>
                     Stories
                     </a>
                  </li>
                  <li class="">
                     <a href="message_view.php">
                     <i class="glyphicon glyphicon-comment"></i>
                     Messages
                     </a>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right settings-dropdown">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/class_view_images/settings_icon.png"> Settings <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#myInstituteModal">Edit class</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myInstituteModal" onclick="connectParents()">Connect parents</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myInstituteModal" onclick="connectStudents()">Connect students</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#resetBubbles">Reset bubbles</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#displaySettings">Display settings</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Class selection navigation - End -->

    <!-- student-group-button - START -->
    <div class="container main-content">
       <div class="row">
          <div class="col-md-8 col-md-offset-3">
             <div class="btn-group student-view-btn-group">
                <button class="btn col-xs-4" id="student-btn" onclick="window.location.href='student_view.php'; studentFunction()">
                    <img src="/images/student_images/cute1.png">
                    <span>&nbsp; Students</span>
                </button>
                <button class="btn col-xs-4" id="group-btn" onclick="window.location.href='{{ route('class.group.view',Hashids::encode(request()->route('classid'))) }}';">
                    <img src="/images/group_icon.png">
                    <span>&nbsp; Groups</span>
                </button>
                <button class="btn col-xs-4" id="view-report-button" onclick="window.location.href='view_report.php'; viewReportFunction()">
                    <img src="/images/view_report_icon.png">
                    <span>&nbsp; View reports</span>
                </button>
             </div>
          </div>
        </div>
    </div>
      <!-- student-group-button - END -->

      <!-- Students - view - START -->
      <div class="container-fluid student-view-container">
           <div class="row">
                 <a href="#add-student-feedback-wholeclass" data-toggle="modal">
                    <img src="/images/group_icon.png">
                    <div id="student-name"><span>Whole Class</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer">0</div>
                    </div>
                 </a>
                 {{-- Students listing --}}
                 @foreach ($institute->students as $student)
                     <a href="javascript:void(0);" >
                        <img src="/images/student_images/{{ $student->avatar }}">
                        <div id="student-name"><span>{{ $student->User->first_name }}</span></div>
                        <div class="student-select-outer-layer">
                           <div class="student-select-inner-layer" @if ($student->points->sum('points') > 0) style="background-color: rgb(147, 213, 83);" @endif >{{ $student->points->sum('points') }}</div>
                        </div>
                     </a>
                 @endforeach


                 <a data-toggle="modal" sty href="#addNewStudentModal" class="add-new-student-block add-new-student">
                  <img src="/images/student_images/add_button.png">
                 </a>
           </div>
        </div>

      <!-- Students - view - END -->

      <!-- Attendance-option - footer - START -->
      <nav class="navbar navbar-default navbar-fixed-bottom student-attendance-footer" >
          <div class="container">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#student-attendance-footer-navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
             </div>
             <div class="navbar-collapse collapse" id="student-attendance-footer-navbar-collapse">
                <ul class="nav navbar-nav navbar-center">
                   <li><a href="attendance_view.php"><img src="/images/student_attendance_footer_icons/attendance_icon.png" width="16px" icon="clock">Attendance</a></li>
                   <li>
                      <a href="multiple_attendance.php"><img src="/images/student_attendance_footer_icons/select_multiple_icon.png" width="16px" icon="clock">Select multiple</a>
                   </li>
                   <li>
                      <a href="" id="random-selection"><img src="/images/student_attendance_footer_icons/random_icon.png" width="16px" icon="clock">Random</a>
                   </li>
                   <li>
                      <a href=""><img src="/images/student_attendance_footer_icons/timer_icon.png" width="16px" icon="clock">Timer</a>
                   </li>
                   <li>
                      <a href=""><img src="/images/student_attendance_footer_icons/toolkit_icon.png" width="16px" icon="clock">Toolkit</a>
                   </li>
                </ul>
             </div>
          </div>
       </nav>
    <!-- Attendance-option - footer - END -->
    <!-- Give feedback to every student modal - START -->
    <div class="modal" id="add-student-feedback-wholeclass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title"><strong>Give feedback to {{ $institute->students->count() }} students</strong></h5>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="demo-class">
                   <div class="row">
                      <div class="give-feedback-positive-negative-btn">
                         <button class="btn" id="positive-feedback-btn" onclick="positiveFeedbackFunction()" data-toggle="tab" href="#positiveStudentTab">Positive</button>
                         <button class="btn" id="needs-work-feedback-btn" onclick="needsWorkFeedbackFunction()" data-toggle="tab" href="#needStudentWorkTab">Needs work</button>
                      </div>
                   </div>
                </div>
             </div>
             <div class="tab-content">
                <div id="positiveStudentTab" class="tab-pane fade in active">
                   <div class="container positive-feedback-container">
                      <div class="row">
                        @foreach ($institute->skills->where('type','Positive') as $positive_skill)
                          <div class="col-md-3" >
                             <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                                <div class="task-points">
                                   <div class="selected-btn">{{ $positive_skill->point_weight }}</div>
                                </div>
                                <img src="/images/skill_icons/{{ $positive_skill->image }}">
                                <div class="task-name" style="font-size:1.3rem">
                                   <p>{{ $positive_skill->name }}</p>
                                </div>
                             </div>
                          </div>
                        @endforeach


                         <div class="col-md-3">
                            <div class="positive-tab-add-skills" data-toggle="modal" data-target="#myInstituteModal" onclick="connectSkills()">
                               <img src="images/skill_icons/edit-skill-icon.png">
                               <div class="task-name">
                                  <p>Edit skill</p>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div id="needStudentWorkTab" class="tab-pane fade">
                   <div class="container need-work-feedback-container">
                      <div class="row">
                         <div class="col-md-3" >
                            <div class="need-work-feedback-to-add-skills" data-toggle="modal" data-target="#myInstituteModal" onclick="connectSkills()">
                               <img src="/images/skill_icons/edit-skill-icon.png">
                               <div class="task-name">
                                  <p>Edit skill</p>
                               </div>
                            </div>
                         </div>
                      </div>

                   </div>
                </div>
             </div>
          </div>
          <div class="modal-footer student-feedback-footer">
             <div class="col-md-6" id="add-photo-for-feedback">
                <a href="">
                   <div class="text-center">
                      <img src="https://teach-static.classdojo.com/a6d93a4993c3d25376f74629e5ba3f4e.png" width="24px" icon="photo">
                      <span>Photo</span>
                   </div>
                </a>
             </div>
             <div class="col-md-6" id="add-post-for-feedback">
                <a href="#add-post-modal" data-toggle="modal">
                   <div class="text-center" >
                      <img src="https://teach-static.classdojo.com/9c2e268c1a4d4c2ff5e4c13ecc5ee9e5.png" width="24px" icon="post">
                      <span>Add post</span>
                   </div>
                </a>
             </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Give feedback to every student modal - END -->
    @include('modals.class_view')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/geodata/geodatasource-cr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js"></script>
    <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
    <script type="text/javascript">
    $('select').select2({
        theme: "bootstrap",
    });
      const client = filestack.init('AxCK8Sd0ARlOOpib6Vd2Gz');
       function showFilePickerForShareOnToAddPhoto() {
           client.pick({
           }).then(function(result) {
               var uploadedImageUrl = result.filesUploaded[0].url;
               $('#uploading-image-content').css('display', 'block');
               $('#file-upload-image').attr('src', uploadedImageUrl);
               $('.add-photo-btn').hide();
           });
       }
    </script>
  </body>
</html>
