@extends('layouts.wizard')
@section('content')
<div style="border-radius: 0.5rem; width: 55rem;  padding-top:8rem; margin-left: auto; margin-right: auto;">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Select your Institute</h3>
  </div>
  <div class="panel-body">
      <div style="min-height: 35rem;">
          <h6><strong>First, let's find your institute.</strong></h6>
          <input type="text" name="search" onkeyup="Searchinstitute(this.value);" placeholder="Search by institute name or address" class="institute-search-input" />
          <div class="institute-search">
              <ul>
                 @foreach (App\Institute::all() as $institute)
                     <a href="{{ route('ins.info',Hashids::encode($institute->id)) }}"><li>
                         <div class="heading">
                             {{ $institute->name }}
                         </div>
                         <div class="location">
                             {{ $institute->address }}, {{ $institute->city }}, {{ $institute->state }}, {{ $institute->country }}
                         </div>
                     </li></a>
                 @endforeach


              </ul>
          </div>
      </div>

  </div>
  <div class="panel-footer text-right">
      <a href="#" style="margin-right:30px;">Cancel</a>
      <a  class="btn btn-primary" href="{{ route('ins.create') }}">
          Add institute
      </a>
  </div>
</div>
 </div>
@endsection
