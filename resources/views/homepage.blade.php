@extends('layouts.home')

@section('content')
    <section class="py-5">
        <h2 class="text-center fw-bold mb-3">Selamat Datang di Quizz</h2>
        <p class="text-center text-secondary">
            tempat yang sempurna bagi para penikmat tantangan dan pencari pengetahuan.
            <br class="d-none d-md-block"> Dengan berbagai kuis yang menarik dan bervariasi, platform ini
            menyajikan
            <br class="d-none d-md-block"> pengalaman kuis online yang interaktif dan mendidik.
        </p>
    </section>

    <section>
        <h5 class="mb-0 text-dark fw-bold mb-4">List Kuis</h5>

        <div class="row g-3">
            <div class="col-md-6">
                <a href="kuis.html" class="card">
                    <div class="card-body">
                        <h5 class="text-dark text-center">Kuis Matematika Dasar</h5>
                        <p class="mb-0 text-secondary text-center fs-7">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias at aliquid
                            vitae.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="kuis.html" class="card">
                    <div class="card-body">
                        <h5 class="text-dark text-center">Kuis Sejarah Dasar</h5>
                        <p class="mb-0 text-secondary text-center fs-7">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias at aliquid
                            vitae.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="kuis.html" class="card">
                    <div class="card-body">
                        <h5 class="text-dark text-center">Kuis Matematika Dasar 2</h5>
                        <p class="mb-0 text-secondary text-center fs-7">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias at aliquid
                            vitae.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
