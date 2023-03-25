@extends('clients/layouts/masteru')
@section('content')
@include('clients.layouts.navbar')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="../index.html">Home</a></li>
              <li><a href="#">{{$tintuc->loaitin->nhomtin->tennhomtin}}</a></li>
              <li class="active">{{$tintuc->loaitin->tenloaitin}}</li>
            </ol>
            <h1>{{$tintuc->tieude}}</h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>VanDepTrai</a> <span><i class="fa fa-calendar"></i>{{$tintuc->ngaydang}}</span> <a href="/loaitin/{{$tintuc->idloaitin}}"><i class="fa fa-tags"></i>{{$tintuc->loaitin->tenloaitin}}</a> </div>
            <div class="single_page_content"> <img class="img-center" src="{{asset('storage/public_img/'.$tintuc->img)}}" alt="">
              <p>{{$tintuc->mota}}</p>
              <blockquote> {{$tintuc->noidung}} </blockquote>
          
              
           
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img1.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img2.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img1.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
        <div>
        </div>
        <div>
        </div>
        </a> </nav>
        @include("clients.layouts.contentRight")
@stop