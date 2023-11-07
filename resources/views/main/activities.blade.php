@extends('layouts.user-layout')
@section('content')

    <!-- news-style-two -->
    <section class="news-style-two" >
        <div class="container">
            <div class="title-box centred">
                <div class="sec-title">النشاطات</div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 news-column">

                    @if(count($activities))
                        @foreach ($activities as $activity)
                        <div class="single-news-content inner-box small-column">
                            <div class="row">
                                <div class="col-lg-9 col-md-6 col-sm-12 column" style="text-align: right">
                                    <div class="content-box" style="height: 100%">
                                        <div class="travel"><a href="#">{!! $activity->status !!}</a></div>
                                        <h3><a href="blog-details.html">{!! $activity->title !!}</a></h3>
                                        <ul class="info-content">
                                            
                                            <li>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $activity->created_at)->format('Y M, d') }}</li>
                                        </ul>
                                        <div class="text-box">
                                            <p>{{ \Illuminate\Support\Str::limit($activity->description, 300) }}</p>
                                        </div>
                                        <a href="{{ route('activitySituation.show',['id'=>$activity->id]) }}" class="link"><i class="flaticon-back"> </i>قراءة المزيد </a>
                                    </div>
                                </div>
    
                                <div class="col-lg-3 col-md-6 col-sm-12 column">
                                    <figure class="image-box">
                                        @if($activity->image != "" && $activity->image != null)
                                        <img src="{{ asset('images/'.$activity->image) }}" alt="">
                                        @else
                                        <img src="{{ asset('asset/images/logo370.png') }}" alt="">
                                        @endif
                                        <div class="overlay">
                                            <div class="wrapper">
                                                <a href="{{ route('activitySituation.show',['id'=>$activity->id]) }}"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!-- news-style-two end -->

@endsection
