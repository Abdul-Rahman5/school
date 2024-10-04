<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        {{-- <h4 class="mb-0"> {{ trans('main_trans.Dashboard') }}</h4>
                         --}}
                         <h4 class="mb-0"> لوحه تحكم الادمن</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            <!-- widgets -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        {{-- <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i> --}}
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">عدد الطلاب</p>
                                    <h4>{{$data['Students']}}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 81% lower
                                growth
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-warning">
                                        {{-- <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i> --}}
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">عدد المعلمين</p>
                                    <h4> {{$data['teachers']}} </h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> Total sales
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-success">
                                        {{-- <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i> --}}
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">عدد اولياء الامور</p>
                                    <h4> {{$data['Parents']}} </h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                {{-- <i class="fa fa-calendar mr-1" aria-hidden="true"></i> Sales Per Week --}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-primary">
                                        {{-- <i class="fa fa-twitter highlight-icon" aria-hidden="true"></i> --}}
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">عدد الفصول الدراسه</p>
                                    <h4> {{$data['Classrooms']}}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="tab nav-border" style="position: relative;">
                                <div class="d-block d-md-flex justify-content-between">
                                    <div class="d-block w-100">
                                        <h5 class="card-title">اخر العمليات علي النظام </h5>
                                    </div>
                                    <div class="d-block d-md-flex nav-tabs-custom">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="months-tab" data-toggle="tab"
                                                    href="#months" role="tab" aria-controls="months"
                                                    aria-selected="true"> الطلاب</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="year-tab" data-toggle="tab" href="#year"
                                                    role="tab" aria-controls="year" aria-selected="false">المعلمين
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="parent-tab" data-toggle="tab" href="#parent"
                                                    role="tab" aria-controls="parent" aria-selected="false">اولياء الامور
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="Bills-tab" data-toggle="tab" href="#Bills"
                                                    role="tab" aria-controls="Bills" aria-selected="false">الفواتير
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="months" role="tabpanel"
                                        aria-labelledby="months-tab">
                                        <div class="row mb-30">
                                            <div class="col-md-1 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5"># </h6>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <h6 class="text-danger mb-0 sm-mt-5">اسم الطالب</h6>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-danger mb-0 lead"><b>البريد الالكتروني</b></h5>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-danger mb-0 lead"><b>النوع</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-danger mb-0 lead"><b>المرحله الدراسيه</b></h5>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-danger mb-0 lead"><b>الصف الدراسي</b></h5>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-danger mb-0 lead"><b>القسم</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-danger mb-0 lead"><b>تاريخ الاضافه</b></h5>
                                            </div>
                                        </div>
                                        @forelse ($data['StudentsTable'] as $student)
                                        <div class="row mb-30">
                                            <div class="col-md-1 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">{{$loop->iteration}} </h6>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <h6 class=" mb-0 sm-mt-5">{{$student->name}} </h6>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class=" mb-0 sm-mt-5 lead small"><b>{{$student->email}} </b></h5>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead"><b>{{$student->gender->Name}}</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead"><b>{{$student->grade->Name}} </b></h5>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead">{{$student->classroom->Name_Class}}</h5>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead">{{$student->section->Name_Section}}</h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead small">{{$student->created_at}}</h5>
                                            </div>
                                        </div>
                                        @empty
                                        <p class=" fa-1x colomd-12 text-dark  text-center">لا توجد بيانات </p>
                                        @endforelse


                                    </div>
                                    <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="year-tab">
                                        <div class="row mb-30">
                                            <div class="col-md-1 col-sm-6">
                                                <h6 class="mb-0 "># </h6>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <h6 class="text-danger mb-0 lead ">اسم المعلم</h6>
                                            </div>

                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>النوع</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b> تاريخ التعيين</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>التخصص</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>تاريخ الاضافه</b></h5>
                                            </div>
                                        </div>
                                        @forelse ($data['TeacherTable'] as $teacher)
                                        <div class="row mb-30">
                                            <div class="col-md-1 col-sm-6">
                                                <h6 class="mb-0 lead sm-mt-5">{{$loop->iteration}} </h6>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <h6 class=" mb-0 lead sm-mt-5">{{$teacher->Name}} </h6>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <h6 class=" mb-0 lead sm-mt-5">{{$teacher->genders->Name}} </h6>
                                            </div>

                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead lead"><b>{{$teacher->Joining_Date}}</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead lead"><b>{{$teacher->specializations->Name}} </b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead lead small">{{$teacher->created_at}}</h5>
                                            </div>
                                        </div>
                                        @empty
                                        <p class=" fa-1x colomd-12 text-dark  text-center">لا توجد بيانات </p>
                                        @endforelse




                                    </div>
                                    <div class="tab-pane fade" id="parent" role="tabpanel" aria-labelledby="parent-tab">
                                        <div class="row mb-30">
                                            <div class="col-md-1 col-sm-6">
                                                <h6 class="mb-0 "># </h6>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <h6 class="text-danger mb-0 lead ">اسم ولي الامر</h6>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>البريد الالكتروني</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b> رقم الهويه </b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>رقم الهاتف</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>تاريخ الاضافه</b></h5>
                                            </div>
                                        </div>
                                        @forelse ($data['ParentsTable'] as $Parent)
                                        <div class="row mb-30">
                                            <div class="col-md-1 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">{{$loop->iteration}} </h6>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <h6 class=" mb-0 lead sm-mt-5">{{$Parent->Name_Father}} </h6>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <h6 class=" mb-0 lead small sm-mt-5">{{$Parent->Email}} </h6>
                                            </div>

                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead lead"><b>{{$Parent->National_ID_Father}}</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead lead"><b>{{$Parent->Phone_Father}} </b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead lead small">{{$Parent->created_at}}</h5>
                                            </div>
                                        </div>
                                        @empty
                                        <p class=" fa-1x colomd-12 text-dark  text-center">لا توجد بيانات </p>
                                        @endforelse
                                    </div>
                                    <div class="tab-pane fade" id="Bills" role="tabpanel" aria-labelledby="Bills-tab">
                                        <div class="row mb-30">
                                            <div class="col-md-1 col-sm-6">
                                                <h6 class="mb-0 "># </h6>
                                            </div>
                                            <div class="col-md-1 col-sm-6">
                                                <h6 class="text-danger mb-0 lead "> تاريخ الفاتوره </h6>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>اسم الطالب</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b> المرحله  الدراسيه </b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>الصف الدراسي</b></h5>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>القسم </b></h5>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b> نوع الرسوم</b></h5>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>  المبلغ</b></h5>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-6 ">
                                                <h5 class="text-danger mb-0 lead"><b>تاريخ الاضافه</b></h5>
                                            </div>
                                        </div>
                                        @forelse ($data['fee_invoiceTable'] as $fee)
                                        <div class="row mb-30">
                                            <div class="col-md-1 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">{{$loop->iteration}} </h6>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <h6 class=" mb-0 lead sm-mt-5">{{$fee->invoice_data}} </h6>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <h6 class=" mb-0 lead small sm-mt-5">{{$fee->Email}} </h6>
                                            </div>

                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead lead"><b>{{$fee->National_ID_Father}}</b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead lead"><b>{{$fee->Phone_Father}} </b></h5>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class=" mb-0 lead lead small">{{$fee->created_at}}</h5>
                                            </div>
                                        </div>
                                        @empty
                                        <p class=" fa-1x colomd-12 text-dark  text-center">لا توجد بيانات </p>
                                        @endforelse


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <h5 class="card-title">Best Selling Items</h5>
                            <ul class="list-unstyled">
                                <li class="mb-20">
                                    <div class="media">
                                        <div class="position-relative">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/01.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0">Car dealer <span class="float-right text-danger">
                                                    8,561</span> </h6>
                                            <p>Automotive WordPress Theme </p>
                                        </div>
                                    </div>
                                    <div class="divider dotted mt-20"></div>
                                </li>
                                <li class="mb-20">
                                    <div class="media">
                                        <div class="position-relative clearfix">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/02.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0">Webster <span class="float-right text-warning">
                                                    6,213</span> </h6>
                                            <p>Multi-purpose HTML5 Template </p>
                                        </div>
                                    </div>
                                    <div class="divider dotted mt-20"></div>
                                </li>
                                <li class="mb-20">
                                    <div class="media">
                                        <div class="position-relative">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/03.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0">The corps <span class="float-right text-success">
                                                    2,926</span> </h6>
                                            <p> Multi-Purpose WordPress Theme </p>
                                        </div>
                                    </div>
                                    <div class="divider dotted mt-20"></div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="position-relative clearfix">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/04.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0">Sam martin <span
                                                    class="float-right text-warning">6,213 </span></h6>
                                            <p>Personal vCard Resume WordPress Theme </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-30">
                    <div class="card h-100">
                        <div class="btn-group info-drop">
                            <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                                <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View
                                    all</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Site Visits Growth </h5>
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-danger">Income</h6>
                                    <p class="text-danger">+584</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-info">Outcome</h6>
                                    <p class="text-info">-255</p>
                                </div>
                            </div>
                            <div id="morris-line" style="height: 320px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="p-4 text-center bg" style="background: url(images/bg/01.jpg);">
                            <h5 class="mb-70 text-white position-relative">Michael Bean </h5>
                            <div class="btn-group info-drop">
                                <button type="button" class="dropdown-toggle-split text-white" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="text-primary ti-files"></i> Add
                                        task</a>
                                    <a class="dropdown-item" href="#"><i class="text-dark ti-pencil-alt"></i>
                                        Edit Profile</a>
                                    <a class="dropdown-item" href="#"><i class="text-success ti-user"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="text-secondary ti-info"></i>
                                        Contact Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center position-relative">
                            <div class="avatar-top">
                                <img class="img-fluid w-25 rounded-circle " src="images/team/13.jpg" alt="">
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mt-30">
                                    <b>Files Saved</b>
                                    <h4 class="text-success mt-10">1582</h4>
                                </div>
                                <div class="col-sm-4 mt-30">
                                    <b>Memory Used </b>
                                    <h4 class="text-danger mt-10">58GB</h4>
                                </div>
                                <div class="col-sm-4 mt-30">
                                    <b>Spent Money</b>
                                    <h4 class="text-warning mt-10">352,6$</h4>
                                </div>
                            </div>
                            <div class="divider mt-20"></div>
                            <p class="mt-30">17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p>
                            <p class="mt-10">michael@webmin.com</p>
                            <div class="social-icons color-icon mt-20">
                                <ul>
                                    <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-github"><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="calendar-main mb-30">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-12 sm-mb-30">
                                <a href="#" data-toggle="modal" data-target="#add-category"
                                    class="btn btn-primary btn-block m-t-20">
                                    <i class="fa fa-plus pr-2"></i> Create New
                                </a>
                                <div id="external-events" class="m-t-20">
                                    <br>
                                    <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                    <div class="external-event bg-success fc-event">
                                        <i class="fa fa-circle mr-2 vertical-middle"></i>New Theme Release
                                    </div>
                                    <div class="external-event bg-info fc-event">
                                        <i class="fa fa-circle mr-2 vertical-middle"></i>My Event
                                    </div>
                                    <div class="external-event bg-warning fc-event">
                                        <i class="fa fa-circle mr-2 vertical-middle"></i>Meet manager
                                    </div>
                                    <div class="external-event bg-danger fc-event">
                                        <i class="fa fa-circle mr-2 vertical-middle"></i>Create New theme
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div id="calendar"></div>
                        <div class="modal" tabindex="-1" role="dialog" id="event-modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add New Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body p-20"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success save-event">Create
                                            event</button>
                                        <button type="button" class="btn btn-danger delete-event"
                                            data-dismiss="modal">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Add Category -->
                        <div class="modal" tabindex="-1" role="dialog" id="add-category">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add a category</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body p-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Category Name</label>
                                                    <input class="form-control form-white" placeholder="Enter name"
                                                        type="text" name="category-name" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label">Choose Category Color</label>
                                                    <select class="form-control form-white"
                                                        data-placeholder="Choose a color..." name="category-color">
                                                        <option value="success">Success</option>
                                                        <option value="danger">Danger</option>
                                                        <option value="info">Info</option>
                                                        <option value="primary">Primary</option>
                                                        <option value="warning">Warning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success save-category"
                                            data-dismiss="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=================================
 wrapper -->

            <!--=================================
 footer -->
 {{-- @livewire('posts')
 @livewireScripts --}}

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>
@include('livewire.posts')
    <!--=================================
 footer -->

    @include('layouts.footer-scripts')

</body>

</html>
