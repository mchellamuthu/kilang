<!--Refer a teacher - modal - start -->
<div class="modal fade" id="myTeacherModal" tabindex="-1" role="dialog" aria-labelledby="teacherModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h class="modal-title" id="teacherModalLabel"><strong>Refer a teacher!</strong></h>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body refer-teacher-body-content">
            <div class="modal-body">
               <div class="gift-icon" style="">
                  <img src="https://teach-static.classdojo.com/8194866ad6343b22260f79319c90b583.png" class="img-responsive">
               </div>
               <div class="gift-text">
                  <span><strong>Give the gift of Dexter</strong></span>
               </div>
               <div class="referral-link">
                  Your referral link is:
               </div>
               <div class="link">
                  <a href="">https://classdojo.com/?r=Wb_BQYs1l0EdmwNL</a>
               </div>
               <div class="address-input">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Enter email addresses, separated by commas" aria-describedby="basic-addon2">
                     <span class="input-group-addon" id="basic-addon2">Send</span>
                  </div>
               </div>
            </div>
            <div class="modal-footer public-share">
               <button type="button" class="btn btn-primary"><img src="/images/teacher_classes_/images/facebookicon.png">&nbsp Share on Facebook</button>
               <button type="button" class="btn btn-primary"><img src="/images/teacher_classes_/images/twittericon.png">&nbsp  Share on Twitter</button>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Refer a teacher - modal - end -->

<!-- My institute modal - START -->

