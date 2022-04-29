@extends('front.admin.layout')
@section('content')

<div class="d-fiex justify-content-between mb-3">
    <h6>categories</h6>
    <a  class="btn btn-info" href="{{route('admin.create')}}">Add New</a>
</div>
<div class ="container" m-5 p-5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach($cats as $cat)
  <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$cat->name}}</td>
      <td>
      <a  class="btn btn-info" href="{{route('admin.edit',$cat->id)}}">edit</a>
      <a  class="btn btn-danger" href="{{route('admin.delete',$cat->id)}}">delete</a>

      </td>
    </tr>
  @endforeach
  
  </tbody>
</table>
</div>
@endsection 