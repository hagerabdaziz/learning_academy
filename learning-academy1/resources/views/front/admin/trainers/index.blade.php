@extends('front.admin.layout')
@section('content')

<div class="d-fiex justify-content-between mb-3">
    <h6>categories</h6>
    <a  class="btn btn-info" href="{{route('admin.trainer.create')}}">Add New</a>
</div>
<div class ="container" m-5 p-5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">spec</th>
      <th scope="col">img</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach($trainers as $trainer)
  <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$trainer->name}}</td>
      <td>{{$trainer->phone}}</td>
      <td>{{$trainer->spec}}</td>
      <td><img scr="{{asset('uploads/trainers/'.$trainer->img)}}"  height="50px"  alt="" ></td>
      <td>
      <a  class="btn btn-info" href="{{route('admin.trainer.edit',$trainer->id)}}">edit</a>
      <a  class="btn btn-danger" href="{{route('admin.trainer.delete',$trainer->id)}}">delete</a>

      </td>
    </tr>
  @endforeach
  
  </tbody>
</table>
</div>
@endsection 