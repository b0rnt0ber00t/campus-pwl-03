<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                <div class="footer-details">
                    <h4>Get in touch</h4>
                    <ul class="list-unstyled footer-contact-list">
                        <li>
                            <i class="fa fa-map-marker fa-lg"></i>
                            <p>701 Old York Drive Richmond USA.</p>
                        </li>
                        <li>
                            <i class="fa fa-phone fa-lg"></i>
                            <p><a href="tel:+1-202-555-0100"> +1-202-555-0100</a></p>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o fa-lg"></i>
                            <p><a href="mailto:demo@info.com"> demo@info.com</a></p>
                        </li>
                    </ul>
                    <div class="footer-social-icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>                           
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                    <div class="input-group" id="subscribe">
                        <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                        <span class="input-group-btn">
                            <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                <div class="footer-details">
                    <h4>explore</h4>
                    <ul class="list-unstyled footer-links">
                        <li class="{{ request()->path() == '/' ? 'active' : '' }}"> <a href="{{ url('/') }}">Home</a></li>
                        <li class="{{ request()->path() == 'about' ? 'active' : '' }}"> <a href="{{ url('/about') }}">About</a></li>
                        <li class="{{ request()->path() == 'rooms' ? 'active' : '' }}"> <a href="{{ url('/rooms') }}">Rooms</a></li>
                        <li class="{{ request()->path() == 'gallery' ? 'active' : '' }}"> <a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li class="{{ request()->path() == 'dinning' ? 'active' : '' }}"> <a href="{{ url('/dinning') }}">Dinning</a></li>
                        <li class="{{ request()->path() == 'news' ? 'active' : '' }}"> <a href="{{ url('/news') }}">News</a></li>
                        <li class="{{ request()->path() == 'contact-us' ? 'active' : '' }}"> <a href="{{ url('/contact-us') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="footer-details">
                    <h4>Now On Instagram</h4>
                    <div class="row">
                        <div class="instagram-images">
                            <div id="instafeed"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            &copy; 2017 All right reserved. Designed by <a href="http://www.themevault.net/" target="_blank">ThemeVault.</a>
        </div>

    </div>
</footer>