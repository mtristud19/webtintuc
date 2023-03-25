<section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav main_nav">
                <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                @foreach($theloai as $item)
                @if(count($item->loaitin)>0)
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$item->tennhomtin}}</a>

                    <ul class="dropdown-menu" role="menu">
                        @foreach($item->loaitin as $lt)
                        <li><a href="/loaitin/{{$lt->idloaitin}}">{{$lt->tenloaitin}}</a></li>
                        @endforeach
                    </ul>

                </li>
                @endif
                @endforeach


                <li><a href="pages/contact.html">Contact Us</a></li>
                <li><a href="pages/404.html">404 Page</a></li>
            </ul>
        </div>
    </nav>
    </section>