<div class="modal fade bs-example-modal-lg" id="myInstituteModal" tabindex="-1" role="dialog" aria-labelledby="myInstituteModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <!-- <div class="modal-content">
         <div class="modal-header">
            <h class="modal-title" id="myInstituteModalLabel"><strong>Refer a teacher!</strong></h>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            ...
         </div>
         <div class="modal-footer">

         </div>
      </div> -->
      <div class="modal-content">
         <div class="modal-header institute-header">
            <div style="text-align: center;"><strong>Demo class</strong> </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <ul id="myEditModalTab" class="nav nav-tabs col-xs-12">
               <li class="active"><a class="connect-class" href="#class-edit-modal" data-toggle="tab">Class</a></li>
               <li class=""><a class="student-class" href="#student-edit-profile" data-toggle="tab">Students</a></li>
               <li class=""><a class="parent-class" href="#parent-edit-modal" data-toggle="tab">Parents</a></li>
               <li class=""><a class="skill-class" href="#skill-edit-modal" data-toggle="tab">Skills</a></li>
               <li class=""><a class="teacher-class" href="#teacher-edit-modal" data-toggle="tab">Teachers</a></li>
            </ul>
         </div>
         <div class="modal-body institute-body">
            <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade" id="student-edit-profile">
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-md-6">

                            <div class="jumbotron student-account-content">
          <h><strong>Set up Student accounts!</strong></h>
          <div class="customize-students">
             <span>Students can customize their monsters, add work to their digital portfolio, and more! </span>
             <a href="https://www.classdojo.com/studentstories/" target="_blank">
             <span>Learn more</span></a>
          </div>
          <div class="points-to-student-account">
            <div>1. Pin Student Poster to your classroom wall.</div>
           <div>2. Students tap 'Login' from the app or classdojo.com to scan the code.</div>
          </div>

          <img src="images/portfolio_image.png">
          <div class="poster-btn">
             <button class="btn btn-primary">
             <img src="images/pdf_icon.png" width="20px" icon="file_pdf_white">
             <span>Get poster</span>
             </button>
          </div>
          <div class="invite-codes">
             <a href="">Get invite codes</a>
             or <a href="">poster in another language</a>
          </div>

       </div>
    <div class="jumbotron student-portfolio">
       <div>
          <h><strong>Students can log in at home!</strong></h>
       </div>
       <a href="">Get invites</a>
    </div>

                           <div style="text-align: center;" class="text-muted">
                              <p>By using student accounts, you indicate that you have parent permission for students to set up and use ClassDojo accounts.</p>
                              <a href="https://www.classdojo.com/studentstories/" target="_blank">
                              <span>Get sample consent letter</span></a>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div id="add-student-list">
                              <a href="">
                                 <li class="add-student">
                                    <img src="/images/student_/images/cute1.png" width="30px" height="30px">
                                    <span>David Leonard</span>
                                 </li>
                              </a>
                              <a href="">
                                 <li class="add-student">
                                    <img src="/images/student_/images/cute2.png" width="30px" height="30px">
                                    <span>John Rabi</span>
                                 </li>
                              </a>
                           </div>
                           <a data-toggle="modal" data-target="#add-student-modal" href="https://www.classdojo.com/studentstories/" target="_blank" id="add-new-student">
                              <img src="/images/add_new_student_icon.png" width="32px" icon="plus_blue"><span>Add students</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="skill-edit-modal">
                  <div class="row">
                     <div class="demo-class">
                        <div class="row">
                           <div class="skill-points-btn">
                              <button class="btn" id="positive-desktop-btn" onclick="positiveDesktopFunction()" data-toggle="tab" href="#positiveDesktopTab">Positive</button>
                              <button class="btn" id="needs-desktop-work-btn" onclick="needsDesktopWorkFunction()" data-toggle="tab" href="#needsDesktopWorkTab">Needs work</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-content">
                     <div id="positiveDesktopTab" class="tab-pane fade in active">
                        <div class="container positive-desktop-container">
                           <div class="row">
                              <div class="col-md-3" >
                                 <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                                    <div class="task-points">
                                       <div class="selected-btn">1</div>
                                    </div>
                                    <img src="/images/skill_icons/skill-icon10.png">
                                    <div class="task-name">
                                       <p>Helping others</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                                    <div class="task-points">
                                       <div class="selected-btn">1</div>
                                    </div>
                                    <img src="/images/skill_icons/skill-icon1.png">
                                    <div class="task-name">
                                       <p>On task</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                                    <div class="task-points">
                                       <div class="selected-btn">1</div>
                                    </div>
                                    <img src="/images/skill_icons/skill-icon7.png">
                                    <div class="task-name">
                                       <p>Participating</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                                    <div class="task-points">
                                       <div class="selected-btn">1</div>
                                    </div>
                                    <img src="/images/skill_icons/skill-icon6.png">
                                    <div class="task-name">
                                       <p>Persistence</p>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-md-3">
                                 <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                                    <div class="task-points">
                                       <div class="selected-btn">1</div>
                                    </div>
                                    <img src="/images/skill_icons/skill-icon5.png">
                                    <div class="task-name">
                                       <p>Teamwork</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                                    <div class="task-points">
                                       <div class="selected-btn">1</div>
                                    </div>
                                    <img src="/images/skill_icons/skill-icon9.png">
                                    <div class="task-name">
                                       <p>Working hard</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="positive-tab-add-skills" data-toggle="modal" data-target="#add-skill-modal">
                                    <img src="/images/skill_icons/add-skill-icon.png">
                                    <div class="task-name">
                                       <p>Add skill</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                     <div id="needsDesktopWorkTab" class="tab-pane fade">
                        <div class="container need-work-containter">
                           <div class="row">
                              <div class="col-md-3" >
                                 <div class="need-work-add-skills" data-toggle="modal" data-target="#add-skill-modal">
                                    <img src="/images/skill_icons/add-skill-icon.png">
                                    <div class="task-name">
                                       <p>Add skill</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row" style="width: 100%">
                        <div class="col-md-6 col-md-offset-3">
                           <div class="jumbotron parents-like-points">
                              Choose which points you'd like parents to see:
                              <div class="selecteable-radio-points">
                                 <form>
                                   <label class="radio-inline">
                                     <input checked type="radio" name="optradio">All points
                                   </label>
                                   <label class="radio-inline">
                                     <input type="radio" name="optradio">Positive points only
                                   </label>
                                   <label class="radio-inline">
                                     <input type="radio" name="optradio">No points
                                   </label>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="teacher-edit-modal">
                  <div class="row" style="width: 100%">
                     <div class="col-md-8">
                        <strong>Add collaborators to this class</strong>
                        <div class="input-group">
                           <input type="text" class="form-control" id="teacher-email-id" placeholder="Enter teacher's email">
                           <span class="input-group-btn">
                           <button class="btn btn-secondary" id="teacher-email-to-invite" type="button" disabled="">Invite</button>
                           </span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="jumbotron share-class-details">
                           <strong>Share your class!</strong>
                           <div class="share-class-details-content">
                              Inviting co-teachers or specialty teachers to join your class will let them award points to students, share updates and photos with parents, and review student progress.
                           </div>
                           <div class="share-class-details-link"><a href="https://www.classdojo.com/studentstories/" target="_blank">
                              <span>Learn more</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="parent-edit-modal">
                  <div class="jumbotron myInstitute-parent-content">
                     <div class="container row">
                        <div class="col-md-8 text-center">
                           <h4><strong>Invite parents to class!</strong></h4>
                           Get support at home! Share amazing moments from class and communicate directly in real-time.
                           <div><button class="btn btn-primary parent-invite-btn">
                              <img src="/images/pdf_icon.png" width="20px" icon="file_pdf_white">
                              <span>Get invites</span>
                              </button>
                           </div>
                           <a href="">Get invite codes</a> or <a href="">poster in another language</a>
                        </div>
                        <div class="col-md-4">
                           <div class="connection-chart-layer">
                              <div class="circular-progress percent">
                                <div class="meter">
                                    <div class="connection-percent">%</div>
                                    <div class="connection-text">Connected</div>
                                     <input type="hidden" min="0" max="100" value="37">
                                </div>
                              </div>
                            </div>
                           <div class="parents-connected">
                              <span>0/2 parents have connected with your class.</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="student-list">
                     <div class="student-list-content">
                        <img src="/images/student_/images/cute1.png" width="30px" height="30px">
                        <span>David Leonard</span>
                        <a href="">Invite parent</a>
                     </div>
                     <div class="student-list-content">
                        <img src="/images/student_/images/cute2.png" width="30px" height="30px">
                        <span>John Rabi</span>
                        <a href="">Invite parent</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade in active" id="class-edit-modal">
                  <div class="container" style="width: 100%;">
                     <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                           <div class="col-md-4 col-md-offset-4">
                              <div class="dropdown class-icon-selection-dropdown">
                                 <button class="btn btn-default dropdown-toggle-button" data-toggle="dropdown" id="dropdownMenu1"><img src="/images/class_/images/class1.png" class="img-responsive"><span></span></button>
                                 <ul class="dropdown-menu" id="dropdown-image-add-class" aria-labelledby="dropdownMenu1">
                                    <li>
                                       <div class="container row" style="width: 100%;">
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class1.png" ></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class2.png" ></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class3.png" ></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class4.png" ></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class5.png"></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class6.png" ></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class7.png" ></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class8.png" ></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class9.png" ></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class10.png"></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class11.png"></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class12.png"></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class13.png"></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class14.png"></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class15.png"></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class16.png"></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class17.png"></a>
                                          </div>
                                          <div class="col-md-3 col-xs-6 class-icons">
                                             <a><img src="/images/class_/images/class18.png"></a>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
                  <div class="container-fluid" id="add_class_details">
                     <form>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-3 col-form-label">Class name</label>
                           <div class="col-sm-9">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="e.g., &quot;Homeroom&quot;">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="exampleSelect1" class="col-sm-3 col-form-label">Grade</label>
                           <div class="col-sm-9">
                              <select class="form-control" id="exampleSelect1">
                                 <option value="" selected>Select year</option>
                                 <option class="Select-option">Pre-School</option>
                                 <option class="Select-option">Kindergarten</option>
                                 <option class="Select-option">1st Grade</option>
                                 <option class="Select-option">2nd Grade</option>
                                 <option class="Select-option">3rd Grade</option>
                                 <option class="Select-option">4th Grade</option>
                                 <option class="Select-option">5th Grade</option>
                                 <option class="Select-option">6th Grade</option>
                                 <option class="Select-option">7th Grade</option>
                                 <option class="Select-option">8th Grade</option>
                                 <option class="Select-option">9th Grade</option>
                                 <option class="Select-option">10th Grade</option>
                                 <option class="Select-option">11th Grade</option>
                                 <option class="Select-option">12th Grade</option>
                                 <option class="Select-option">Other</option>
                              </select>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- My institute modal - END -->

