@extends('blog.master')
@section('title','Blog Page')

@section('content')
<div class="about_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-sm-12">
             <div class="about_img"><img src="{{asset('assets/images/img-8.png')}}"></div>
             <div class="like_icon"><img src="{{asset('assets/images/like-icon.png')}}"></div>
             <p class="post_text">Post By : 09/06/2019</p>
             <h2 class="most_text">Most Awesome Blue Lake With Snow <br>River</h2>
             <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
             <div class="social_icon_main">
                <div class="social_icon">
                   <ul>
                      <li><a href="#"><img src="{{asset('assets/images/fb-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{asset('assets/images/twitter-icon.png')}}"></a></li>
                      <li><a href="https://www.instagram.com"><img src="{{asset('assets/images/instagram-icon.png')}}"></a></li>
                   </ul>
                </div>
               
             </div>
          </div>
          <div class="col-lg-4 col-sm-12">
             <div class="about_main">
                <h1 class="follow_text">CONNECT & FOLLOW</h1>
                <div class="follow_icon">
                   <ul>
                      <li><a href="#"><img src="{{asset('assets/images/fb-icon-1.png')}}"></a></li>
                      <li><a href="#"><img src="{{asset('assets/images/twitter-icon-1.png')}}"></a></li>
                      <li><a href="#"><img src="{{asset('assets/images/linkedin-icon-1.png')}}"></a></li>
                      <li><a href="https://www.instagram.com"><img src="{{asset('assets/images/instagram-icon-1.png')}}"></a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
    </div>
@endsection