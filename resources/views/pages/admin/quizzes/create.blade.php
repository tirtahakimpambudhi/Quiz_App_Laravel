@extends('layouts.admin')

@section('content')
    <h4 class="text-dark mb-5">Tambah Kuis Baru</h4>

    <div class="card border-0">
        <div class="card-body">
            <form action="{{ route('quiz.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="quiz_name">Nama Kuis</label>
                    <input type="text" name="quiz_name" id="quiz_name" class="form-control" autofocus required>
                </div>
                <div class="mb-4">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control"
                              required></textarea>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="submit">
                        <i class="bx bx-save"></i> Simpan Baru
                    </button>
                    <a href="{{route('quiz.index')}}" class="btn btn-light">
                        <i class="bx bx-left-arrow-alt"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection()