<!-- Add skill modal - START -->
<div class="modal fade" id="add-skill-modal" tabindex="-1" role="dialog" aria-labelledby="addSkillModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h class="modal-title" id="addSkillModalLabel"><strong>Add Skill</strong></h>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body add-skill-modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                     <div class="col-md-4 col-md-offset-4">
                        <div class="dropdown add-skill-icon-selection-dropdown">
                           <button class="btn btn-default dropdown-toggle-button" data-toggle="dropdown" id="dropdownMenu1"><img src="/images/skill_icons/skill-icon1.png" class="img-responsive"><span></span></button>
                           <ul class="dropdown-menu" id="dropdown-image-add-skill" aria-labelledby="dropdownMenu1">
                              <li>
                                 <div class="container row" style="width: 100%;">
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon1.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon2.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon3.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon4.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon5.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon6.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon7.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon8.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon9.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon10.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon11.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon12.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon13.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon14.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon15.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon16.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon17.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon18.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon19.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon20.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon21.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon22.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon23.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon24.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon25.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon26.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon27.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon28.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon29.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon30.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon31.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon32.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon33.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon34.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon35.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon36.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon37.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon38.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon39.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon40.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon41.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon42.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon43.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon44.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon45.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon46.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon47.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon48.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon49.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon50.png"></a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="container-fluid" id="add_skill_details">
               <form>
                  <div class="form-group row">
                     <label for="edit-skill-input-name" class="col-md-4 col-form-label">Name</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" id="add-skill-input-name" value="On task">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="add-skill-point-select" class="col-md-4 col-form-label">Point weight</label>
                     <div class="col-md-8">
                        <select class="form-control" id="add-skill-point-select">
                           <option class="Select-option" selected="">0</option>
                           <option class="Select-option">1</option>
                           <option class="Select-option">2</option>
                           <option class="Select-option">3</option>
                           <option class="Select-option">4</option>
                           <option class="Select-option">5</option>
                        </select>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="modal-footer add-skill-modal-footer">
            <div id="add-skill-save-btn">
               <a href="">Cancel</a>
               <button class="btn btn-primary">Save</button>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Add skill modal - END -->

<!-- Edit skill modal - START -->
<div class="modal fade" id="edit-skill-modal" tabindex="-1" role="dialog" aria-labelledby="editSkillModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h class="modal-title" id="editSkillModalLabel"><strong>Edit Skill</strong></h>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body edit-skill-modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                     <div class="col-md-4 col-md-offset-4">
                        <div class="dropdown skill-icon-selection-dropdown">
                           <button class="btn btn-default dropdown-toggle-button" data-toggle="dropdown" id="dropdownMenu1"><img src="/images/skill_icons/skill-icon1.png" class="img-responsive"><span></span></button>
                           <ul class="dropdown-menu" id="dropdown-image-edit-skill" aria-labelledby="dropdownMenu1">
                              <li>
                                 <div class="container row" style="width: 100%;">
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon1.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon2.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon3.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon4.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon5.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon6.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon7.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon8.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon9.png" ></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon10.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon11.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon12.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon13.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon14.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon15.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon16.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon17.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon18.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon19.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon20.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon21.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon22.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon23.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon24.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon25.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon26.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon27.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon28.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon29.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon30.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon31.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon32.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon33.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon34.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon35.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon36.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon37.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon38.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon39.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon40.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon41.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon42.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon43.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon44.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon45.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon46.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon47.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon48.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon49.png"></a>
                                    </div>
                                    <div class="col-md-3 col-xs-6 skill-icons">
                                       <a><img src="/images/skill_icons/skill-icon50.png"></a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="container-fluid" id="edit_skill_details">
               <form>
                  <div class="form-group row">
                     <label for="edit-skill-input-name" class="col-md-4 col-form-label">Name</label>
                     <div class="col-md-8">
                        <input type="text" class="form-control" id="edit-skill-input-name" value="On task">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="edit-skill-point-select" class="col-md-4 col-form-label">Point weight</label>
                     <div class="col-md-8">
                        <select class="form-control" id="edit-skill-point-select">
                           <option class="Select-option" selected="">0</option>
                           <option class="Select-option">1</option>
                           <option class="Select-option">2</option>
                           <option class="Select-option">3</option>
                           <option class="Select-option">4</option>
                           <option class="Select-option">5</option>
                        </select>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="modal-footer edit-skill-modal-footer">
            <div id="edit-skill-delete-btn">
               <a href="">Delete</a>
            </div>
            <div id="edit-skill-save-btn">
               <a href="">Cancel</a>
               <button class="btn btn-primary">Save</button>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Edit skill modal - END -->

<!-- Selected institute - Modal - start -->
<div class="modal fade" id="selected-school" tabindex="-1" role="dialog" aria-labelledby="selectedSchoolModal" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="selectedSchoolModal"><strong>Selected school</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="institute-name-outer-block">
               <div class="institute-select-background"></div>
               <div class="institute-name-inner-block">
                  <h3>MCC</h3>
                  <h4>Chetpet, Chennai, TN, IN</h4>
               </div>
            </div>
            <div class="container" style="width: 100%;">
               <div class="row">
                  <div class="institute-request-image-block">
                     <img src="/images/class_request_image.png" width="200" height="187">
                  </div>
                  <div class="institute-request-text-block">
                     Looks like you're the first one here. If you love Dexter, please share it with other teachers in your school!
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <a data-toggle="tab" data-target="#add-school" id="change-school">
            Change school
            </a>
            <button class="btn btn-primary" data-toggle="tab" data-target="#add-class" id="request-to-join-school">
            Request to join school
            </button>
         </div>
      </div>
   </div>
