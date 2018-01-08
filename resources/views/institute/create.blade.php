@extends('layouts.wizard')
@section('content')
<div style="border-radius: 0.5rem; width: 55rem; padding-top:8rem; margin-left: auto; margin-right: auto;">
<form class="form-horizontal" action="{{ route('ins.create') }}" method="post">
    {{ csrf_field() }}
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add your Institute</h3>
  </div>
  <div class="panel-body">
      <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label col-md-3">Name</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="name" placeholder="Eg., Harward University" name="name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        </div>
      <div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
        <label for="Country" class="control-label col-md-3">Country</label>
        <div class="col-md-8">
            <select name="country" class="gds-cr gds-countryflag form-control" country-data-region-id="gds-cr-four" ></select>
            @if ($errors->has('country'))
                <span class="help-block">
                    <strong>{{ $errors->first('country') }}</strong>
                </span>
            @endif
        </div>
        </div>
      <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
        <label for="State" class="control-label col-md-3">State</label>
        <div class="col-md-8">
        <select name="state" id="gds-cr-four" class="form-control"></select>
        @if ($errors->has('state'))
            <span class="help-block">
                <strong>{{ $errors->first('state') }}</strong>
            </span>
        @endif
        </div>
      </div>
      <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
        <label for="city" class="control-label col-md-3">City</label>
        <div class="col-md-8">
            <input type="text" name="city" class="form-control" id="city" placeholder="Eg., Newyork City" name="city">
            @if ($errors->has('city'))
                <span class="help-block">
                    <strong>{{ $errors->first('city') }}</strong>
                </span>
            @endif
        </div>
      </div>
      <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
        <label for="city" class="control-label col-md-3">Adress</label>
        <div class="col-md-8">
            <input type="text" name="address" class="form-control" id="address" placeholder="Eg., Newyork City" name="city">
            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>
      </div>


      <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
        <label for="State" class="control-label col-md-3">Type</label>
        <div class="col-md-8">
        <select name="type" class="form-control">
            <option value="School" selected="selected">School</option>
            <option value="College" >College</option>
            <option value="University" >University</option>
            <option value="Others" >Other</option>
        </select>
        @if ($errors->has('type'))
            <span class="help-block">
                <strong>{{ $errors->first('type') }}</strong>
            </span>
        @endif
        </div>
      </div>
  </div>
  <div class="panel-footer text-right">
      <a href="{{ route('ins.select') }}" style="margin-right:30px;">Cancel</a>
      <button type="submit" class="btn btn-primary"  >
          Add
      </button>
  </div>
</div>
</form>
 </div>
@endsection
