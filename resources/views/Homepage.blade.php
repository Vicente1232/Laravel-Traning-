@extends('layouts.app')
@section('content')
<div class="container justify-content-center" >
  <div class="mt-4 card">
    <div class="card-body bg-white">
    
<form class="m-auto" style="with: 80%">
  <div class="form-group">
  
    <label for="exampleFormControlInputnum">ID Number</label>
    <input type="email" class="form-control" id="exampleFormControlInputnum" placeholder="Inter ID Number">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput">Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput" placeholder="Juan Dela Cruz Jr.">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Peding</option>
      <option>Completed</option>
    </select>
    <div class="form-group">
    <label for="exampleFormControlInputassign">Assignee</label>
    <input type="email" class="form-control" id="exampleFormControlInputassign" placeholder="Assignee">
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 
<button type="button" class="btn btn-success">Submit</button>

</form>
<div
@endsection