
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registertion</title>
</head>
<body>
@extends('layout')
@section('title', 'registar')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success','تم التسجيل') }}</div>
            @endif
        </div>
        <form action="{{ route('registertion.post') }}" method="POST" class="ms-auto me-auto "style="width: 500px; margin-top:100px;">
            @csrf
            <div class="mb-3">
            <label class="form-label">اسم المستخدم</label>
            <input type="name" class="form-control" name="username">
            </div>
            <div class="mb-3">
            <label class="form-label">الرقم التعريفي</label>
            <input type="number" class="form-control" name="numberId">
            </div>
            <div class="mb-3">
                <label class="form-label">كلمة السر</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">تسجيل المستخدم</button>
        </form>
    </div>
@endsection

</body>
</html>