</div>
<!-- Selected institute - Modal - end -->


      <!-- Can't find the institute - add new - start -->
      <div class="modal fade" id="add-new-institute" tabindex="-1" role="dialog" aria-labelledby="selectedSchoolModal" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="selectedSchoolModal"><strong>Add your institute</strong></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="container" style="width: 100%;">
                     <form class="form-horizontal" role="form">
                        <div class="form-group">
                           <label for="name" class ="control-label col-sm-3">Institute name</label>
                           <div class="col-sm-8">
                              <input type="name" class="form-control" id="name" placeholder="eg., Anna University">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="address" class ="control-label col-sm-3">Address</label>
                           <div class="col-sm-8">
                              <input type="address" class="form-control" id="address" placeholder="123 Any Street">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="email" class ="control-label col-sm-3">City or town</label>
                           <div class="col-sm-8">
                              <input type="email" class="form-control" id="city" placeholder="Chennai">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="pwd" class ="control-label col-sm-3">State or province</label>
                           <div class="col-sm-8">
                              <input type="password" class="form-control" id="state" placeholder="Tamilnadu">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="pwd" class ="control-label col-sm-3">Country</label>
                           <div class="col-sm-8">
                              <input type="dropdown" class="form-control" id="country" placeholder="">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <a data-toggle="tab" href="#add-school">
                  Cancel
                  </a>
                  <button class="btn btn-primary" data-toggle="tab" data-target="#add-class" id="">
                  Add Institute
                  </button>
               </div>
            </div>
         </div>
      </div>
      <!-- Can't find the institute - add new - end -->



<!--Edit Attendance Modal - START -->
<div class="modal fade" id="edit-attendance-modal" tabindex="-1" role="dialog" aria-labelledby="editAttendanceModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <h5 class="modal-title" id="editAttendanceModalLabel"><strong>Change attendance record</strong></h5>
    </div>
    <div class="modal-body attendance-record-modal-body">
      <div class="record-date">
        <h1></h1>
        <p>(Recorded)</p>
      </div>
      <div class="attendance-recorded-students">
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal">Save & close</button>
    </div>
  </div>
</div>
</div>
<!--Edit Attendance Modal - END -->

<!-- student mode - MODAL - story view - START -->
<div class="modal fade" id="student-mode" tabindex="-1" role="dialog" aria-labelledby="studentAccountModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="studentAccountModalLabel"><strong>Student accounts</strong></h5>
      </div>
      <div class="modal-body student-account-body-content">
          <div class="jumbotron student-account-content">
         <h><strong>Set up Student accounts!</strong></h>
         <div class="customize-students">
            <span>Students can customize their monsters, add work to their digital portfolio, and more! </span>
            <a href="https://www.classdojo.com/studentstories/" target="_blank">
            <span>Learn more</span></a>
         </div>
         <div class="points-to-student-account">
           <div>1. Pin Student Poster to your classroom wall.</div>
          <div>2. Students tap 'Login' from the app or classdojo.com to scan the code.</div>
         </div>

         <img src="images/portfolio_image.png">
         <div class="poster-btn">
            <button class="btn btn-primary">
            <img src="images/pdf_icon.png" width="20px" icon="file_pdf_white">
            <span>Get poster</span>
            </button>
         </div>
         <div class="invite-codes">
            <a href="">Get invite codes</a>
            or <a href="">poster in another language</a>
         </div>

      </div>
   <div class="jumbotron student-portfolio">
      <div>
         <h><strong>Students can log in at home!</strong></h>
      </div>
      <a href="">Get invites</a>
   </div>
      </div>

    </div>
  </div>
</div>
<!-- student mode - MODAL - story view - END -->

<!-- Delete post- modal - START -->
<div class="modal fade" id="delete-post-modal" tabindex="-1" role="dialog" aria-labelledby="deletePostModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
        <h5 class="modal-title" id="deletePostModalLabel"><strong>Delete post</strong></h5>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this post? This cannot be undone.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary delete-post-cancel-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger delete-post-btn">Delete post</button>
      </div>
    </div>
  </div>
</div>
<!-- Delete post- modal - END -->

<!-- Edit post - moda - START -->
<div class="modal fade" id="edit-post-modal" tabindex="-1" role="dialog" aria-labelledby="editPostModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
        <h5 class="modal-title" id="editPostModalLabel"><strong>Edit post</strong></h5>
      </div>
      <div class="modal-body">
        <form>
               <div class="jumbotron post-message-content">
                  <div class="form-group row" >
                     <div class="col-md-2">
                        <div class="profile-icon-post"></div>
                     </div>
                     <div class="col-md-10">
                        <div>
                         <textarea type="text" style="border: none; box-shadow: none; resize: none; overflow: hidden;" class="form-control" placeholder="What's happening in your classroom" aria-describedby="basic-addon2" value="Hello dexter">Hello Dexter</textarea>
                         </div>
                         <div class="row" id="edit-image-content">
                            <div class="col-md-6">
                              <button type="button" onclick='closeImageOnEditContent(this);' class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                             <img id="edit-post-file-upload-image" src="/images/cdojoimage1.png" width="100%" height="100%">
                           </div>
                         </div>

                     </div>
                  </div>
                  <hr>
                  <div class="form-group" id="add-profile-button-in-edit-post">
                     <div style="float: left;">
                        <button type="button" class="btn add-photo-btn" onclick="showFilePickerForAddPhotoInEditPost()"><i class="glyphicon glyphicon-camera"></i>&nbsp<span>Add photo</span></button>
                     </div>
                     <div style="float: right;">
                        <button class="btn btn-primary post-btn">Save edits</button>
                     </div>

                  </div>
               </div>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- Edit post - moda - END -->

