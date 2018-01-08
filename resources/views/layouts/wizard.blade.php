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
        .panel-default .panel-heading{
            background: #fff !important;
            padding: 2rem  !important;

        }
        .panel-default .panel-footer{
            background: #fff !important;

        }
        .panel-footer .btn-primary{
            color: white !important;
            font-weight: 600 !important;
            border-radius: 2rem !important;
            padding: 1rem 3rem !important;
            border: 1px solid transparent;

            background-color: rgb(51, 190, 242) !important;
        }
        .panel-default .panel-heading h3{
            font-weight: 600 !important;
            font-size: 1.68rem !important;
            line-height: 2rem !important;
        }
        .institute-search{
            position: relative; top: -1px;
             border-radius: 0px 0px 4px 4px;
             border: 1px solid rgb(218, 218, 218);
             padding: 0px;
             min-height: 30.3rem;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 3px 0px;
        }
        .institute-search-input{
            background: #fff;
             width: 100%;
             font-family: 'Montserrat',sans-serif;
             font-size: 1.6rem;
             font-weight: normal;
             line-height: 2.2rem;
             padding: 0.6rem 1rem;
             border-radius: 0.5rem;
             box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 3px 0px inset;
             border: 1px solid rgb(218, 218, 218); outline: none; height: 3.6rem;
        }
        .institute-search > ul{
            padding: 0px;
            margin: 0px;
            list-style: none;
            max-height: 30.3rem;
            overflow-y: auto;
        }
        .institute-search li {
            background: #fff;
        }
        .institute-search li:hover{
            background-color: rgb(230, 246, 253) !important;
        }
        .institute-search li{
            cursor: pointer; border-top: 1px solid rgb(245, 245, 245); padding: 1.5rem; font-size: 1.6rem;
        }
        .institute-search li .heading{
            color: rgb(0, 174, 239) !important;
            font-weight: 600;
        }
        .institute-search li .location{
            color: #222 !important;
            margin: 0.2rem 0px 0px; font-size: 1.3rem;
        }

    </style>
  </head>
  <body style="background-color: rgb(62, 66, 93);">

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
      <div class="container" style="">
          <div class="row">

                  @yield('content')

          </div>

      </div>


      @include('components.inner')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/geodata/geodatasource-cr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js"></script>
    <!-- <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> -->
     <!-- File Stack - profile picture - start -->
      <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
      <script type="text/javascript">
        $('select').select2({
            theme: "bootstrap",
        });
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

         function Searchinstitute(query){
             var _token = $('meta[name="csrf-token"]').attr('content');
             $.ajax({
                 url: "/api/search-institute",
                 type:'POST',
                 data: {_token:_token, q:query},
                 dataType:'json',
                 success: function(response) {
                     $('.institute-search  > ul').html('Loading....');
                     $('.institute-search  > ul').html('');
                     if (response.rows == 0) {
                         $('.institute-search  > ul').html('<p class="text-center text-primary"> Unable to find your institute! </p>');
                     }else{
                         $.each(response.result, function(key,institute) {
                              $('.institute-search  > ul').prepend('<a href="'+institute.path+'"><li><div class="heading">'+institute.name+'</div><div class="location">'+institute.city+', '+institute.state+', '+institute.country+'</div></li></a>');
                         });
                     }

                 },
                 error: function(data){
                  var response = data.responseJSON;

                }
             });
         }
      </script>
  </body>
</html>
