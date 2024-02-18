@extends('layouts.admin')

@section('content')
    <h3 class="text-dark mb-5">Selamat Datang Kembali, Muhammad Yunus</h3>
    <div class="row">
        <div class="col-md-3">
            <a href="admin-list-kuis.html" class="card">
                <div class="card-body">
                    <i class='bx bx-brain fs-1 text-primary'></i>
                    <h5 class="text-dark mt-2">12 Kuis</h5>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="admin-list-pengguna.html" class="card">
                <div class="card-body">
                    <i class='bx bx-user fs-1 text-primary'></i>
                    <h5 class="text-dark mt-2">30 Pengguna</h5>
                </div>
            </a>
        </div>
    </div>
@endsection
