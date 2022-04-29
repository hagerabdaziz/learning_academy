@extends('front.admin.layout')
@section('content')

<div class="d-fiex justify-content-between mb-3">
    <h6>categories</h6>
    <a  class="btn btn-info" href="{{route('admin.course.create')}}">Add New</a>
</div>
<div class ="container" m-5 p-5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">samlldesc</th>
      <th scope="col">desc</th>
      <th scope="col">price</th>
      <th scope="col">img</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach($courses as $course)
  <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$course->name}}</td>
      <td>{{$course->smalldesc}}</td>
      <td>{{$course->desc}}</td>
      <td>{{$course->price}}</td>
      <td><img scr="{{asset('uploads/courses/'.$course->img)}}"  height="50px"  alt="" ></td>
      <td>
      <a  class="btn btn-info" href="{{route('admin.course.edit',$course->id)}}">edit</a>
      </td>
      <td>      <a  class="btn btn-danger" href="{{route('admin.course.delete',$course->id)}}">delete</a>
</td>
    </tr>
  @endforeach
  
  </tbody>
</table>
</div>
@endsection 