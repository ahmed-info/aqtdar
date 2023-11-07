@extends('dashboard.layouts.layout')
@section('body')
<main>
    <div class="container-fluid px-4">
        @if (session()->has('status'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('status') }}
              </div>
        @endif
        <h1 class="mt-4">طلبات الانضمام</h1>
        <ol class="breadcrumb mb-4">
        </ol>
        {{-- <form action="{{ route('dashboard.join.export') }}" method="POST" target="_blank">
            @csrf --}}
            <a href="{{ route('dashboard.join.export') }}" class="btn btn-success">
            تصدير المعلومات الى الاكسل
            </a>
        {{-- </form> --}}
        <table class="table table-bordered" id="myDataTable">
            <thead>
              <tr>
                <th class="">#</th>
                <th class="">الاسم الثلاثي</th>
                <th class="">محل الولادة</th>
                <th class="">تاريخ الولادة</th>
                <th class="">الجنس</th>
                <th class="">التحصيل الدراسي</th>
                <th class="">عنوان السكن</th>
                <th class="">الموبايل</th>
                <th class="">رقم بطاقة الناخب</th>
                <th class="">Action</th>
              </tr>
            </thead>
            <tbody>
               @if(count($joins) > 0)
                    @foreach ($joins as $index=> $join)
                          <tr>
                            <th scope="">{{$index +1}}</th>

                            <td>{{$join->fullname}}</td>
                            <td>{{$join->placeOfBirth}}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $join->birthday)->format('Y-m-d') }}
                            </td>
                            <td>{{$join->gender}}</td>
                            <td>{{$join->academicAchievement}}</td>
                            <td>{{$join->address}}</td>
                            <td>{{$join->phone}}</td>
                            <td>{{$join->voterCardNumber}}</td>

                            <td>

                                <div class="">
                                    <div class="col-sm-6">
                                        <a href="{{route('dashboard.join.show',["id"=>$join->id])}}" class="btn btn-xs btn-success btn-flat">عرض المستمسكات</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="{{route('dashboard.join.edit',["id"=>$join->id])}}" class="btn btn-primary">تعديل</a>
                                    </div>

                                    {{-- <div class="col-sm-6">
                                        <form action="{{route('dashboard.company.destroy',["id"=>$company->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                        </form>
                                    </div> --}}
                                </div>
                            </td>

                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>

    </div>
</main>
@endsection
