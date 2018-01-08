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


    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/project.css') }}">
  </head>
  <body style="background-color: rgb(245, 245, 243);">

    <!-- Email verification - Start -->
    <div class="dojo-header-content">
       <div class="dojo-header-text">
          <span>You still need to verify your email!</span>
          <a href="" class="resend-email" data-toggle="modal" data-target="#update-email-address">Resend email to {{ Auth::user()->email }}</a> or
          <a href="" class="update-email" data-toggle="modal" data-target="#update-email-address">update your email address</a>
       </div>
    </div>
    <!-- Email verification - End -->

    <!-- Navigation for user profile - Start -->
      <nav class="navbar navbar-default navbar-settings">
         <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="{{ url('/') }}"><img class="img-responsive" src="/images/dexter_logo.png"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle withImageAndIcon" data-toggle="dropdown" role="button">
                     Login as <b class="caret"></b>
                     </a>
                     <ul class="dropdown-menu">
                        <li>
                           <a href="javascript:void(0);"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Student</span></a>
                        </li>
                        <li>
                           <a href="javascript:void(0);"><img src="/images/header_navigation_images/parent.png" class="img-responsive"> Parent</a>
                        </li>
                        <li>
                           <a href="javascript:void(0);"><i class="fa fa-user" aria-hidden="true"></i> <span>School Leader</span></a>
                        </li>
                     </ul>
                  </li>
                  <li><a href="#" data-toggle="modal" data-target="#myTeacherModal"><img class="img-responsive" src="/images/header_navigation_images/logo6.png"></a></li>
                  <li><a href="#" data-toggle="modal" data-target="#myTeacherModal">Refer a teacher</a></li>
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
      <!-- Navigation for user profile - end -->

      <!-- Teacher profile details - START -->


<section class="profile-background">
      <div class="container ">
         <div class="row" style="">
            <div class="col-md-6 col-md-offset-3">
               <div class="col-md-3">
                  <div class="add-profile-photo" onclick="showPicker()">
                     <div class="add-photo-section">Add your photo</div>
                  </div>
                  <div class="add-profile-picture" onclick="showPicker()">
                  </div>
               </div>
               <div class="col-md-9 school-detail-content">
                  <div class="user-name">{{ Auth::user()->fullName }}</div>
                  <div class="school-name"><strong>Teacher at Government Higher Secondary School</strong></div>
                  <div>
                     <button class="btn btn-primary pd-resource-btn"> PD Resources </button>
                     <button class="btn btn-primary pd-resource-btn" onclick="window.location.href=''; addInstitute()"> Select Institute </button>
                  </div>
               </div>
            </div>
         </div>
      </div>

</section>
      <!-- Teacher profile details - END -->

      <!-- Class list - START -->
      @yield('content')
      <!-- Class list - END -->
      <div class='container'>
          <div id="get-started-text">Get started</div>
          <div class="row" id="dexter-demo">
              <div class="col-md-12">
                  <div class="col-md-4">
                     <a href="class_view.php">
                        <div class="container row getting-started-content" style="width: 100%;">
                           <div class="col-md-4 col-xs-4">
                              <img src="/images/teacher_classes_images/demo_image1.png" class="img-responsive">
                           </div>
                           <div class="col-md-8 col-xs-8">
                              <div class="getting-started-title">Tips from the Dexter community</div>
                              <div class="getting-started-sub-text">
                                 <div class="text-muted">Resources for teachers</div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a href="class_view.php">
                        <div class="container row getting-started-content" style="width: 100%;">
                           <div class="col-md-4 col-xs-4">
                              <img src="/images/teacher_classes_images/demo_image2.png" class="img-responsive">
                           </div>
                           <div class="col-md-8 col-xs-8">
                              <div class="getting-started-title">Introducing Dexter to your students</div>
                              <div class="getting-started-sub-text">
                                 <div class="text-muted">Play student video</div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a href="class_view.php" style="text-decoration: none;">
                        <div class="container row getting-started-content" style="width: 100%;">
                           <div class="col-md-4 col-xs-4">
                              <img src="/images/teacher_classes_images/demo_image3.png" class="img-responsive">
                           </div>
                           <div class="col-md-8 col-xs-8">
                              <div class="getting-started-title">Get the free Dexter App</div>
                              <div class="getting-started-sub-text">
                                 <div class="text-muted">Available on iOS and Android</div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
              </div>



          </div>


      </div>

      @include('components.inner')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <!-- <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> -->
     <!-- File Stack - profile picture - start -->
      <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
      <script type="text/javascript">
         var client = filestack.init('AxCK8Sd0ARlOOpib6Vd2Gz');
         function showPicker() {
             client.pick({
             }).then(function(result) {
                 uploadedImageUrl = result.filesUploaded[0].url;
                 $('.add-profile-photo').css('display', 'none');
                 $('.add-profile-picture').css('display', 'block');
                 $('.add-profile-picture').css('background-image', 'url(" ' + uploadedImageUrl + ' " )');

                 $('.profile-icon').css('display', 'none');
                 $('.updated-profile-icon').css('display', 'inline-block');
                 $('.updated-profile-icon').css('background-image', 'url(" ' + uploadedImageUrl + ' " )');
             });
         }
      </script>
  </body>
</html>
