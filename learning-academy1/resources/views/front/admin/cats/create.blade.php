@extends('front.admin.layout')
@section('content')

@include('front.inc.errors')
<div class="d-fiex justify-content-between mb-3">
    <h6>categories</h6>
<a  class="btn btn-info" href="{{route('admin.index.cat')}}">Back</a>
</div>
 
 <form method="POST" action="{{route ('admin.store')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1"> name</label>
    <input type="text" name="name" class="form-control" placeholder="name" >
  </div>
  <button type="submit" class="btn btn-info"> submit</button>

</form>


@endsection