<!-- Account settings - start -->
<div class="modal fade" id="update-email-address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLongTitle"><strong>Account settings</strong></h5>
         </div>
         <div class="modal-body row-fluid account-settings-body">
            <!-- side menu - desktop view - start -->
            <div class="col-md-3 hidden-xs" id="account-settings-sidebar">
               <div class='span2 sidebar'>
                  <ul class="nav nav-tabs nav-stacked">
                     <li class="active">
                        <a data-toggle="tab" href="#edit-profile">Edit profile</a>
                     </li>
                     <li>
                        <a data-toggle="tab" href="#change-password">Change password</a>
                     </li>
                     <li>
                        <a data-toggle="tab" href="#language-and-region">Language and region</a>
                     </li>
                     <li>
                        <a data-toggle="tab" href="#messaging">Messaging</a>
                     </li>
                     <li>
                        <a data-toggle="tab" href="#comments">Comments</a>
                     </li>
                     <li>
                        <a data-toggle="tab" href="#advanced">Advanced</a>
                     </li>
                     <li>
                        <a href="">Privacy and terms</a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- side menu - desktop view - end -->
            <div class="col-md-9">
               <div class="tab-content">
                  <!-- Edit profile - start -->
                  <div id="edit-profile" class="tab-pane fade in active">
                     <div class="row">
                        <div class="col-md-4 col-xs-3"></div>
                        <div class="col-md-4 col-xs-6">
                           <div class="edit-profile-content" style="text-align: center;">
                              <div  id="account-settings-profile-icon">
                                 <div class="account-settings-profile-icon" style="display: block; margin: 0 auto;"></div>
                              </div>
                              <div id="add-photo">
                                 <a href="">Add photo</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-xs-3"></div>
                     </div>
                     <div style="padding: 2rem">
                        <div class="form-group row">
                           <label for="example-text-input" class="col-md-3 col-xs-3 col-form-label text-right">Title</label>
                           <div class="col-md-9 col-xs-9">
                              <input class="form-control" type="title" value="Mr." id="example-text-input">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="example-text-input" class="col-md-3 col-xs-3 col-form-label text-right">FirstName</label>
                           <div class="col-md-9 col-xs-9">
                              <input class="form-control" type="firstName" value="wall" id="example-text-input">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="example-text-input" class="col-md-3 col-xs-3 col-form-label text-right">LastName</label>
                           <div class="col-md-9 col-xs-9">
                              <input class="form-control" type="lastName" value="nick" id="example-text-input">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="example-text-input" class="col-md-3 col-xs-3 col-form-label text-right">Email</label>
                           <div class="col-md-9 col-xs-9">
                              <input class="form-control" type="email" value="wallnick@gmail.com" id="example-text-input">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="example-text-input" class="col-md-3 col-xs-3 col-form-label text-right">Role</label>
                           <div class="col-md-9 col-xs-9">
                              <select class="form-control form-control-lg">
                                 <option>Teacher</option>
                                 <option>School Leader</option>
                                 <option>Other school staff</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Edit profile - end -->
                  <!-- Change password - START -->
                  <div id="change-password" class="tab-pane fade">
                     <div class="change-pwd-content">
                        <form class="form-horizontal">
                           <div class="form-group">
                              <label class="control-label col-md-4 text-right" for="email">New password:</label>
                              <div class="col-md-8">
                                 <input type="newPassword" class="form-control" id="newPassword">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-4 text-right" for="pwd">Confirm password:</label>
                              <div class="col-sm-8">
                                 <input type="confirmPassword" class="form-control" id="confirmPassword">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                 <button type="submit" class="btn btn-secondary" disabled="">Save password</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- Change password - END -->
                  <!-- Language and region - START -->
                  <div id="language-and-region" class="tab-pane fade">
                     <select class="form-control bfh-languages" data-language="en"></select>
                  </div>
                  <!-- Language and region - END -->
                  <!-- Messaging - START -->
                  <div id="messaging" class="tab-pane fade">
                     <div class="row" style="margin-top: 2rem;">
                        <div class="col-md-9 col-xs-9">
                           <div style="padding: 1rem 0px;">
                              <h> Quiet hours </h>
                           </div>
                           <div style="font-size: 11px;">Message push notifications are muted on your mobile devices during quiet hours</div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" data-toggle="toggle">
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin-top: 2rem;">
                        <div class="col-md-9 col-xs-9">
                           <div style="padding: 1rem 0px;">
                              <h> Mute weekend notifications </h>
                           </div>
                           <div style="font-size: 11px;">Message push notifications are muted on your mobile devices Sat - Sun</div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" data-toggle="toggle">
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin-top: 2rem;">
                        <div class="col-md-9 col-xs-9">
                           <div style="padding: 1rem 0px;">
                              <h> Download message history </h>
                           </div>
                           <div style="font-size: 11px;">View and download your conversations with parents</div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <button class="btn btn-primary"> Download </button>
                        </div>
                     </div>
                  </div>
                  <!-- Messaging - END -->
                  <!-- Comments - START -->
                  <div id="comments" class="tab-pane fade">
                     <div class="row" style="margin-top: 2rem;">
                        <div class="col-md-9 col-xs-9">
                           <div style="padding: 1rem 0px;">
                              <h> Comments </h>
                           </div>
                           <div style="font-size: 11px;">Let parents and collaborating teachers comment on your Class Story posts. You can delete individual comments on the posts themselves.</div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" data-toggle="toggle">
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Comments - END -->
                  <!-- Advanced - START -->
                  <div id="advanced" class="tab-pane fade">
                     <div class="row" style="margin-top: 2rem;">
                        <div class="col-md-9 col-xs-9">
                           <div style="padding: 1rem 0px;">
                              <h> Active devices </h>
                           </div>
                           <div style="font-size: 11px;">Click 'View all' to see a complete listing of devices you're currently logged in from.</div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <button class="btn btn-primary"> View all </button>
                        </div>
                     </div>
                     <div class="row" style="margin-top: 2rem;">
                        <div class="col-md-9 col-xs-9">
                           <div style="padding: 1rem 0px;">
                              <h> Allow parent connection requests </h>
                           </div>
                           <div style="font-size: 11px;">Your students' parents will be able to request to join your class, which you can either approve or decline.</div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" data-toggle="toggle">
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin-top: 2rem;">
                        <div class="col-md-9 col-xs-9">
                           <div style="padding: 1rem 0px;">
                              <h> Experimental features </h>
                           </div>
                           <div style="font-size: 11px;">We're still testing these out. They may change, break, or disappear at any time. We'd love your feedback! Email us at hello@classdojo.com.</div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" data-toggle="toggle">
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-9 col-xs-9" style="margin-top: 2rem;">
                           <div class="form-check">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              Fullscreen mode
                              </label>
                           </div>
                           <div class="form-check">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              Class goal
                              </label>
                           </div>
                           <div class="form-check">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              Class banner
                              </label>
                           </div>
                           <div class="form-check">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              Desktop notifications
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin-top: 2rem;">
                        <div class="col-md-9 col-xs-9">
                           <div style="padding: 1rem 0px;">
                              <h> Delete your account </h>
                           </div>
                           <div style="font-size: 11px;">This will remove all information about you, your classes, and your students. Once deleted, your account can't be recovered.</div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <button class="btn btn-danger"> Delete </button>
                        </div>
                     </div>
                  </div>
                  <!-- Advanced - END -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Account settings - end -->


