<template>
<nav style="">
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
                        <div class="user-name"></div>
                        <div class="school-name"><strong>Teacher at Government Higher Secondary School</strong></div>
                        <div>
                            <button class="btn btn-primary pd-resource-btn"> PD Resources </button>
                            <button class="btn btn-primary pd-resource-btn" onclick="window.location.href=''; addInstitute()"> Add Institute </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 class-list">

                <!-- List of classes - start  -->
                <div class="row">

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
                        <a href="student_view.php">
                            <div class="class-image-content">
                                <img src="/images/class_images/class1.png">
                                <div id="class-name">Demo Class</div>
                                <div id="no-of-students">5 Students</div>

                            </div>
                        </a>

                    </div>

                    <div class="class-block">
                        <div class="class-settings">
                            <span>
                              <div class="dropdown-toggle" data-toggle="dropdown">
                                   <div class="class-settings-icon"><img src="images/class_images/settings_icon.png" width="16" icon="gear" height="16"></div>
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
                        <a href="student_view.php">
                            <div class="class-image-content">
                                <img src="/images/class_images/class2.png">
                                <div id="class-name">Music Class</div>
                                <div id="no-of-students">9 Students</div>

                            </div>
                        </a>

                    </div>


                    <div class="class-block">
                        <a href="add_class.php">
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

</nav>
</template>
<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
<style>
body{
    background-color:rgb(245, 245, 243) !important;
}
</style>
