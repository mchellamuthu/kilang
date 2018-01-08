@extends('layouts.inner')

@section('content')
    <div class="container" style="background-color: rgb(245, 245, 243);">
       <div class="row">

          <div class="col-md-12 class-list" style="padding-top:10px;">

             <!-- List of classes - start  -->
             <div class="row">
                @foreach (App\Institute::where('user_id',Auth::user()->id)->get() as $Institute)
                    <div class="class-block">
                      <div class="class-settings">
                          <span>
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                 <div class="class-settings-icon"><img src="/images/class_images/settings_icon.png" width="16" icon="gear" height="16"></div>
                              </div>
                              <ul class="dropdown-menu" style="left: -14rem;">
                                 <li>
                                    <a href="" data-toggle="modal" data-target="#myInstituteModal" onclick="connectClass()">Edit this {{ $Institute->type }}</a>
                                 </li>
                                 <li>
                                    <a href="" data-toggle="modal" data-target="#myInstituteModal" onclick="connectParents()">Connect teachers</a>
                                 </li>

                                 <li>
                                    <a href="" data-toggle="modal" data-target="#myInstituteModal" onclick="connectTeachers()">Assign admins</a>
                                 </li>
                                 <li>
                                    <a href="" data-toggle="modal" data-target="#myInstituteModal" onclick="connectParents()">Disable this {{ $Institute->type }}</a>
                                 </li>
                              </ul>
                          </span>
                       </div>
                       <a href="{{ route('ins.view',Hashids::encode($Institute->id)) }}">
                          <div class="class-image-content">
                             <img src="{{ $Institute->avatar }}">
                             <div id="class-name">{{ $Institute->name }}</div>
                             <div id="no-of-students">{{ $Institute->classrooms->count() }} Classrooms </div>

                          </div>
                       </a>

                    </div>
                @endforeach




                    <div class="class-block">
                       <a href="{{ route('ins.select') }}">
                          <div class="class-image-content">
                             <img src="images/class_images/addclass.png" class="img-responsive">
                             <div id="no-of-students">Add Institute</div>
                          </div>
                       </a>
                    </div>
             </div>
             <!-- List of classes - end -->

          </div>
       </div>
    </div>
@endsection
