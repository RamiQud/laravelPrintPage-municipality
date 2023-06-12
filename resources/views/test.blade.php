<!DOCTYPE html>
<html>

<head>
    <title>مرحبًا بك في تطبيقنا</title>
</head>

<body>
    <div>
        <p>
            test psge
        </p>
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
    </div>
</body>

</html>
