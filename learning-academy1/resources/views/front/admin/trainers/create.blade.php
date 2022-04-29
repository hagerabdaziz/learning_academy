@extends('front.admin.layout')
@section('content')

@include('front.inc.errors')
<div class="d-fiex justify-content-between mb-3">
    <h6>trainers</h6>
<a  class="btn btn-info" href="{{route('admin.index.trainer')}}">Back</a>
</div>
 
 <form method="POST" action="{{route ('admin.trainer.store')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1"> name</label>
    <input type="text" name="name" class="form-control" placeholder="name" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"> phon</label>
    <input type="text" name="phone" class="form-control" placeholder="name" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"> spec</label>
    <input type="text" name="spec" class="form-control" placeholder="spec" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"> spec</label>
    <input type="file" name="img" class="form-control-file" placeholder="img" >
  </div>

  <button type="submit" class="btn btn-info"> submit</button>

</form>


@endsection