<div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              @foreach($tinnoibat as $item)
              <li>
                <div class="media wow fadeInDown"> <a  class="media-left"> <img alt="" src="{{asset('storage/public_img/'.$item->img)}}"> </a>
                  <div class="media-body"> <a href="/tintuc/{{$item->idtintuc}}" class="catg_title"> {{$item->tieude}}</a> </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </aside>
      </div>