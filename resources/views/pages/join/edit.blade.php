@extends('dashboard.layouts.layout')
@section('body')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">تعديل معلومات العضو</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">تعديل معلومات</li>
        </ol>
        <form action="{{route('dashboard.join.update',['id'=> $join->id ])}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('put')


            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="form-group mb-3">
                        <label for="fullname">
                            <h4>الاسم الثلاثي</h4>
                        </label>
                        <input type="text" class="form-control" id="fullname" name="fullname"
                            value="{{$join->fullname}}">
                        @error('fullname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <div class="form-group mb-3">
                        <label for="fullname">
                            <h4>محل الولادة</h4>
                        </label>
                        <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth"
                            value="{{$join->placeOfBirth}}">
                        @error('placeOfBirth')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <div class="form-group mb-3">
                        <label for="fullname">
                            <h4>تاريخ الولادة</h4>
                        </label>
                        <input type="datetime-local" class="form-control" id="birthday" name="birthday"
                            value="{{$join->birthday}}">
                        @error('birthday')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <label for="gender">
                        <h4>الجنس</h4>
                    </label>
                    <select class="form-control select2" name="gender" style="..." id="gender">
                        <option value="">اختر الجنس</option>
                        <option value="ذكر" @if ($join->gender == "ذكر") selected="selected" @endif>
                            ذكر</option>

                        <option value="انثى" @if ($join->gender == "انثى") selected="selected" @endif>
                            انثى</option>
                    </select>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <label for="gender">
                        <h4>التحصيل الدراسي</h4>
                    </label>
                    <select class="form-control select2" name="academicAchievement" style="..." id="gender">
                        <option value="">التحصيل الدراسي</option>
                        <option value="ابتدائية" @if ($join->academicAchievement == "ابتدائية") selected="selected"
                            @endif>
                            ابتدائية</option>

                        <option value="متوسطة" @if ($join->academicAchievement == "متوسطة") selected="selected" @endif>
                            متوسطة</option>

                        <option value="اعدادية" @if ($join->academicAchievement == "اعدادية") selected="selected"
                            @endif>
                            اعدادية</option>
                        <option value="دبلوم" @if ($join->academicAchievement == "دبلوم") selected="selected" @endif>
                            دبلوم</option>
                        <option value="بكالوريوس" @if ($join->academicAchievement == "بكالوريوس") selected="selected"
                            @endif>
                            بكالوريوس</option>
                        <option value="ماجستير" @if ($join->academicAchievement == "ماجستير") selected="selected"
                            @endif>
                            ماجستير</option>

                        <option value="دكتوراه" @if ($join->academicAchievement == "دكتوراه") selected="selected"
                            @endif>
                            دكتوراه</option>


                    </select>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <div class="form-group mb-3">
                        <label for="fullname">
                            <h4>عنوان السكن</h4>
                        </label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$join->address}}">
                        @error('address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <div class="form-group mb-3">
                        <label for="fullname">
                            <h4>رقم الموبايل</h4>
                        </label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$join->phone}}">
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <div class="form-group mb-3">
                        <label for="fullname">
                            <h4>رقم بطاقة الناخب</h4>
                        </label>
                        <input type="text" class="form-control" id="voterCardNumber" name="voterCardNumber" value="{{$join->voterCardNumber}}">
                        @error('voterCardNumber')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <div class="form-group mb-3">
                        <label for="fullname">
                            <h4>حساب التواصل الاجتماعي</h4>
                        </label>
                        <input type="text" class="form-control" id="accountScoial" name="accountScoial"
                            value="{{$join->accountScoial}}">
                        @error('accountScoial')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
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
            <input type="submit" name="submit" class="btn btn-primary mt-1">
        </form>
    </div>
</main>
@endsection
