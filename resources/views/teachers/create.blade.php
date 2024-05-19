@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
    
     @if(Session::has('success'))
    <div class="alert alert-success" role="alert"
    {{Session::get('success')}} </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
    <h3>Errors :</h3>
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
   
      <form action=" {{route('teachers.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        {{-- @error('name')
<div class="text-danger">{{$message}}</div>
@enderror --}}
        <label>material</label></br>
        <input type="text" name="material" id="material" class="form-control"></br>
        {{-- @error('age')
<div class="text-danger">{{$message}}</div>
@enderror --}}
        <label>email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        {{-- @error('email')
{{-- <div class="text-danger">{{$message}}</div>
@enderror --}} 
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        {{-- @error('mobile')
{{-- <div class="text-danger">{{$message}}</div>
@enderror --}} 

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop