<header id="header">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_top">
                <div class="header_top_left">
                    <ul class="top_nav">
                        @if(session()->has('users'))
                        <form action="/find" method="GET">
                        <li><a href="/users/info/{{session()->get('users')['idusers']}}" >Info</a></li>
                        <li>
                            <p style="color: pink;">Hello {{session()->get('users')['ten']}}</p>
                        </li>
                        <li><a href="/logoutuser">Log Out</a></li>
                        
                        <li><input class="input" placeholder="Tìm kiếm ở đây" name="keyword"></li>
                        <li><input type="submit" class="search-btn" value="Tìm kiếm"></input></li>
                        </form>
                        @else
                        <form action="/find" method="GET">
                        <li><a href="/loginuser">Sign In</a></li>
                        <li><a href="/registeruser">Register</a></li>
                     
                        <li><input class="input" placeholder="Tìm kiếm ở đây" name="keyword"></li>
                        <li><input type="submit" class="search-btn" value="Tìm kiếm"></input></li>
                        </form>
                        @endif
                    </ul>



                </div>

            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_bottom">
                <div class="logo_area"><img src="/storage/public_img/stu.jpg" width="286px" height="100px"></div>
                <div class="add_banner"><img src="/storage/public_img/banner.jpg" width="728px" height="70px" alt=""></div>
            </div>
        </div>
    </div>
</header>