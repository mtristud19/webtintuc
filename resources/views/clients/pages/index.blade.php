@extends('clients/layouts/masteru')
@section('content')
@include('clients.layouts.navbar')
<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                @foreach($theloai as $item)
                @if(count($item->loaitin)>0)
                <div class="single_post_content">
                    
                    <h2><span>{{$item->tennhomtin}}</span></h2>
                    <?php 
                    $data=$item->tintuc->where('hot',1)->sortByDesc('created_at')->take(5);
                    $tin1= $data->shift();
                    ?>
                    <div class="single_post_content_left">
                        <ul class="business_catgnav  wow fadeInDown">
                            <li>
                                <figure class="bsbig_fig"> <img alt="" src="{{asset('storage/public_img/'.$tin1['img'])}}"  width="300px" height="300px"> <span class="overlay"></span> </a>
                                    <figcaption> {{$tin1['tieude']}}</figcaption>
                                    <p>{{$tin1['mota']}}</p>
                                    <a class="btn btn-info" href="#">Xem tin <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    
                 
                    <div class="single_post_content_right">
                        @foreach($data->all() as $tintuc)
                        <ul class="spost_nav">
                            <li>
                                <div class="media wow fadeInDown">
                                    <img alt="" src="{{asset('storage/public_img/'.$tintuc['img'])}}" width="300px" height="80px"> 

                                    <div class="media-body"> <a href="pages/single_page.html">{{$tintuc['tieude']}}</a> </div>
                                </div>

                            </li>
                      
                        </ul>
                        @endforeach
                    </div>
                    
                </div>
                @endif
                @endforeach
             
            </div>
        </div>
        @stop