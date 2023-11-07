@extends('layouts.user-layout')
@section('content')
<!-- main-slider -->
<section class="main-slider slider-style-two" dir="ltr">
    @if (session()->has('status'))
    <div class="alert alert-success text-center" role="alert">
        {{ session()->get('status') }}
    </div>
    @endif
    <div class="main-slider-carousel owl-carousel owl-theme">

        @if (count($slides) > 0)
        @foreach ($slides as $slide)
        <div class="slide" style="background-image:url({{ asset('images/' . $slide->image) }})">
            <div class="container">
                <div class="content-box">
                    <h1>{!! $slide->description !!}</h1>
                    {{-- <div class="slider-btn">
                        <a href="#" class="theme-btn slide-btn-one">Our Services</a>
                    </div> --}}
                </div>
            </div>
        </div>
        @endforeach
        @endif




    </div>
</section>
<!-- main-slider end -->


<!-- gallery-section -->
<section class="gallery-section">
    <div class="container">
        <div class="sortable-masonry">
            <!--Filter-->
            <div class="filters clearfix" style="text-align: center;">
                <ul class="filter-tabs filter-btns" style="text-align: center;justify-content: center">
                    <li class="active filter custom_btn" data-role="button" data-filter=".all">اخر المستجدات</li>
                    <li class="filter custom_btn" data-role="button" data-filter=".stuation">المواقف السياسية</li>
                    <li class="filter custom_btn" data-role="button" data-filter=".activity">النشاطات</li>
                </ul>
            </div>
            <div class="items-container row clearfix">

                <!--Default Portfolio Item-->
                @if (count($activities) > 0)
                @foreach ($activities as $activity)
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item masonry-item all activity">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            @if ($activity->image != null && $activity->image != '')
                            <img src="{{ asset('images/' . $activity->image) }}" alt="Awesome Image">
                            @else
                            <img src="{{ asset('asset/images/logo370.png') }}" alt="Awesome Image">
                            @endif
                            <div class="categorie-button">
                                <a class="btn-one" href="{{ route('activities') }}">{!! $activity->status !!}</a>
                            </div>
                        </div>
                        <div class="text-holder" style="text-align: right;float: right;">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><a href="{{ route('activitySituation.show', ['id' => $activity->id]) }}">{{
                                            \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',
                                            $activity->created_at)->format('Y M, d') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a
                                    href="{{ route('activitySituation.show', ['id' => $activity->id]) }}">{!!
                                    $activity->title !!}</a>
                            </h3>
                            <div class="text-box">
                                <p>{{ \Illuminate\Support\Str::limit($activity->description, 150) }}</p>
                            </div>
                            <div class="readmore-button">
                                <a class="btn-two"
                                    href="{{ route('activitySituation.show', ['id' => $activity->id]) }}"><span
                                        class="flaticon-back"> </span>قراءة المزيد </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif


                <!--Default Portfolio Item-->
                @if (count($stuations) > 0)
                @foreach ($stuations as $stuation)
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item masonry-item all stuation">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            @if ($stuation->image != null && $stuation->image != '')
                            <img src="{{ asset('images/' . $stuation->image) }}" alt="Awesome Image">
                            @else
                            <img src="{{ asset('asset/images/logo370.png') }}" alt="Awesome Image">
                            @endif
                            <div class="categorie-button">
                                <a class="btn-one" href="{{ route('situations') }}">{!! $stuation->status !!}</a>
                            </div>
                        </div>
                        <div class="text-holder" style="text-align: right;float: right;">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><a href="{{ route('activitySituation.show', ['id' => $stuation->id]) }}">{{
                                            \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',
                                            $stuation->created_at)->format('Y M, d') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a
                                    href="{{ route('activitySituation.show', ['id' => $stuation->id]) }}"
                                    style="text-align: right;float: right;">{!! $stuation->title !!}</a></h3>
                            <div class="text-box">
                                <p style="text-align: right;float: right;">
                                    {{ \Illuminate\Support\Str::limit($stuation->description, 150) }}
                                </p>
                            </div>
                            <div class="readmore-button">
                                <a class="btn-two"
                                    href="{{ route('activitySituation.show', ['id' => $stuation->id]) }}"><span
                                        class="flaticon-back"> </span>قراءة المزيد </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

                {{-- <div class="col-lg-4 col-md-6 col-sm-12 gallery-item masonry-item all">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{ asset('asset/images/resource/news-2.jpg') }}" alt="Awesome Image">
                            <div class="categorie-button">
                                <a class="btn-one" href="#">Gemological</a>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li><a href="#">By John Smith</a></li>
                                    <li><a href="#">Jan 10, 2019</a></li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">Haematopoietic stem cell transplant.</a>
                            </h3>
                            <div class="text-box">
                                <p>Nor again is there anyone who love pursues or desires to obtain pain of itself,
                                    bepain, but occasionally circumstances.</p>
                            </div>
                            <div class="readmore-button">
                                <a class="btn-two" href="blog-details.html">Continue Reading<span
                                        class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- gallery-section end -->


@endsection