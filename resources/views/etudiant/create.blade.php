@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
    
    @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
        <h3>Errors :</h3>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('etudiant.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <label>Name</label><br>
      <input type="text" name="name" id="name" class="form-control"><br>

      <label>Level</label><br>
      <input type="text" name="level" id="level" class="form-control"><br>

      <label>Email</label><br>
      <input type="text" name="email" id="email" class="form-control"><br>

      <label>Mobile</label><br>
      <input type="text" name="mobile" id="mobile" class="form-control"><br>

      <div class="mb-3">
        <label>Upload the photo</label>
        <input type="file" name="image" accept="image/*">
      </div>

      <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
  </div>
</div>

@endsection
