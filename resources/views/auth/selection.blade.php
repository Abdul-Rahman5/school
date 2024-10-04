
@include('layouts.head')
<!-- row -->
<div class="row ">
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

                <div class="wrapper bg-light">
                    <section class="height-100vh d-flex align-items-center login">
                        <div class="container">
                            <div class="row justify-content-center no-gutters vertical-align">
                                <div class="col-md-8 bg-white ">
                                    <div class="login-fancy pb-40 clearfix">
                                        <h3 class="mb-30">حدد طريقه الدخول</h3>
                                        <div class="from-inline d-flex justify-content-center">
                                            <a class="btn btn-default col-lg-2" title="student" href="{{ url('login/student') }}">

                                                <img src="{{ asset('assets/images/logo-icon-dark.png') }}" class="w-100" alt="">
                                            </a>
                                            <a class="btn btn-default col-lg-2" title="parent" href="{{ url('login/parent') }}">

                                                <img src="" class="w-50" alt="">
                                            </a>
                                            <a class="btn btn-default col-lg-2" title="taecher" href="{{ url('login/taecher') }}">

                                                <img src="" class="w-50" alt="">
                                            </a>
                                            <a class="btn btn-default col-lg-2" title="admin" href="{{ url('login/admin') }}">

                                                <img src="" class="w-50" alt="">
                                            </a>
                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </section>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
</body>
</html>
