@extends('layout.app')

@section('content')
    <a href="{{ route('departments.create') }}" class="btn btn-primary">Create new department</a>

    <div class="container-lg">

        @forelse($departments as $department)
            <p>department name {{ $department->name }}</p>
        @empty
            <p>There is no department</p>
        @endforelse
    </div>
@endsection
