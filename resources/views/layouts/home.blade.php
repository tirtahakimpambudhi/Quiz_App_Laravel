<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url("assets/images/logo.png") }}" type="image/x-icon">
    <title>Quizz Mencerdaskan Bangsa</title>

    @include('components.style')
</head>

<body class="bg-soft-blue">
<div class="container py-5">
    <nav class="d-flex justify-content-center">
        <a href="." class="logo">
            <img src="{{ url("assets/images/logo.png") }}" alt="Logo">
            <h4 class="text-dark fw-bold">Quizz</h4>
        </a>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @yield('content')
        </div>
    </div>
</div>

    @include('components.scripts')
</body>

</html>
