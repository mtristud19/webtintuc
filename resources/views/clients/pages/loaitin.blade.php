@extends('clients/layouts/masteru')
@section('content')
@include('clients.layouts.navbar')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-4 col-sm-4" >
        <div class="left_content">
          <div class="contact_area">
            
          <h2>{{$loaitin->tenloaitin}}</h2>
           @foreach($tintuc as $tt)
            <div >
              <ul class="business_catgnav  wow fadeInDown" style="align-content: center;">
                <li>
                  <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="{{asset('storage/public_img/'.$tt->img)}}" height="300px" > <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/single_page.html">{{$tt->tieude}}</a> </figcaption>
                    <p>{{$tt->mota}}</p>
                    <a class="btn btn-info" href="/tintuc/{{$tt->idtintuc}}">Xem them <span class="glyphicon glyphicon-chevron-right"></span></a>
                  </figure>
                </li>
              </ul>
            </div>
            @endforeach

           
          </div>
          <div style="text-align:right;"> {{$tintuc->links()}}</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Last Post</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
            </ul>
          </div>
        </aside>
      </div>
      
      
    </div>

  

  </section>
      
    
@stop