@extends('layouts.user-layout')
@section('content')

    <!-- event-details -->
    <section class="event-details event-page text-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 event-column">
                    <div class="event-details-content">
                        <div class="content-style-one">
                            <figure class="image-box">
                                @if ($activityStuation->image !=null && $activityStuation->image !="")
                                <img src="{{ asset('images/'.$activityStuation->image) }}" alt=""></figure>
                                @else
                                <img src="{{ asset('asset/images/logo370.png') }}" alt=""></figure>
                                @endif
                            <div class="event-title">{{ $activityStuation->title }}</div>
                            <ul class="info-content">
                                <li>{{ $activityStuation->status }} <i class="fa fa-file-text-o"></i></li>
                                <li>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $activityStuation->created_at)->format('Y M, d') }} <i class="fa fa-calendar"></i></li>
                            </ul>
                            <div class="top-text">{{ $activityStuation->description }}</div>
                            {{-- <div class="text">
                                <p>quasi architebeatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptassit. aspernatur aut odit fugit sed quia consequuntur magni dolores eos qui ratione voluptam sequi nescuntneque porro quisquam  dolorem ipsum quia dolor sit amet consectetur adipiscing velit sed quia numquam eius modi tempora incidunt ut labore et dolore consectetur adipisicing elit sed eiusmod tempor incididunt.ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div> --}}
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event-details end -->
@endsection
