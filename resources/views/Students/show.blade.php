@extends('students.layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .card {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   max-width: 300px;
    margin: auto;
   text-align: center;
   font-family: arial;
   top: 86px;
  }

  .title {
   color: grey;
   font-size: 18px;
  }

  button {
    border: none;
   outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }

  a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }

  body {
    background-color: #f99b9b4a; 
  }

</style>
</head>

<br><h2 style="text-align:center">Student Profile View</h2>

<div class="card">
  <img src=" {{ $students->image }} " alt="Name" style="width:100%"><br>
        
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Status : {{ $students->status }}</p>
  

</body>
</html>

@endsection