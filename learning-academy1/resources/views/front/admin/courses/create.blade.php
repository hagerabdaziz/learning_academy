@extends('front.admin.layout')
@section('content')

@include('front.inc.errors')
<div class="d-fiex justify-content-between mb-3">
    <h6>courses</h6>
<a  class="btn btn-info" href="{{route('admin.index.course')}}">Back</a>
</div>
 
 <form method="POST" action="{{route ('admin.course.store')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1"> name</label>
    <input type="text" name="name" class="form-control" placeholder="name" >
  </div>
  <div class="form-group">
  <select class="form-control" name="trainer_id" py-6>
  @foreach($trainers as $trainer)
  <option value="{{$trainer->id}}">{{$trainer->name}}</option>
  @endforeach
</select>
</div>

<div class="form-group">
<select class="form-control" name="cat_id">
@foreach($cats as $cat)
  <option value="{{$cat->id}}">{{$cat->name}}</option>
  @endforeach
</select>
</div>
  <div class="form-group">
    <label for="exampleFormControlInput1"> price</label>
    <input type="text" name="price" class="form-control" placeholder="price" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">smalldesc</label>
    <input type="text" name="smalldesc" class="form-control" placeholder="smalldesc" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">desc</label>
    <input type="text" name="desc" class="form-control" placeholder="desc" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"> img</label>
    <input type="file" name="img" class="form-control-file" placeholder="img" >
  </div>

  <button type="submit" class="btn btn-info"> submit</button>

</form>


@endsection