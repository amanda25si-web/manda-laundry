
@extends('layout.guest.app')

@section('title', 'Login Admin - Laundry Kita')

@section('content')
<div class="container min-vh-100 d-flex justify-content-center align-items-center py-5">
    <div class="card border-0 shadow rounded-4 p-4"
         style="width: 100%; max-width: 430px;">

        <div class="card-body">

            <div class="text-center mb-4">
                <h3 class="fw-bold text-primary">Laundry Kita</h3>
                <p class="text-muted mb-0">
                    Silakan login ke akun admin
                </p>
            </div>

            {{-- Pesan error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            {{-- Form login --}}
            <form action="{{ url('/login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        class="form-control"
                        placeholder="Masukkan username"
                        value="{{ old('username') }}"
                        required
                    >
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        required
                    >
                </div>

                <button type="submit"
                        class="btn btn-primary w-100 fw-semibold">
                    Login
                </button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ url('/home') }}" class="text-decoration-none">
                    Kembali ke Beranda
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
