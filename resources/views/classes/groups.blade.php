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
    <style media="screen">
      .student-block-active .student-select-inner-layer {
        background-color: rgb(0, 174, 239) !important;
      }
      .create-group-btn{
        border-radius: 5rem;
        color: white;
        font-weight: 600;
        padding: 1rem 2rem;
        background-color: rgb(0, 174, 239) !important;
      }
    </style>
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
                  <li class="">
                     <a href="{{ route('class.view',Hashids::encode(request()->route('classid'))) }}">
                     <i class="glyphicon glyphicon-home"></i>
                     Classroom <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="active">
                     <a href="{{ route('class.group.view',Hashids::encode(request()->route('classid'))) }}">
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
             <div class="btn-group group-view-btn-group">
                <button class="btn col-xs-4" id="student-btn" onclick="window.location.href='student_view.php';">
                    <img src="/images/student_images/cute1.png">
                    <span>&nbsp; Students</span>
                </button>
                <button class="btn col-xs-4" id="group-btn" onclick="window.location.href='group_view.php';">
                    <img src="/images/group_icon.png">
                    <span>&nbsp; Groups</span>
                </button>
                <button class="btn col-xs-4" id="view-report-button" onclick="window.location.href='view_report.php';">
                    <img src="/images/view_report_icon.png">
                    <span>&nbsp; View reports</span>
                </button>
             </div>
          </div>
        </div>
    </div>
      <!-- student-group-button - END -->

      <!-- Students - view - START -->
      <div class="container-fluid group-view-container">
           <div class="row">
             <a href="#group-modal" data-toggle="modal" class="group_block_layer" id="tableOne">
           <div class="group-image">
              <div class="group-student-image-outer">
                 <div class="group-student-image-background" style="background-image: url(/images/student_images/cute0.png); "></div>
              </div>
              <div class="group-student-image-outer">
                 <div class="group-student-image-background" style="background-image: url(/images/student_images/cute1.png); "></div>
              </div>
              <div class="group-student-image-outer">
                 <div class="group-student-image-background" style="background-image: url(/images/student_images/cute2.png); "></div>
              </div>
           </div>
           <div class="group_title"><span>Table One</span></div>
           <div class="group-select-outer-layer">
              <div class="group-select-inner-layer">0</div>
           </div>
        </a>
                 {{-- Students listing --}}



                 <a data-toggle="modal" sty href="#add-new-group" class="add-new-group-block add-new-group">
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

    <!-- Create new group - modal - START -->
    <div class="modal fade" id="add-new-group" tabindex="-1" role="dialog" aria-labelledby="addNewGroupLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="addNewGroupLabel"><strong>Create group</strong></h5>

          </div>
          <div class="group-name-content">
            <form class="form-inline text-center" >
               <div class="form-group" id="group-name-form">
                 <label for="group-name">Group name:</label>
                 <input type="text" name="group-name" class="form-control" id="group-name" />
               </div>
             </form>
          </div>
          <div class="modal-body create-new-group-modal-body">
             <div class="container-fluid create-new-group-modal-container">
               <div class="row">
                 {{-- List all students under the class --}}
                 @foreach ($classroom->students as $student)
                   <div class= "col-md-3">
                      <a  class="student-to-add-group" data-id="{{ Hashids::encode($student->id) }}">
                         <img src="/images/student_images/{{ $student->avatar }}">
                         <div id="create-group-modal-student-name"><span>{{ $student->User->first_name }}</span></div>
                         <div class="student-select-outer-layer">
                            <div class="student-select-inner-layer"><img src="/images/tick_image.png"></div>
                         </div>
                      </a>
                   </div>
                 @endforeach



               </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn create-group-modal-cancel-btn" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-secondary create-group-btn"  style="">Create group</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Create new group -  modal - END -->

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

       $('.student-to-add-group').click(function(event) {
         event.preventDefault();
         var student_block = $(this);
         student_block.toggleClass('student-block-active');
       });

       $('.create-group-btn').click(function(event) {
         event.preventDefault();
         var form_data = [];
         var group_name =  $('#group-name').val();
         if (group_name=='') {
           $('#group-name-form').addClass('has-error');
           $('#group-name').after('<span class="help-block">Please enter group name</span>');
         }else{
           $('#group-name-form').removeClass('has-error');
           $('#group-name').next('.help-block').remove();
           $('.student-block-active').each(function(index, el) {
              var student_id = $(this).attr('data-id');
              form_data.push(student_id);
           });
            $.ajax({
              url: '/api/create/student_group/{{ Hashids::encode($classroom->id) }}?api_token={{ Auth::user()->api_token }}',
              type: 'POST',
              dataType: 'json',
              data: {ids:form_data,group_name:group_name}
            })
            .done(function(data) {
                console.log(data);
            })
            .fail(function(error) {
                console.log(error);
            })
            .always(function() {
              console.log("complete");
            });

         }



       });
    </script>
  </body>
</html>
