@extends('dashboard.layouts.layout')
@section('body')
<main>

    <div class="container-fluid px-4">
        <h1 class="mt-4">اضافة عضو</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <form action="{{route('dashboard.member.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-6 mt-3">
                    <div class="form-group mb-5">
                        <label for="name">
                            <h4>الاسم</h4>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                            placeholder="ادخل الاسم">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <div class="form-group mb-5">
                        <label for="college">
                            <h4>الكلية</h4>
                        </label>
                        <input type="text" class="form-control" id="college" name="college" value="{{ old('college') }}"
                            placeholder="ادخل اسم الجامعة او الكلية">
                        @error('college')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <div class="form-group mb-5">
                        <label for="college">
                            <h4>التخصص العلمي</h4>
                        </label>
                        <input type="text" class="form-control" id="department" name="department"
                            value="{{ old('department') }}" placeholder="ادخل التخصص العلمي">
                        @error('department')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <div class="form-group mb-5">
                        <label for="position">
                            <h4>التخصص العملي</h4>
                        </label>
                        <input type="text" class="form-control" id="position" name="position"
                            value="{{ old('position') }}" placeholder="ادخل التخصص العملي">
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

                        <textarea class="form-control" id="description" value="{{ old('description') }}"
                            name="description" cols="1">
                        {{ old('description') }}
                    </textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>



                <div class="form-group col-md-3 mt-3">
                    <h3>صورة</h3>
                    <label for="image">Recomended Size: 370 X 370</label>
                    <img style="height: 30vh" src="{{asset('images/default.jpg')}}" class="img-thumbnail" alt="">
                    <input type="file" class="mt-3" name="image">
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-1">
        </form>
    </div>
</main>
@endsection