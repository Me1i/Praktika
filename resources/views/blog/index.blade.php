@extends('blog.master')
@section('title','Home Page')
    
@section('content')
<div class="container-fluid">
   <div class="banner_section layout_padding">
      <h1 class="banner_taital">welcome <br>Melo-tech</h1>
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="image_main">
                  <div class="container">
                     <img src="{{asset('assets/images/img-1.png')}}" class="image_1">
                     <div class="contact_bt"><a href="{{route('contact.show')}}">Contact Us</a></div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="image_main">
                  <div class="container">
                     <img src="{{asset('assets/images/img-1.png')}}" class="image_1">
                     <div class="contact_bt"><a href="{{route('contact.show')}}">Contact Us</a></div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="image_main">
                  <div class="container">
                     <img src="{{asset('assets/images/img-1.png')}}" class="image_1">
                     <div class="contact_bt"><a href="{{route('contact.show')}}">Contact Us</a></div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
         <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
         <i class="fa fa-angle-right"></i>
         </a>
      </div>
   </div>
</div>
<!-- banner section end --> 
</div>
<!-- header section end --> 
<div class="container">
<div class="touch_setion">
   <div class="box_main">
      <div class="image_2 ">
         <h4 class="who_text">Who am i</h4>
      </div>
   </div>
   <div class="box_main">
      <div class="image_3">
         <h4 class="who_text">Get In Touch</h4>
      </div>
   </div>
   <div class="box_main">
      <div class="image_4">
         <h4 class="who_text">Facebook</h4>
      </div>
   </div>
</div>
</div>
<!-- about section start --> 

<!-- about section end --> 
<!-- blog section start --> 

<!-- blog section end --> 
<!-- newsletter section start --> 

<!-- newsletter section end --> 
<!-- recent section start --> 

<!-- tag section end -->
<!-- contact section start -->



@endsection