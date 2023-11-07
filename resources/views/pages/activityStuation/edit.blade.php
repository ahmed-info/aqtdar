@extends('dashboard.layouts.layout')
@section('body')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">تعديل النشاط او الموقف السياسي</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">تعديل النشاط</li>
        </ol>
        <form action="{{route('dashboard.activityStuation.update',["id"=>$activityStuation->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="row">
            <div class="form-group col-md-6 mt-3">
                <div class="form-group mb-3">
                    <label for="title_ar"><h4>العنوان</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$activityStuation->title}}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-md-6 mt-3">
                <div class="form-group mb-5">
                    <label for="description"><h4>التفاصيل</h4></label>

                    <textarea class="form-control" id="description" name="description" cols="1">
                        {{ $activityStuation->description }}
                    </textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>

            <div class="form-group col-md-3 mt-3">
                <label for="status">
                    <h6>اختر موقف سياسي او نشاط</h6>
                </label>

                <select name="status" id="status" class="form-control">
                    <option value="">اختر موقف سياسي او نشاط</option>
                    <option value="موقف سياسي" {{ $activityStuation->status == 'موقف سياسي' ? 'selected' : '' }}>موقف سياسي</option>
                    <option value="نشاط" {{ $activityStuation->status == 'نشاط' ? 'selected' : '' }}>نشاط</option>
                </select>

                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>





            <div class="form-group col-md-4 mt-3">
                <h3>Image Slide</h3>
                <label for="image">Recomended Size: 370 X 370</label>
                <!-- asset('assets/img/header-bg.jpg') -->
                @if ($activityStuation->image !=null && $activityStuation->image !="")
                <img style="height: 30vh" src="{{asset('images/'.$activityStuation->image)}}" class="img-thumbnail" alt="">
                @else
                <img style="height: 30vh" src="{{asset('images/default.jpg')}}" class="img-thumbnail" alt="">

                @endif
                <input type="file" class="mt-3" name="image" id="image">
            </div>
        </div>
        <input type="submit" name="submit" class="btn btn-primary mt-1">
    </form>
    </div>
</main>
@endsection
