@extends('blog.master')
@section('title','Features Page')

@section('content')
<div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-sm-12">
            <div class="about_img"><img src="{{asset('assets/images/img-9.png')}}"></div>
            <div class="like_icon"><img src="{{asset('assets/images/like-icon.png')}}"></div>
            <p class="post_text">Post By : 01/07/2024</p>
            <h2 class="most_text">Most Awesome Blue Lake With Snow <br>sky</h2>
            <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis un jam teper tired, i hope qe me mrri ora quattro ma fast</p>
            <div class="social_icon_main">
               <div class="social_icon">
                  <ul>
                     <li><a href="https://www.facebook.com"><img src="{{asset('assets/images/fb-icon.png')}}"></a></li>
                     <li><a href="https://www.twitter.com"><img src="{{asset('assets/images/twitter-icon.png')}}"></a></li>
                     <li><a href="https://www.instagram.com"><img src="{{asset('assets/images/instagram-icon.png')}}"></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12">
            <div class="newsletter_main">
               <h1 class="newsletter_taital">NEWSLETTER</h1>
               @if(session('success'))
                   <div class="alert alert-success">
                       {{ session('success') }}
                   </div>
               @endif
               @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                         @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
               @endif
               <form action="{{ route('newsletter.subscribe') }}" method="POST">
                  @csrf
                  <div class="input_box">
                     <input type="email" class="input_text" placeholder="Enter Your email" name="email" required>
                     <input type="text" class="input_text" placeholder="Your name" name="name" required>
                     <button id="bt1" style="padding:10px;background-color: rgb(128, 128, 128);" type="submit">Subscribe</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection