@extends('front.layout')
@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                            <p>Homepage<span>/</span>Courses<span>/</span>category<span>/</span><span>/</span>{{$course->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <!--================ Start Course Details Area =================-->
 <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        
                        <img src="{{asset('uploads/courses/'.$course->img)}}" class="img-fluid" alt="">

                    </div>
                    <div class="content_wrapper">
                       {{!!$course->desc!!}}
                   </div>
               </div>
 <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Trainer’s Name</p>
                                    <span class="color"></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Course Fee </p>
                                    <span>{{$course->price}}</span>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="col-lg-8">
                    @include('front.inc.errors')

          <form class="form-contact contact_form" action="{{route('front.enroll')}}" method="post"  >
           @csrf
          <div class="row">
          <input type="hidden" name="courseid" value="{{$course->id}}">
              <div class="col-sm-12">
                <div class="form-group">
                  <input class="form-control" name="name"  type="string" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <input class="form-control" name="email"  type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="spec"  type="string" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter speciality'" placeholder = 'Enter speciality'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">enroll</button>
            </div>
          </form>
        </div>

              </div>
         </div>  
     </div>
</section>
    @endsection