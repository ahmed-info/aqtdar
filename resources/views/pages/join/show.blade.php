@extends('dashboard.layouts.layout')
@section('body')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">مستمسكات: {{ $join->fullname }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">عرض المستمسكات</li>
        </ol>

        <div class="row">
            @if(count($join->attachs) >0)
            @foreach ( $join->attachs as $index => $attach)
            <div class="form-group col-md-3 mt-3">
                <div class="form-group mb-3">
                    <label for="fullname">
                        {{-- <h4>الاسم الثلاثي</h4> --}}
                    </label>
                    <a href=" {{ asset('images/'.$attach->attach) }}" class="btn btn-primary">عرض المستمسك {{ $index+1
                        }}</a>
                </div>
            </div>
            @endforeach
            @endif





            {{-- <div class="form-group col-md-4 mt-3">
                <h3>Image company</h3>
                <label for="image">Recomended Size: 370 X 370</label>
                <!-- asset('assets/img/header-bg.jpg') -->
                @if ($company->image >0)
                <img style="height: 30vh" src="{{asset('images/'.$company->image)}}" class="img-thumbnail" alt="">
                @else
                <img style="height: 30vh" src="{{asset('images/default.jpg')}}" class="img-thumbnail" alt="">

                @endif
                <input type="file" class="mt-3" name="image" id="image">
            </div> --}}
        </div>

    </div>
</main>
@endsection
