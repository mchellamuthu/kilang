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
                      <div class="row" id="invites_success">
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
                   <button class="btn btn-primary" style="background-color:rgb(51, 190, 242); border:rgb(51, 190, 242) solid 1px;" id="get_invites" onclick="getInvites()">
                   Get invites
               </button>
                </div>
             </div>

          </div>
       </div>
       <!-- Done adding student - end -->
    </div>
</div>
<script type="text/javascript">
    function getInvites(){
        $.ajax({
            url : "{{  route('class.students.invites',Hashids::encode(request()->route('id'))) }}",
            dataType : 'json',
            data : { id:'df'},
            type : 'post',
            cache: false,
            beforeSend:function(x){
                    $('#invites_success').html('<p class="text-center">Preparing for download</p><div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"><span class="sr-only">Loading</span></div></div>').show();
            },
            success: function (response) {
                $('#invites_success').html('<div class="col-md-8 col-md-offset-4 col-xs-offset-2"><img src="/images/invite_success_image.png" class="img-responsive"></div><div class="text-center" style="margin: 10px;"><strong>Send invites home!</strong></div><div class="text-center" style="margin: 22px;"> Check your "downloads" folder or email to get your invites. Print and hand them out!</div><div class="text-center" style="margin: 22px;"><a href="">poster in another language</a></div>');
                $('#get_invites').html('Done with invites');
                


            },error: function (response) {
            }
        });

    }
</script>
@endsection