<!-- Reset bubbles - modal - START -->
<div class="modal fade bs-example-modal-lg" id="resetBubbles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong>Reset bubbles</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body reset-bubble-modal-body">
            <div class="container row student-group-btn">
               <button class="btn" id="student-reset-bubbles-btn" onclick="studentResetBubblesFunction()" data-toggle="tab" href="#student-reset-bubbles">Students</button>
               <button class="btn" id="group-reset-bubbles-btn" onclick="groupResetBubblesFunction()" data-toggle="tab" href="#group-reset-bubbles">Groups</button>
            </div>
            <div class="tab-content">
               <div id="student-reset-bubbles" class="student-tab tab-pane fade in active">
                  <div class="container student-reset-bubble-container">
                     <div class="row">
                       <div class= "col-md-3">
                          <a class="reset-block-layer" href="#" id="reset-student-1">
                             <img src="/images/student_/images/cute0.png">
                             <div id="student-name"><span>Beyonce</span></div>
                             <div class="student-select-outer-layer">
                                <div class="student-select-inner-layer">0</div>
                             </div>
                          </a>
                       </div>
                       <div class="col-md-3">
                          <a class="reset-block-layer" href="#" id="reset-student-2">
                             <img src="/images/student_/images/cute1.png">
                             <div id="student-name"><span>Denzel</span></div>
                             <div class="student-select-outer-layer">
                                <div class="student-select-inner-layer">0</div>
                             </div>
                          </a>
                       </div>
                       <div class="col-md-3">
                          <a class="reset-block-layer" href="#" id="reset-student-3">
                             <img src="/images/student_/images/cute2.png">
                             <div id="student-name"><span>Jennifer</span></div>
                             <div class="student-select-outer-layer">
                                <div class="student-select-inner-layer">0</div>
                             </div>
                          </a>
                       </div>
                       <div class="col-md-3">
                          <a class="reset-block-layer" href="#" id="reset-student-4">
                             <img src="/images/student_/images/cute3.png">
                             <div id="student-name"><span>Justin</span></div>
                             <div class="student-select-outer-layer">
                                <div class="student-select-inner-layer">0</div>
                             </div>
                          </a>
                       </div>
                       <div class="col-md-3">
                          <a class="reset-block-layer" href="#" id="reset-student-5">
                             <img src="/images/student_/images/cute4.png">
                             <div id="student-name"><span>Leonardo</span></div>
                             <div class="student-select-outer-layer">
                                <div class="student-select-inner-layer">0</div>
                             </div>
                          </a>
                       </div>
                       <div class="col-md-3">
                          <a class="reset-block-layer" href="#" id="reset-student-6">
                             <img src="/images/student_/images/cute5.png">
                             <div id="student-name"><span>Nick peterson george justin</span></div>
                             <div class="student-select-outer-layer">
                                <div class="student-select-inner-layer">0</div>
                             </div>
                          </a>
                       </div>
                    </div>

                  </div>
               </div>
               <div id="group-reset-bubbles" class="tab-pane fade">
                  <div class="container group-reset-bubble-container">
                     <div class="row">
                        <div class="col-md-4">
                           <a class="group_block_layer" id="group-reset-bubbles-1">
                              <div class="group-image">
                                 <div class="group-student-image-outer">
                                    <div class="group-student-image-background" style="background-image: url(/images/student_/images/cute6.png); "></div>
                                 </div>
                                 <div class="group-student-image-outer">
                                    <div class="group-student-image-background" style="background-image: url(/images/student_/images/cute7.png); "></div>
                                 </div>
                                 <div class="group-student-image-outer">
                                    <div class="group-student-image-background" style="background-image: url(/images/student_/images/cute8.png); "></div>
                                 </div>
                              </div>
                              <div class="group_title"><span>Table One</span></div>
                              <div class="group-select-outer-layer">
                                 <div class="group-select-inner-layer">0</div>
                              </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                           <a class="group_block_layer" id="group-reset-bubbles-2">
                              <div class="group-image">
                                 <div class="group-student-image-outer">
                                    <div class="group-student-image-background" style="background-image: url(/images/student_/images/cute6.png); "></div>
                                 </div>
                                 <div class="group-student-image-outer">
                                    <div class="group-student-image-background" style="background-image: url(/images/student_/images/cute7.png); "></div>
                                 </div>
                                 <div class="group-student-image-outer">
                                    <div class="group-student-image-background" style="background-image: url(/images/student_/images/cute8.png); "></div>
                                 </div>
                              </div>
                              <div class="group_title"><span>Table Two</span></div>
                              <div class="group-select-outer-layer">
                                 <div class="group-select-inner-layer">0</div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container-fluid row" style="width: 100%;">
                  <div class="jumbotron reset-bubble-text">
                        Resetting students doesn't delete data and doesn't reset groups
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div class="row reset-bubble-footer-btn">
               <div class="select-all-stud">
                  <a class="select_all_student">Select all</a>
               </div>
               <div class="cancel-feedback-btn">
                  <button data-toggle="tab" data-target="#classRoom" class="btn cancel-btn">Cancel</button>
                  <button class="btn reset-bubble-btn">Reset bubbles</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Reset bubbles - modal - END-->

