@extends('layouts.user-layout')
@section('content')
<!-- team-details -->
@if (count($members)>0)
@foreach ($members as $member)
<section class="team-details gray-bg text-right" dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                <figure class="image-box"><img src="{{ asset('images/' . $member->image) }}" alt="">
                </figure>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="team-details-content">
                    <div class="top-content">
                        <div class="title">{{ $member->name }}</div>
                        <span>{{ $member->position}}</span>
                        <div class="text">{{ $member->college}}<br />{{ $member->department}}</div>
                    </div>
                    <div class="lower-content">
                        <h3 class="title">سيرة شخصية</h3>
                        <div class="text">
                            <p>{{ $member->description}}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endif

<!-- team-details end -->
@endsection