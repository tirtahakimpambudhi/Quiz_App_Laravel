<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url("assets/images/logo.png") }}" type="image/x-icon">
    <title>Register</title>

    @include('components.style')
</head>

<body class="bg-soft-blue">

<div class="container">
    <div class="row align-items-center justify-content-center" style="min-height: 100vh">
        <div class="col-md-5">
            <div class="card border-0">
                <div class="card-body">
                    <a href="../auth" class="logo mb-5">
                        <img src="{{ url("assets/images/logo.png") }}" alt="Logo">
                        <h4 class="text-dark fw-bold">Quizz</h4>
                    </a>
                @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

    @include('components.scripts')
</body>

</html>