<!-- Display settings modal - START -->
<div class="modal" id="displaySettings">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <strong>Display settings</strong>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body" style="margin-top: 0px !important; overflow-y: auto; height: 25rem;">
            <div class="container-fluid row" style="width: 100%; font-size: 12px">
               <div class="col-md-6">
                  <div>
                     <div style="font-size: 18px"> Student order</div>
                     <div class="radio">
                        <label><input type="radio" name="optradio">Sort by first name</label>
                     </div>
                     <div class="radio">
                        <label><input type="radio" name="optradio">Sort by last name</label>
                     </div>
                  </div>
                  <div style="margin-top: 5rem;">
                     <div style="font-size: 18px"> Show award notifications</div>
                     <div class="checkbox">
                        <label><input type="checkbox" value="">Positive</label>
                     </div>
                     <div class="checkbox">
                        <label><input type="checkbox" value="">Needs work</label>
                     </div>
                  </div>
                  <div style="margin-top: 5rem;">
                     <div style="font-size: 18px"> Point bubbles</div>
                     <div class="radio">
                        <label><input type="radio" name="optradio">Combined total</label>
                     </div>
                     <div class="radio">
                        <label><input type="radio" name="optradio">Separate totals</label>
                     </div>
                     <div class="radio">
                        <label><input type="radio" name="optradio">Don't show points</label>
                     </div>
                  </div>
               </div >
               <div class="col-md-6">
                  <div>
                     <div style="font-size: 18px"> Last names</div>
                     <div class="radio">
                        <label><input type="radio" name="optradio">Show last names</label>
                     </div>
                     <div class="radio">
                        <label><input type="radio" name="optradio">Hide last names</label>
                     </div>
                  </div>
                  <div style="margin-top: 5rem;">
                     <div style="font-size: 18px"> Play award sounds</div>
                     <div class="checkbox">
                        <label><input type="checkbox" value="">Positive</label>
                     </div>
                     <div class="checkbox">
                        <label><input type="checkbox" value="">Needs work</label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div style="float: right; margin-top: 10px;">
               <button onclick="window.history.back();" class="btn" style="background: white !important; color: rgb(163, 163, 163); border: none; user-select: none;">Cancel</button>
               <button class="btn btn-primary">Save settings</button>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Display settings modal - END -->

<!-- Give feedback to every student modal - START -->
<div class="modal" id="add-student-feedback-wholeclass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title"><strong>Give feedback to 5 students</strong></h5>
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
                     <div class="col-md-3" >
                        <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                           <div class="task-points">
                              <div class="selected-btn">1</div>
                           </div>
                           <img src="/images/skill_icons/skill-icon10.png">
                           <div class="task-name">
                              <p>Helping others</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                           <div class="task-points">
                              <div class="selected-btn">1</div>
                           </div>
                           <img src="/images/skill_icons/skill-icon1.png">
                           <div class="task-name">
                              <p>On task</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                           <div class="task-points">
                              <div class="selected-btn">1</div>
                           </div>
                           <img src="/images/skill_icons/skill-icon7.png">
                           <div class="task-name">
                              <p>Participating</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                           <div class="task-points">
                              <div class="selected-btn">1</div>
                           </div>
                           <img src="/images/skill_icons/skill-icon6.png">
                           <div class="task-name">
                              <p>Persistence</p>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-3">
                        <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                           <div class="task-points">
                              <div class="selected-btn">1</div>
                           </div>
                           <img src="/images/skill_icons/skill-icon5.png">
                           <div class="task-name">
                              <p>Teamwork</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="student-task" data-toggle="modal" data-target="#edit-skill-modal">
                           <div class="task-points">
                              <div class="selected-btn">1</div>
                           </div>
                           <img src="/images/skill_icons/skill-icon9.png">
                           <div class="task-name">
                              <p>Working hard</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="positive-tab-add-skills" data-toggle="modal" data-target="#myInstituteModal" onclick="connectSkills()">
                           <img src="/images/skill_icons/edit-skill-icon.png">
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

