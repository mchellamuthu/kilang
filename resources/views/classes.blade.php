@extends('layouts.inner')

@section('content')
    <div class="container" style="background-color: rgb(245, 245, 243);">
       <div class="row">

          <div class="col-md-12 class-list">

             <!-- List of classes - start  -->
             <div class="row">
                 @foreach ($classrooms as $classroom)
                     <div class="class-block">
                       <div class="class-settings">
                           <span>
                             <div class="dropdown-toggle" data-toggle="dropdown">
                                  <div class="class-settings-icon"><img src="/images/class_images/settings_icon.png" width="16" icon="gear" height="16"></div>
                               </div>
                               <ul class="dropdown-menu" style="left: -14rem;">
                                  <li>
                                     <a href="" data-toggle="modal" data-target="#myInstituteModal" onclick="connectClass()">Edit class</a>
                                  </li>
                                  <li>
                                     <a href="" data-toggle="modal" data-target="#myInstituteModal" onclick="connectParents()">Connect parents</a>
                                  </li>
                                  <li>
                                     <a href="" data-toggle="modal" data-target="#myInstituteModal" onclick="connectStudents()">Connect students</a>
                                  </li>
                                  <li>
                                     <a href="" data-toggle="modal" data-target="#myInstituteModal" onclick="connectTeachers()">Add co-teachers</a>
                                  </li>
                                  <li>
                                     <a href="" data-toggle="modal" data-target="#myInstituteModal" onclick="connectParents()">Archive class</a>
                                  </li>
                               </ul>
                           </span>
                        </div>
                        <a href="{{ route('class.view',Hashids::encode($classroom->id)) }}">
                           <div class="class-image-content">
                              <img src="/images/class_images/{{ $classroom->avatar }}">
                              <div id="class-name">{{ $classroom->class_name }}</div>
                              <div id="no-of-students">{{ App\Student::where('class_id',$classroom->id)->count() }} Students</div>

                           </div>
                        </a>

                     </div>

                 @endforeach




                    <div class="class-block">
                       <a href="{{ route('class.create',Hashids::encode(request()->route('id'))) }}">
                          <div class="class-image-content">
                             <img src="/images/class_images/addclass.png" class="img-responsive">
                             <div id="no-of-students">Add a class</div>
                          </div>
                       </a>
                    </div>
             </div>
             <!-- List of classes - end -->

          </div>
       </div>
    </div>
@endsection
