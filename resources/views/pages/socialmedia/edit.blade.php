@extends('dashboard.layouts.layout')
@section('body')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit of Social media</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">التواصل الاجتماعي</li>
        </ol>
        <form action="{{route('dashboard.socialmedia.update',["id"=>$socialmedia->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="row">
            <div class="form-group col-md-6 mt-3">
                <div class="form-group mb-3">
                    <label for="facebook"><h4>فيسبوك</h4></label>
                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{$socialmedia->facebook}}">
                    @error('facebook')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>

            <div class="form-group col-md-6 mt-3">
                <div class="form-group mb-3">
                    <label for="instagram"><h4>انستكرام</h4></label>
                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{$socialmedia->instagram}}">
                    @error('instagram')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>

            <div class="form-group col-md-6 mt-3">
                <div class="form-group mb-3">
                    <label for="youtube"><h4>يوتيوب</h4></label>
                    <input type="text" class="form-control" id="youtube" name="youtube" value="{{$socialmedia->youtube}}">
                    @error('youtube')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>

            <div class="form-group col-md-6 mt-3">
                <div class="form-group mb-3">
                    <label for="twitter"><h4>تويتر</h4></label>
                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{$socialmedia->twitter}}">
                    @error('twitter')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>

            <div class="form-group col-md-6 mt-3">
                <div class="form-group mb-3">
                    <label for="email"><h4>الايميل</h4></label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$socialmedia->email}}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>


        </div>
        <input type="submit" name="submit" class="btn btn-primary mt-1">
    </form>
    </div>
</main>
@endsection