<!-- Add post modal - START -->
<div class="modal fade" id="add-post-modal" tabindex="-1" role="dialog" aria-labelledby="addPostModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="addPostModalLabel">Share on 6 Student Stories</h4>
      </div>
      <div class="modal-body">
        <form>
           <div class="jumbotron post-message-content">
              <div class="form-group row" >
                 <div class="col-md-2">
                    <div class="profile-icon-post"></div>
                 </div>
                 <div class="col-md-10">
                    <div>
                     <textarea type="text" style="border: none; box-shadow: none; resize: none; overflow: hidden;" class="form-control" placeholder="What's happening in your classroom" aria-describedby="basic-addon2"></textarea>
                    </div>
                    <div class="row" id="uploading-image-content">
                        <div class="col-md-6">
                           <button type="button" onclick='closeImage(this)' class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                         <img id="file-upload-image" width="100%" height="100%">
                       </div>
                     </div>
                 </div>
              </div>
              <hr>
              <div class="form-group" id="add-profile-buttons">
                 <div style="float: left;">
                    <button type="button" class="btn add-photo-btn" onclick="showFilePickerForShareOnToAddPhoto()"><i class="glyphicon glyphicon-camera"></i>&nbsp;<span>Add photo</span></button>
                 </div>
                 <div style="float: right;">
                    <button class="btn btn-primary post-btn"> Post</button>
                 </div>
              </div>
           </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Add post modal - END -->

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
      <div class="add-student-modal-body">
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
      <div class="modal-body add-student-modal-body-list">
        <div class="students-not-added-yet text-muted">
            No students added yet
         </div>
         <div id="number-of-students"></div>
         <div id="list"></div>
      </div>
      <div class="modal-footer add-student-modal-footer">
        <a data-dismiss="modal">Cancel</a>
        <button type="button" class="btn" disabled="" id="add_student_btn">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Add new student modal - END -->

<!-- Group - modal - START -->
<div class="modal fade" id="group-modal" tabindex="-1" role="dialog" aria-labelledby="groupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header group-view-modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="groupModalLabel">
         <div class="dropdown col-md-5">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="/images/class_view_/images/settings_icon.png"> <b class="caret"></b></a>
            <ul class="dropdown-menu">
               <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> &nbsp; Edit group</a></li>
               <li><a href="#"><span class="glyphicon glyphicon-trash"></span> &nbsp; Delete group</a></li>
            </ul>
         </div>
         <span class="group-title"><strong>Table one</strong></span>
         </h5>

      </div>
      <div class="modal-body group-view-modal-body">
        <div class="container-fluid group-view-modal-container">
           <div class="row">
              <div class= "col-md-3">
                 <a href="#add-student-feedback-wholeclass" data-toggle="modal">
                    <img src="/images/student_/images/cute0.png">
                    <div id="group-view-modal-student-name"><span>Beyonce</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer">0</div>
                    </div>
                 </a>
              </div>
              <div class= "col-md-3">
                 <a href="#add-student-feedback-wholeclass" data-toggle="modal">
                    <img src="/images/student_/images/cute1.png">
                    <div id="group-view-modal-student-name"><span>Denzel</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer">0</div>
                    </div>
                 </a>
              </div>
              <div class= "col-md-3">
                 <a href="#add-student-feedback-wholeclass" data-toggle="modal">
                    <img src="/images/student_/images/cute2.png">
                    <div id="group-view-modal-student-name"><span>Jennifer</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer">0</div>
                    </div>
                 </a>
              </div>
              <div class= "col-md-3">
                 <a href="#add-student-feedback-wholeclass" data-toggle="modal">
                    <img src="/images/student_/images/cute3.png">
                    <div id="group-view-modal-student-name"><span>Justin</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer">0</div>
                    </div>
                 </a>
              </div>
              <div class= "col-md-3">
                 <a href="#add-student-feedback-wholeclass" data-toggle="modal">
                    <img src="/images/student_/images/cute4.png">
                    <div id="group-view-modal-student-name"><span>Leonard</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer">0</div>
                    </div>
                 </a>
              </div>
           </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="award-group-btn">Award group</div>
      </div>
    </div>
  </div>
</div>
<!-- Group - modal - END -->

<!-- Create new group - modal - START -->
<div class="modal fade" id="add-new-group" tabindex="-1" role="dialog" aria-labelledby="addNewGroupLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewGroupLabel"><strong>Create group</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="group-name-content">
        <form class="form-inline text-center" >
           <div class="form-group">
             <label for="email">Group name:</label>
             <input type="text" class="form-control" id="group-name">
           </div>
         </form>
      </div>
      <div class="modal-body create-new-group-modal-body">
         <div class="container-fluid create-new-group-modal-container">
           <div class="row">
              <div class= "col-md-3">
                 <a class="student-to-add-group" id="beyonce-add-to-group">
                    <img src="/images/student_/images/cute0.png">
                    <div id="create-group-modal-student-name"><span>Beyonce</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer"><img src="/images/tick_image.png"></div>
                    </div>
                 </a>
              </div>
              <div class= "col-md-3">
                 <a class="student-to-add-group" id="denzel-add-to-group">
                    <img src="/images/student_/images/cute1.png">
                    <div id="create-group-modal-student-name"><span>Denzel</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer"><img src="/images/tick_image.png"></div>
                    </div>
                 </a>
              </div>
              <div class= "col-md-3">
                 <a class="student-to-add-group" id="jennifer-add-to-group">
                    <img src="/images/student_/images/cute2.png">
                    <div id="create-group-modal-student-name"><span>Jennifer</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer"><img src="/images/tick_image.png"></div>
                    </div>
                 </a>
              </div>
              <div class= "col-md-3">
                 <a class="student-to-add-group" id="justin-add-to-group">
                    <img src="/images/student_/images/cute3.png">
                    <div id="create-group-modal-student-name"><span>Justin</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer"><img src="/images/tick_image.png"></div>
                    </div>
                 </a>
              </div>
              <div class= "col-md-3">
                 <a class="student-to-add-group" id="leonard-add-to-group">
                    <img src="/images/student_/images/cute4.png">
                    <div id="create-group-modal-student-name"><span>Leonard</span></div>
                    <div class="student-select-outer-layer">
                       <div class="student-select-inner-layer"><img src="/images/tick_image.png"></div>
                    </div>
                 </a>
              </div>
           </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn create-group-modal-cancel-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-secondary create-group-modal-create-btn" disabled="" id="create-group-btn">Create group</button>
      </div>
    </div>
  </div>
</div>
<!-- Create new group -  modal - END -->
