@extends('layouts.auth')

@section('content')
    <h5 class="text-dark fw-bold mb-4">Sign In</h5>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="mb-1">Alamat Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="mb-1">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <button class="btn btn-primary d-block w-100 mb-3" type="submit">Sign In</button>
        <p class="mb-0 text-secondary text-center">
            Belum memiliki akun? <a href="{{ route('register') }}">Daftar</a>
        </p>
    </form>
@endsection
