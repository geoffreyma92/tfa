@extends('layouts.main')
@section('title', 'Login')
@section('description', 'User login for the TFAS')

@section('content')
<div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
  @foreach($errors->all() as $error)
    <p class="error">{{$error}}</p>
  @endforeach
  <h2 class="form-signin-heading">Please login</h2>
  {{ Form::open(array('autocomplete' => 'off')) }}
  <div class="form-group">
    <input type="text" name="username" class="form-control"  placeholder="Staff/student number">
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary btn-block" value="Log in">
  </div>
 </div>
  {{ Form::close() }}
@stop