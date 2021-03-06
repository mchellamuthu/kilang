
<!-- Add new student modal - START -->
<div class="modal fade" id="addNewStudentModal" tabindex="-1" role="dialog" aria-labelledby="addNewStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewStudentModalLabel"><strong>Add students</strong></h5>
        <span class="import-student-list-in-add-new-student">
            <a href="#import-student-list" data-toggle="modal"><span class="glyphicon glyphicon-file"></span> Import student list</a>
         </span>
      </div>
      <div class="add-student-modal-body" >
         <div class="container" style="width: 100%;">
            <div class="row">
               <div class="text-muted text-center">Start typing to add students from School Directory</div>
               <div style="padding-top: 2rem;">
                  <form>
                     <div class="form-group row">
                        <span class="full-name-error-msg"> Please enter first name and last name.</span>
                        <span class="input-error-msg"> Last name is required. Don't worry, student last names are not shown in class unless you enable this in display settings</span>
                        <span class="col-md-5 col-md-offset-5 email-error-msg"> Email Id is required.</span>
                        <span class="col-md-5 col-md-offset-5 valid-email-error-msg"> Please enter valid email id.</span>
                        <div class="col-md-5 col-xs-10 add-student-input">
                           <input type="text" class="form-control" id="add_input" placeholder="First and last name">
                        </div>
                        <div class="col-md-5 col-xs-10 add-email-input">
                           <input type="text" class="form-control" id="add_email_input" placeholder="Email id">
                        </div>
                        <span><a href="#" id="add_new_student" class="col-md-2 col-xs-2 btn btn-info"><span class="glyphicon glyphicon-plus hidden-lg"></span><span class="hidden-xs">Add</span></a></span>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="modal-body add-student-modal-body-list" style="height:26rem; padding:0px;">
           <form action="#" id="student_list_form">
        <div class="students-not-added-yet text-muted">
            No students added yet
         </div>
         <div id="number-of-students"></div>
         <div id="list"></div>
     </form>
      </div>
      <div class="modal-footer add-student-modal-footer">
        <a data-dismiss="modal">Cancel</a>
        <button type="button" class="btn" disabled="" onclick="add_students();" id="add_student_btn">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Add new student modal - END -->


<!-- Import student modal - START -->
<div class="modal fade" id="import-student-list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel"><strong>Import student list</strong></h5>
         </div>
         <div class="modal-body">
            <div class="import-list text-muted">
               <div style="padding: 0rem 2rem;">We'll automatically import your list and clean duplicates.</div>
               <input class="file-uploading-input" type="file" onchange="importXLSFile(this);" style="display: none;" />
               <div class="upload-icon" style="cursor:pointer;" onclick="$('.file-uploading-input').trigger( 'click' )">
                  <i class="fa fa-upload fa-5x" aria-hidden="true"></i>
               </div>
               <div>Upload only *.xls or *.xlsx files</div>
               <div style="font-style: italic;">(upto 10MB)</div>
            </div>
            <div class="row">
               <div class="col-md-10 col-md-offset-1">
                  <div class="uploaded-doc" id="imported-list">
                     <div class="row">
                        <div class="col-md-2 col-xs-2">
                           <i class="fa fa-file-excel-o fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-9 col-xs-9">
                           <div id="fileName"></div>
                           <div id="fileSize"></div>
                        </div>
                        <div class="col-md-1 col-xs-1">
                           <button type="button" class="close close-export-list" data-dismiss="uploaded-doc" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="import-list-btn" data-toggle="modal" data-target="#confirm-student-list" onclick="getImportList()">Import list</button>
         </div>
      </div>
   </div>
</div>
<!-- Import student modal - END -->

      <div class="modal fade bs-example-modal-lg" id="confirm-student-list" tabindex="-1" role="dialog" aria-labelledby="confirmStudentListModal" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
                  <h5 class="modal-title" id="confirmStudentListModal"><strong>Confirm Excel import</strong></h5>
               </div>
               <form action="#" id="import_form">

                  <div class="modal-body">
                     <div class="import-form-confirmation-text">
                        Please confirm that the names below are formatted correctly.
                     </div>
                     <div class="row" id="imported-student-detail-list">
                        <div class="col-md-3 col-xs-3">
                           <div class="label-name">Name</div>
                           <div id="first_and_last_name_input"></div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="label-name">Email</div>
                           <div id="email_id_input"></div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="label-name">Roll no.</div>
                           <div id="roll_no_input"></div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="label-name">Mobile no.</div>
                           <div id="mobile_no_input"></div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" id="import-form-back-btn" class="btn btn-secondary" data-toggle="modal" data-target="#import-student-list" data-dismiss="modal">Back</button>
                     <button type="button" id="continue-import-list" class="btn btn-primary">Continue</button>
                  </div>
               </form>
            </div>
         </div>
      </div>


    


<script type="text/javascript">
function getImportList() {
  var file_data = $('.file-uploading-input').prop('files')[0];
  var form_data = new FormData();
  form_data.append('import_file', file_data);
  console.log(form_data);
  $.ajax({
    url: '{{ route('read.excel') }}',
    dataType: 'json',
    cache: false,
    contentType: false,
    processData: false,
    data: form_data,
    type: 'post',
    success: function(response){
        // console.log(response);
        //  display response from the PHP script, if any
        $('#import_form').find('input').remove();
        for(var index = 0; index < response.data.length; index++) {
          $('#first_and_last_name_input').prepend('<li><input type="text" class="form-control" name="full_name[]" value="' + response.data[index].first_name +' '+response.data[index].last_name+'"></li>');
          $('#roll_no_input').prepend('<li><input type="text" class="form-control" name="roll_no[]" value="' + response.data[index].roll_no +'"></li>');
          $('#mobile_no_input').prepend('<li><input type="text" class="form-control" name="mobile_no[]" value="' + response.data[index].mobile_no +'"></li>');
          $('#email_id_input').prepend('<li><input type="text" class="form-control" name="email[]" value="' + response.data[index].email +'"></li>');
        }
    }
  });
}

var Excel_Confrim_Url = "{{ route('excel.confirm') }}";
function add_students(){
    var form_data = $('form#student_list_form').serialize();
    $.ajax({
        url : "{{  route('class.students.add',Hashids::encode(request()->route('classid'))) }}",
        dataType : 'json',
        data : form_data,
        type : 'post',
        cache: false,
        success: function (response) {
            $('#addNewStudentModal').modal('hide');
            // window.location = "{{ route('class.view',Hashids::encode(request()->route('classid'))) }}";

        },error: function (response) {
             console.log(response);
        }
    });
}
</script>
