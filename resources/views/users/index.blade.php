@extends('layout.app')

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-3 border border-2"><p class="lead"><strong>Name</strong></p></div>
            <div class="col-6 border border-2">{{ auth()->user()->name }}</div>
        </div>
        <div class="row">
            <div class="col-3 border border-2"><p class="lead"><strong>Email</strong></p></div>
            <div class="col-6 border border-2">{{ auth()->user()->email }}</div>
        </div>
    </div>
@endsection
