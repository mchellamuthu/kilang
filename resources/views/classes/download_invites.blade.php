@extends('layouts.wizard')
@section('content')
<div  class="add-from-class" style="border-radius: 0.5rem; width: 55rem; margin-left: auto; margin-right: auto;">
    <div id="done_adding_student">
       <!-- Timeline - start -->
       <ul>
          <li class="class-point"><span>Class</span></li>
          <li class="students-point"><span>Students</span></li>
          <li class="invite-point"><span>Invites</span></li>
       </ul>
       <div class="done-add-student-timeline">
          <div class="done-add-student-timeline-outer-fill-layer"></div>
          <div class="done-add-student-timeline-outer-point"></div>
       </div>
       <!-- Timeline - end -->
       <!-- Done adding student - start -->
       <div class="done-add-student-modal">
          <div class="done-add-student-modal-header">
             <strong>Get student and parent invites</strong>
          </div>
          <div class="tab-content">
             <div id="before-invite-students" class="tab-pane fade in active">
                <div class="done-add-student-modal-body">
                   <div class="container" style="width: 100%;">
                      <div class="row">
                         <div class="col-md-8 col-md-offset-4 col-xs-offset-2">
                            <img src="/images/invite_image.png" class="img-responsive">
                         </div>
                         <div class="text-center" style="margin: 10px;">
                            <strong>Invite students and parents!</strong>
                         </div>
                         <div class="text-center" style="margin: 22px;">
                            Students take ownership of their work and parents support learning at home. We've created invites for you :)
                         </div>
                      </div>
                   </div>
                </div>
                <div class="done-add-student-modal-footer">
                   <a href="{{ route('class.students',Hashids::encode(request()->route('id'))) }}">
                   Back
                   </a>
                   <a href="{{ route('class.students.invites',Hashids::encode(request()->route('id'))) }}" class="btn btn-primary" id="get_invites">
                   Get invites
                   </a>
                </div>
             </div>

          </div>
       </div>
       <!-- Done adding student - end -->
    </div>
</div>
@endsection
