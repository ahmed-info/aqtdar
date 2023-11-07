<header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="clearfix">
                <div class="logo-box top-right">
                    <figure class="logo-outer"><a href="{{ route('main.home') }}"><img src="{{ asset('asset/images/logo171.png') }}" alt=""></a></figure>
                </div>
                <div class="top-left" style="align-items: center">
                    <ul style="padding-top: 50px;display: flex">
                        <li class="customSocial"><a href="{{ $socialmedia->facebook }}"><i class="fa fa-facebook"></i></a></li>
                        <li class="customSocial"><a href="{{ $socialmedia->instagram }}"><i class="fa fa-instagram"></i></a></li>
                        <li class="customSocial"><a href="{{ $socialmedia->twitter }}"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- header-top end -->

    <!-- header-bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="nav-outer clearfix">
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix" dir="rtl">
                                @if ( Request::is('/'))
                                <li class="current"><a href="{{ route('main.home') }}">الرئيسية</a></li>
                                @else
                                <li><a href="{{ route('main.home') }}">الرئيسية</a></li>
                                @endif

                                @if(Request::is('situations'))
                                <li class="current"><a href="{{ route('situations') }}" class="fontNav">المواقف</a></li>
                                @else
                                    <li><a href="{{ route('situations') }}" class="fontNav">المواقف</a></li>
                                @endif

                                @if (Request::is('activities'))
                                <li class="current"><a href="{{ route('activities') }}" class="fontNav">النشاطات</a></li>
                                @else
                                <li class=""><a href="{{ route('activities') }}" class="fontNav">النشاطات</a></li>
                                @endif

                                @if (Request::is('ourVision'))
                                <li class="current"><a href="{{ route('ourVision') }}" class="fontNav">رؤيتنا</a></li>
                                @else
                                <li class=""><a href="{{ route('ourVision') }}" class="fontNav">رؤيتنا</a></li>
                                @endif

                                @if (Request::is('aboutUs'))
                                <li class="current"><a href="{{ route('aboutUs') }}" class="fontNav">من نحن</a></li>
                                @else
                                <li class=""><a href="{{ route('aboutUs') }}" class="fontNav">من نحن</a></li>
                                @endif

                                @if (Request::is('contactUs'))
                                <li class="current"><a href="{{ route('contactUs') }}" class="fontNav">انضم الينا</a></li>
                                @else
                                <li class=""><a href="{{ route('contactUs') }}" class="fontNav">انضم الينا</a></li>
                                @endif


                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- header-bottom end -->


    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 column">
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('asset/images/small-logo.png') }}" alt=""></a></figure>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 menu-column">
                    <div class="menu-area">
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    @if ( Request::is('/'))
                                    <li class="current"><a href="{{ route('main.home') }}">الرئيسية</a></li>
                                    @else
                                    <li><a href="{{ route('main.home') }}">الرئيسية</a></li>
                                    @endif

                                    @if(Request::is('situations'))
                                    <li class="current"><a href="{{ route('situations') }}" class="fontNav">المواقف</a></li>
                                    @else
                                        <li><a href="{{ route('situations') }}" class="fontNav">المواقف</a></li>
                                    @endif

                                    @if (Request::is('activities'))
                                    <li class="current"><a href="{{ route('activities') }}" class="fontNav">النشاطات</a></li>
                                    @else
                                    <li class=""><a href="{{ route('activities') }}" class="fontNav">النشاطات</a></li>
                                    @endif

                                    @if (Request::is('ourVision'))
                                    <li class="current"><a href="{{ route('ourVision') }}" class="fontNav">رؤيتنا</a></li>
                                    @else
                                    <li class=""><a href="{{ route('ourVision') }}" class="fontNav">رؤيتنا</a></li>
                                    @endif

                                    @if (Request::is('aboutUs'))
                                    <li class="current"><a href="{{ route('aboutUs') }}" class="fontNav">من نحن</a></li>
                                    @else
                                    <li class=""><a href="{{ route('aboutUs') }}" class="fontNav">من نحن</a></li>
                                    @endif

                                    @if (Request::is('contactUs'))
                                    <li class="current"><a href="{{ route('contactUs') }}" class="fontNav">انضم الينا</a></li>
                                    @else
                                    <li class=""><a href="{{ route('contactUs') }}" class="fontNav">انضم الينا</a></li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- sticky-header end -->
</header>
