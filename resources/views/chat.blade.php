

@extends('layouts.class')

@section('content')
      <!-- Class selection navigation - End -->

      <!-- Message content - START -->


      <div class="container-fluid">
         <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <div id="message-content">
                  <div class="container" style="width: 100%;" >
                     <div class="row">
                        <div class="col-md-3 message-header-block">
                           <span class="message-title">Messages</span>
                           <div class="vertical-menu">


                              <?php
                              $users= \DB::table('users')->get();
                              ?>
                               @foreach($users as $user)
                               @if($user->id!=Auth::User()->id)
                             <li class="active">
                                <a  class="userid active" id="userid{{ $user->id}}" href="{{ url('/message_chat/'.$user->id) }}" data-id="{{ $user->id }}">
                                   <div class="row">
                                      <div class="col-md-2">
                                         <img src="{{asset('images/all_parents_icon.png')}}">
                                      </div>

                                      <div class="col-md-10">
                                         <div id="parent-name">
                                            {{ $user->name  }}
                                         </div>
                                         <div id="all-parent-connect" class="text-muted">
                                            No parents connected
                                         </div>
                                      </div>
                                   </div>
                               </a>
                             </li>
                             @endif
                              @endforeach
                          </form>

   <span class="message-title">Chat With Groups </span>
                              <?php
                              $groups= \DB::table('groups')->get();
                              ?>
                               @foreach($groups as $group)

                             <li class="active">
                                <a  class="userid active" id="userid{{ $group->id}}" href="{{ url('/message_groupchat/'.$group->id) }}" data-id="{{ $group->id }}">
                                   <div class="row">
                                      <div class="col-md-2">
                                         <img src="{{asset('images/all_parents_icon.png')}}">
                                      </div>

                                      <div class="col-md-10">
                                         <div id="parent-name">
                                            {{ $group->groupname  }}
                                         </div>

                                      </div>
                                   </div>
                               </a>
                             </li>

                              @endforeach
                          </form>
                           </div>



                        </div>


                        <div class="col-md-9 message-main-content">
                           <span class="message-main-content-title">All Parents</span>
                           <div class="chatting-message-block">
                              <div class="container" style="width: 100%;">
                                 <div class="row">
                                    <div class="chat" data-chat="person2">
                                      <div class="conversation-start">
                                          <!-- <span>Today, 5:38 PM</span> -->
                                      </div>
                                      <input type="hidden" name="user_id"  id="user_id" value="{{ request()->route('id') }}">

                                      <message :messages="messages" :user="{{ Auth::User()->id }}" ></message>


                                  </div>
                                 </div>
                              </div>
                           </div>
                           <div class="scheduled-messages">
                             <div class="no-of-scheduled-messages">
                               4 Scheduled messages
                               <a id="expand-scheduled-msg">Expand</a>
                             </div>

                              <div id="scheduled-message-list">
                                <li>
                                  <div class="scheduled-list-content">
                                    <div class="scheduled-date">Fri, 27 Oct 2017 15:00</div>
                                    <div class="scheduled-msg-text">welcome</div>
                                  </div>
                                  <div class="scheduled-list-content-close-btn">
                                    <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>x</span>
                                  </div>
                               </li>
                               <li>
                                 <div class="scheduled-list-content">
                                    <div class="scheduled-date">Fri, 27 Oct 2017 15:00</div>
                                    <div class="scheduled-msg-text">welcome</div>
                                  </div>
                                  <div class="scheduled-list-content-close-btn">
                                    <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>x</span>
                                  </div>
                               </li>
                               <li>
                                 <div class="scheduled-list-content">
                                    <div class="scheduled-date">Fri, 27 Oct 2017 15:00</div>
                                    <div class="scheduled-msg-text">welcome</div>
                                  </div>
                                  <div class="scheduled-list-content-close-btn">
                                    <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>x</span>
                                  </div>
                               </li>
                              </div>
                           </div>

                           <nav class="navbar fixed-bottom navbar-light bg-faded">
                              <sent-message v-on:messagesent="addMessage" :user="{{  Auth::user()->id }}" :sentto="{{request()->route('id')}}"></sent-message>

                           </nav>
                        </div>



                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Message content - END -->

      <!-- <?php //include("myInstitute_modal.php"); ?> -->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>

      <script type="text/javascript">

         $('[data-toggle="popover"]').popover({
              html: true,
               content: function() {
                   return $('#popover-content').html();
                 }
         }).on('shown.bs.popover', function () {
           var date = new Date();
           var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
           var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());

           var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
           var am_pm = date.getHours() >= 12 ? "PM" : "AM";
           hours = hours < 10 ? "0" + hours : hours;
           var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
           var time = hours + ":" + minutes + " " + am_pm;

           $('#date-picker-input').datepicker({
             format: "dd/mm/yyyy",
             autoclose: true,
             orientation: 'auto top'
           });

           $('#time-picker-input').timepicker({
            format: "hh:mm"
           });

           $('#date-picker-input').datepicker('setDate', today);
           $('#time-picker-input').timepicker('setTime', time);
       });

         $('body').on('click', '#scheduled-checkbox', function(){
           if (this.checked) {
                 $('#message-send-btn').text('Schedule');
             }
             else {
               $('#message-send-btn').text('Send');
             }
        });
      </script>


@endsection
