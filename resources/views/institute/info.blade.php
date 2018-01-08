@extends('layouts.wizard')
@section('content')
<div style="border-radius: 0.5rem; width: 55rem;  padding-top:8rem; margin-left: auto; margin-right: auto;">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Join your {{ $institute->type }}</h3>
  </div>
  <div class="panel-body" style="padding:0px; background-color:rgb(245, 245, 243);">
      <div class="institute-name-outer-block">
         <div class="institute-select-background"></div>
         <div class="institute-name-inner-block">
             <h3><strong>{{  $institute->name }}</strong></h3>
            <h5 class="text-center"> {{ $institute->address }}, {{ $institute->city }}, {{ $institute->state }}, {{ $institute->country }}</h5>
         </div>
      </div>
      <div class="container" style="width: 100%;">
         <div class="row">
            <div class="institute-request-image-block">
               <img src="/images/class_request_image.png" width="200" height="187">
            </div>
            <div class="institute-request-text-block">
               Looks like you're the first one here. If you love Dexter, please share it with other teachers in your {{ $institute->type }}!
            </div>
         </div>
      </div>
  </div>
  <div class="panel-footer text-right">
      <a href="{{ route('ins.select') }}" style="margin-right:30px;">Change {{ $institute->type  }}</a>
          <form id="join-form" action="{{ route('ins.join',request()->route('id')) }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
      <button type="button" class="btn btn-primary" onclick="event.preventDefault();
               document.getElementById('join-form').submit();">
          Request to join {{ $institute->type  }}
      </button>

  </div>
</div>
</div>

@endsection
