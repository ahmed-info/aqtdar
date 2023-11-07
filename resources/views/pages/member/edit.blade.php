@extends('dashboard.layouts.layout')
@section('body')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">تعديل المعلومات الشخصية للعضو</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">تعديل المعلومات الشخصية</li>
        </ol>
        <form action="{{route('dashboard.member.update',['id'=>$member->id])}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="row">
                <div class="form-group col-md-6 mt-3">
                    <div class="form-group mb-3">
                        <label for="name">
                            <h4>الاسم</h4>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$member->name}}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <div class="form-group mb-3">
                        <label for="college">
                            <h4>الكلية او الجامعة</h4>
                        </label>
                        <input type="text" class="form-control" id="college" name="college"
                            value="{{$member->college}}">
                        @error('college')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <div class="form-group mb-3">
                        <label for="department">
                            <h4>التخصص العلمي</h4>
                        </label>
                        <input type="text" class="form-control" id="department" name="department"
                            value="{{$member->department}}">
                        @error('department')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-6 mt-3">
                    <div class="form-group mb-3">
                        <label for="position">
                            <h4>التخصص العملي</h4>
                        </label>
                        <input type="text" class="form-control" id="position" name="position"
                            value="{{$member->position}}">
                        @error('position')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-6 mt-3">
                    <div class="form-group mb-5">
                        <label for="description">
                            <h4>السيرة الشخصية</h4>
                        </label>

                        <textarea class="form-control" id="description" name="description" cols="1">
                        {{ $member->description }}
                    </textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>



                <div class="form-group col-md-4 mt-3">
                    <h3>Image</h3>
                    <label for="image">Recomended Size: 370 X 370</label>
                    <!-- asset('assets/img/header-bg.jpg') -->
                    @if ($member->image !=null && $member->image !="")
                    <img style="height: 30vh" src="{{asset('images/'.$member->image)}}" class="img-thumbnail" alt="">
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