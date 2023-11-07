@extends('layouts.user-layout')
@section('content')
    <!-- about-style-seven -->
    <section class="about-style-four about-style-seven gray-bg" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 content-column" style="text-align: right">
                    <div class="about-content">
                        <div class="title-box">
                            <div class="sec-title">إنضموا الينا</div>
                            {{-- <div class="title-text">About Research</div> --}}
                        </div>
                        <h2 class="top-text2">ساهموا بالتغيير من خلال الإنخراط بالحياة السياسية.

                            انضموا لتجمع اقتدار وطن</h2>
                        {{-- <div class="text">quasi architebeatae vitae dicta sunt explicabo nemo enim ipsam volupt atem quia
                            voluptassit. aspernatur aut odit fugit sed quia conse quuntur magni dolores eos qui ratione
                            voluptam sequi nescuntneque porro quisquam dolorem ipsum quia dolor sit amet consectur
                            adipiscing velit sed quia numquam eius modi tempora incidunt ut labore et dolore consectetur
                            adipisicing elit.</div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 offset-lg-1 appointment-column" style="text-align: right">
                    <div class="appointment-content">
                        <div class="appointment-title">الخانات التي تحتوي على علامة ال (*) مطلوبة<span></span></div>
                        <div class="form-area">
                            <form action="{{ route('contactus.join.store') }}" method="post" enctype="multipart/form-data" class="appointment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12  mb-3">
                                        <label>الاسم الثلاثي*</label>
                                        <div class="form-control">
                                            <input type="text" name="fullname" value="{{ old('fullname') }}">

                                        </div>
                                        @error('fullname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label>محل الولادة</label>
                                        <div class="form-control">
                                            <input type="text" name="placeOfBirth" value="{{ old('placeOfBirth') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label>تاريخ الولادة*</label>
                                        <div class="form-control">
                                            <input type="date" name="birthday" value="{{ old('birthday') }}">

                                        </div>
                                        @error('birthday')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>

                                    {{--  --}}
                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label>اختر الجنس*</label>
                                        <select class="form-control" name="gender">
                                            <option value="">---</option>
                                            <option value="ذكر" {{ old('gender') == 'ذكر' ? 'selected' : null }}>ذكر</option>
                                            <option value="انثى" {{ old('gender') == 'انثى' ? 'selected' : null }}>انثى</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{--  --}}


                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label>التحصيل الدراسي*</label>
                                        <select class="form-control" name="academicAchievement">
                                            <option value="">---</option>
                                            <option value="ابتدائية" {{ old('academicAchievement') == 'ابتدائية' ? 'selected' : '' }}>ابتدائية</option>
                                            <option value="متوسطة" {{ old('academicAchievement') == 'متوسطة' ? 'selected' : '' }}>متوسطة</option>
                                            <option value="اعدادية" {{ old('academicAchievement') == 'اعدادية' ? 'selected' : '' }}>اعدادية</option>
                                            <option value="دبلوم" {{ old('academicAchievement') == 'دبلوم' ? 'selected' : '' }}>دبلوم</option>
                                            <option value="بكالوريوس" {{ old('academicAchievement') == 'بكالوريوس' ? 'selected' : '' }}>بكالوريوس</option>
                                            <option value="ماجستير" {{ old('academicAchievement') == 'ماجستير' ? 'selected' : '' }}>ماجستير</option>
                                            <option value="دكتوراه" {{ old('academicAchievement') == 'دكتوراه' ? 'selected' : '' }}>دكتوراه</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                        <label>عنوان السكن*</label>
                                        <div class="form-control">
                                            <input type="text" name="address" value="{{ old('address') }}">
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label>المستمسكات</label>
                                        <div class="form-control">
                                            <input type="file" name="attachment">
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label>رقم الموبايل*</label>
                                        <div class="form-control">

                                            <input type="text" name="phone" value="{{ old('phone') }}">

                                        </div>
                                        @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label>رقم بطاقة الناخب</label>
                                        <div class="form-control">
                                            <input type="text" name="voterCardNumber" value="{{ old('voterCardNumber') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                        <label>حساب التويتر او الفيسبوك</label>
                                        <div class="form-control mb-3">
                                            <input type="text" name="accountScoial" value="{{ old('accountScoial') }}">
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                        <label>المستمسكات</label>
                                        <div class="form-control mb-3">
                                            <input type="file" name="attach[]" class="myfrm form-control">
                                        </div>
                                    </div> --}}

                                    <div class="col-lg-12 col-md-12 col-sm-12 input-group hdtuto control-group lst increment" >
                                        <input type="file" name="attach[]" class="myfrm form-control" value="{{ old('attach') }}">
                                        <div class="input-group-btn">
                                          <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                        </div>
                                      </div>
                                      <div class="col-lg-12 col-md-12 col-sm-12 mb-3 clone hide">
                                        <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                          <input type="file" name="attach[]" class="myfrm form-control">

                                          <div class="input-group-btn">
                                            <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                          </div>

                                        </div>
                                        @error('attach')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                      </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn" type="submit">تسجيل</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-seven -->
@endsection
