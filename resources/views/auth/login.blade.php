@extends('layout.app')

@section('content')

    <div class="container">
        <h5 class="display-4">Welcome to Evalation System</h5>
        <div class="row my-3">
            <div class="col-lg-6">
                <h1 class="diplay-5">Notivactions </h1>
            </div>
            <div class="col-lg-6">
                <div class="container my-5 py-3 bg-light border border-secondary rounded-3">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="my-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control @error('msg') is-invalid @enderror" required>
                            @error('msg')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control @error('msg') is-invalid @enderror" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <p class="my-3"><a href="#" class="link-primary">Reset the password</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
