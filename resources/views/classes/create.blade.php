@extends('layouts.wizard')
@section('content')
<div  class="add-from-class" style="border-radius: 0.5rem; width: 55rem; margin-left: auto; margin-right: auto;">
<form class="form-horizontal" id="add-class" action="{{ route('class.create',Hashids::encode(request()->route('id'))) }}" method="post">
    {{ csrf_field() }}
    <!-- Timeline - start -->
    <ul>
       <li class="class-point"><span>Class</span></li>
       <li class="students-point"><span>Students</span></li>
       <li class="invite-point"><span>Invites</span></li>
    </ul>
    <div class="add-class-timeline" style="margin-bottom:20px;">
       <div class="add-class-timeline-outer-fill-layer"></div>
       <div class="add-class-timeline-outer-point"></div>
    </div>
    <!-- Timeline - end -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add a new class</h3>
  </div>
  <div class="panel-body">
      <div class="container" style="width: 100%;">
         <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <input type="hidden" name="avatar" id="class_avatar" value="@if(empty(old('avatar')))class1.png @else{{ old('avatar') }}@endif">
               <div class="dropdown class-icon-selection-dropdown" style="padding-top:0rem;">
                <button class="btn btn-default dropdown-toggle-button" data-toggle="dropdown" id="dropdownMenu1"><img src="/images/class_images/@if(empty(old('avatar')))class1.png @else{{ old('avatar') }}@endif" class="img-responsive"><span></span></button>
                <ul class="dropdown-menu" id="dropdown-image-add-class" aria-labelledby="dropdownMenu1" style="margin:0rem;">
                   <li>
                       <div class="container row" style="width: 100%;">
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class1.png" ></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class2.png" ></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class3.png" ></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class4.png" ></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class5.png"></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class6.png" ></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class7.png" ></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class8.png" ></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class9.png" ></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class10.png"></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class11.png"></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class12.png"></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class13.png"></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class14.png"></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class15.png"></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class16.png"></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class17.png"></a>
                          </div>
                          <div class="col-md-3 col-xs-6 class-icons">
                             <a href="javascript:void(0);"><img src="/images/class_images/class18.png"></a>
                          </div>
                       </div>
                   </li>
                </ul>
             </div>
             @if ($errors->has('avatar'))
                 <span class="help-block">
                     <strong>{{ $errors->first('avatar') }}</strong>
                 </span>
             @endif
            </div>



         </div>
         <div class="row" style="margin-top:10px;">
             <div class="form-group {{ $errors->has('class_name') ? ' has-error' : '' }}">
                <label for="class-name-input" class="col-sm-3 col-form-label text-right">Class name</label>
                <div class="col-sm-8">
                   <input type="text" name="class_name" class="form-control" id="class-name-input" placeholder="e.g., &quot;Homeroom&quot;" value="{{ old('class_name') }}">
                   @if ($errors->has('class_name'))
                       <span class="help-block">
                           <strong>{{ $errors->first('class_name') }}</strong>
                       </span>
                   @endif
                </div>
             </div>
             {{-- For Schools --}}
             @if ($institute->type=="School")
                 <div class="form-group {{ $errors->has('grade') ? ' has-error' : '' }}">
                    <label for="selectGrade" class="col-sm-3 col-form-label text-right">Grade</label>
                    <div class="col-sm-8">
                       <select class="form-control" name="grade" id="selectGrade">
                          <option value="" selected>Select year</option>
                          <option value="Pre-School">Pre-School</option>
                          <option value="Kindergarten">Kindergarten</option>
                          <option value="1st Grade">1st Grade</option>
                          <option value="2nd Grade">2nd Grade</option>
                          <option value="3rd Grade">3rd Grade</option>
                          <option value="4th Grade">4th Grade</option>
                          <option value="5th Grade">5th Grade</option>
                          <option value="6th Grade">6th Grade</option>
                          <option value="7th Grade">7th Grade</option>
                          <option value="8th Grade">8th Gendifrade</option>
                          <option value="9th Grade">9th Grade</option>
                          <option value="10th Grade">10th Grade</option>
                          <option value="11th Grade">11th Grade</option>
                          <option value="12th Grade">12th Grade</option>
                          <option value="Other">Other</option>
                       </select>
                       @if ($errors->has('grade'))
                           <span class="help-block">
                               <strong>{{ $errors->first('grade') }}</strong>
                           </span>
                       @endif
                    </div>
                 </div>
             @else
             {{-- For Colleges , Universities, Others--}}
             <div class="form-group {{ $errors->has('grade') ? ' has-error' : '' }}">
                <label for="selectGrade" class="col-sm-3 col-form-label text-right">Year</label>
                <div class="col-sm-8">
                   <select class="form-control" name="grade" id="selectGrade">
                      <option value="" selected>Select year</option>
                      <option value="First Year">First Year</option>
                      <option value="Second Year">Second Year</option>
                      <option value="Third Year">Third Year</option>
                      <option value="Fourth Year">Fourth Year</option>
                      <option value="Fifth Year">Fifth Year</option>
                      <option value="Other">Other</option>
                   </select>
                   @if ($errors->has('grade'))
                       <span class="help-block">
                           <strong>{{ $errors->first('grade') }}</strong>
                       </span>
                   @endif
                </div>
             </div>
         @endif
         </div>
      </div>
  </div>
  <div class="panel-footer text-right">
      <a href="{{ route('ins.view',Hashids::encode(request()->route('id'))) }}" style="margin-right:30px;">Cancel</a>
      <button type="submit" class="btn btn-primary"  >
          Add Class
      </button>
  </div>
</div>
</form>
 </div>
@endsection
