@extends('front.admin.layout')
@section('content')

@include('front.inc.errors')
<div class="d-fiex justify-content-between mb-3">
    <h6> Edit Ctrainers</h6>
<a  class="btn btn-info" href="{{route('admin.index.trainer',$trainer->id)}}">Back</a>
</div>
 
 <form method="POST" action="{{route ('admin.trainer.update')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" value="{{$trainer->id}}">

  <div class="form-group">
    <label for="exampleFormControlInput1"> name</label>
    <input type="text" name="name" class="form-control" placeholder="name" value="{{$trainer->name}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"> phone</label>
    <input type="text" name="phone" class="form-control" placeholder="phone" value="{{$trainer->phone}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"> spec</label>
    <input type="text" name="spec" class="form-control" placeholder="spec" value="{{$trainer->spec}}">
  </div>

  <img src="{{asset('uploads/trainers/'.$trainer->img)}}"height="100px" alt="">
  <div class="form-group">
    <label for="exampleFormControlInput1"> img</label>
    <input type="file" name="img" class="form-control-file" placeholder="img" >
  </div>
  <button type="submit" class="btn btn-info"> submit</button>

</form>


@endsection