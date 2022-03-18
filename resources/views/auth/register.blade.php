@extends('layout.app')

@section('content')

    <div class="container">
        <h5 class="display-4">Welcome to Evaluation System Register</h5>
        <div class="row my-3">
            <div class="col-lg-6">
                <div class="container my-5 py-3 bg-light border border-secondary rounded-3">
                    <form action="{{ route('register') }}" method="post" oninput='password_confirmation.setCustomValidity(password.value !== password_confirmation.value ? "Passwords do not match." : "")'>
                        @csrf
                        <div class="my-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="emplooy_id" class="form-label">Emplooy ID</label>
                            <input type="number" name="emplooy_id" class="form-control @error('emplooy_id') is-invalid @enderror" value="{{old('emplooy_id')}}" required>
                            @error('emplooy_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="my-3">
                            <label for="password_confirmation" class="form-label">Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation @error('password') is-invalid @enderror" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
