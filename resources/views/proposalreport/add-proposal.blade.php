<?php

$logged_user = session()->get('logged_user');
$username = session()->get('username');
$roles = session()->get('role');

?>

@extends('layouts.main-proposal&report')

@section('content')
<div class="card">
  <div class="card-header">Proposal</div>
  <div class="card-body">
      
    <form action="{{ url('proposal') }}" method="post">
        {!! csrf_field() !!}
        <label>Author</label></br>
        <input type="text" name="Author" id="Author" class="form-control"></br>
        <label>Matric ID</label></br>
        <input type="text" name="MatricID" id="MatricID" class="form-control"></br>
        <label>Title</label></br>
        <input type="text" name="Title" id="Title" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
        <label>File</label></br>
        <input type="text" name="File" id="File" class="form-control"></br>
    
    </form>
       
  </div>
</div>
@stop