@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Image</label></br>
        <input type="file" name="image" id="image" value="{{$students->image}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$students->age}}" class="form-control"></br>
        <label for="status">Choose a status:</label>
        <input type="text" name="status" id="status" value="{{$students->status}} (Old status)"  readonly="readonly">
          <select name="status" id="status">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
          </select></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop