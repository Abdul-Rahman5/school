@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    الاعدادات
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
الاعدادات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ url('update') }}" >
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>اسم  المدرسه : <span class="text-danger">*</span></label>
                                <input value="{{$setting['school_name']}}" class="form-control" name="school_name" type="text">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>العام  الحالي  : <span class="text-danger">*</span></label>
                                <input value="{{$setting['current_session']}}" class="form-control" type="datetime" name="current_session">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>اسم المدرسه المختصر   : <span class="text-danger">*</span></label>
                                <input value="{{$setting['school_title']}}" class="form-control" name="school_title" type="text">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>  الهاتف : <span class="text-danger">*</span></label>
                                <input value="{{$setting['phone']}}" class="form-control" name="phone" type="number">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>  البريد الالكتروني  : <span class="text-danger">*</span></label>
                                <input value="{{$setting['email']}}" class="form-control" class="form-control" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>عنوان المدرسه    : <span class="text-danger">*</span></label>
                                <input value="{{$setting['address']}}" class="form-control" name="address" type="text">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>  نهايه الترم الاول : <span class="text-danger">*</span></label>
                                <input value="{{$setting['end_first_term']}}" class="form-control" name="end_first_term" type="datetime">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>  نهايه الترم الثاني   : <span class="text-danger">*</span></label>
                                <input value="{{$setting['end_second_term']}}" class="form-control" type="datetime" name="end_second_term">
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label> شعار المدرسه    : <span class="text-danger">*</span></label>
                                <input value="{{$setting['logo']}}" class="form-control" name="logo" type="file">
                                <img class="w-100" src="{{$setting['logo']}}" alt="logo">
                            </div>
                        </div> --}}

                    </div>
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right"
                        type="submit">{{ trans('Students_trans.submit') }}</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render

@endsection
