<header class="header-container">
    <div class="container">
        <div class="top-row">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div id="logo">
                        <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                        <a href="index.html"><span>vacay</span>home</a>
                    </div>                       
                </div>
                <div class="col-sm-6 visible-sm">
                    <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header page-scroll">
                            <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                            <ul class="list-unstyled nav1 cl-effect-10">
                                <li>
                                    <a data-hover="Home"
                                        class="{{ request()->path() == '/' ? 'active' : '' }}"
                                        href="{{ url('/') }}">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-hover="About"
                                        class="{{ request()->path() == 'about' ? 'active' : '' }}"
                                        href="{{ url('/about') }}">
                                        <span>About</span>
                                    </a>
                                    </li>
                                <li>
                                    <a data-hover="Rooms"
                                        class="{{ request()->path() == 'rooms' ? 'active' : '' }}"
                                        href="{{ url('/rooms') }}">
                                        <span>Rooms</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-hover="Gallery"
                                        class="{{ request()->path() == 'gallery' ? 'active' : '' }}"
                                        href="{{ url('/gallery') }}">
                                        <span>Gallery</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-hover="Dinning"
                                        class="{{ request()->path() == 'dinning' ? 'active' : '' }}"
                                        href="{{ url('/dinning') }}">
                                        <span>Dinning</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-hover="News"
                                        class="{{ request()->path() == 'news' ? 'active' : '' }}"
                                        href="{{ url('/news') }}">
                                        <span>News</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-hover="Contact Us"
                                        class="{{ request()->path() == 'contact-us' ? 'active' : '' }}"
                                        href="{{ url('/contact-us') }}">
                                        <span>contact Us</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
                <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                    <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                </div>
            </div>
        </div>
    </div>
</header>