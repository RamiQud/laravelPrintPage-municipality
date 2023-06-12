@extends('layout')
@section('title', 'login')
@section('content')
    <div class="container">
        <div class="mt-5" style="margin-top: 0px!important;">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error', 'اسم المستخدم أو كلمة المرور خطا ') }}</div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success', 'تم التسجيل') }}</div>
            @endif
        </div>
    </div>

    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <style>
            .background-radial-gradient {
                background-color: hsl(218, 41%, 15%);
                background-image: radial-gradient(650px circle at 0% 0%,
                        hsl(218, 41%, 35%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%),
                    radial-gradient(1250px circle at 100% 100%,
                        hsl(218, 41%, 45%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%);
            }

            #radius-shape-1 {
                height: 220px;
                width: 220px;
                top: -60px;
                left: -130px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -110px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.9) !important;
                backdrop-filter: saturate(200%) blur(25px);
            }
        </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5" style="    padding-bottom: 119px !important;">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                 <br/>
                        <span style="color: hsl(218, 81%, 75%)"></span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                       
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="{{ route('login.post') }}" method="POST">
                                <img class="Logo-image other" src="{{ asset('images/logoCopy.png') }}">
                                @csrf
                                <label class="form-label">اسم المستخدم</label>
                                <input type="number" class="form-control" name="numberId">

                                <div class="mb-3">
                                    <label class="form-label">كلمة السر</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
<style>
    .mt-5 {
        position: absolute;
        left: 78%;
        top: 6%;
        z-index: 100;
    }
    .Logo-image {
    width: 400px;
    filter: drop-shadow(1px 2px 1px black);
}
.card{
    position: relative;
    right: 50%;
    top: 50%;
}
</style>
