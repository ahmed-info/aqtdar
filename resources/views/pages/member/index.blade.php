@extends('dashboard.layouts.layout')
@section('body')
<main>
    <div class="container-fluid px-4">
        @if (session()->has('status'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('status') }}
        </div>
        @endif
        <h1 class="mt-4">قائمة اعضاء التجمع</h1>
        <ol class="breadcrumb mb-4">
            <a href="{{ route('dashboard.member.create') }}">
                <div class="btn btn-primary p-2 bd-highlight">
                    اضافة عضو
                </div>
            </a>
        </ol>

        <table class="table table-bordered" id="myDataTable">
            <thead>
                <tr>
                    <th class="">#</th>

                    <th class="">الاسم</th>
                    <th class="">الكلية</th>
                    <th class="">التخصص العلمي</th>
                    <th class="">التخصص العملي</th>
                    <th class="">السيرة الشخصية</th>
                    <th class="">صورة</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($members) > 0)
                @foreach ($members as $index=> $member)
                <tr>
                    <th scope="">{{$index +1}}</th>

                    <td>{{$member->name}}</td>
                    <td>{{$member->college}}</td>
                    <td>{{$member->department}}</td>
                    <td>{{$member->position}}</td>
                    <td>{{$member->description}}</td>

                    <td><img src={{ asset('images' ).'/'.$member->image}} style="width: 100px"
                        class="img-thumbnail" alt=""></td>
                    <td>

                        <div class="">
                            <div class="col-sm-6">
                                <a href="{{route('dashboard.member.edit',['id'=>$member->id])}}"
                                    class="btn btn-primary">Edit</a>
                            </div>
                            <div class="col-sm-6">
                                <form action="{{route('dashboard.member.destroy',['id'=>
                                    $member->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm"
                                        data-toggle="tooltip" title='Delete'>Delete</button>
                                </form>
                            </div>
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