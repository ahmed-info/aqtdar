<footer class="main-footer pt-5" dir="rtl">
    <div class="container">
        <div class="widgets-section">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        <figure class="footer-logo"><a href="{{ route('main.home') }}"><img
                                    src="{{ asset('asset/images/logo_white.png') }}" width="200" alt=""></a></figure>
                        <div class="text-center">
                            <div style="color: #FFA500;font-size: 22px;margin-bottom:15px;margin-right:18px">خدمة وهمة
                            </div>
                        </div>
                        {{-- <ul class="footer-social clearfix">
                            <li><a href="{{ $socialmedia->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $socialmedia->instagram }}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $socialmedia->twitter }}"><i class="fa fa-twitter"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="link-widget footer-widget">
                        <div class="footer-title">روابط سريعة</div>
                        <ul class="link-list">
                            <li><a href="{{ route('main.home') }}">الرئيسية</a></li>
                            <li><a href="{{ route('situations') }}">المواقف</a></li>
                            <li><a href="{{ route('activities') }}">النشاطات</a></li>
                            <li><a href="{{ route('ourVision') }}">رؤيتنا</a></li>
                            <li><a href="{{ route('aboutUs') }}">من نحن</a></li>
                            <li><a href="{{ route('contactUs') }}">انضم الينا</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column" style="margin-top: 10px">
                    <div class="event-widget logo-widget footer-widget">
                        <div class="footer-title">تواصل معنا</div>

                        <ul class="footer-social clearfix">
                            <li><a href="{{ $socialmedia->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $socialmedia->instagram }}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $socialmedia->twitter }}"><i class="fa fa-twitter"></i></a></li>
                        </ul>



                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="newsletter-widget footer-widget">
                        <div class="footer-title" style="text-align: left;margin-left:30px">اين نحن</div>
                        <form action="{{ route('contactUs') }}" method="GET" class="newsletter-form">

                            <div class="form-group">
                                <button class="theme-btn" type="submit">بغداد <i class="flaticon-back"></i></button>
                            </div>
                            <div class="form-group">
                                <button class="theme-btn" type="submit">النجف<i class="flaticon-back"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->

<!-- footer-bottom -->
<div class="footer-bottom">
    <div class="container">
        <div class="copyright"><a href="#">Eqtdar watan</a> &copy; 2023 All Right Reserved</div>
    </div>
</div>