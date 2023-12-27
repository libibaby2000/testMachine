@extends('tasks.layout')

@section('content')
    <div class="container mt-4">
        <div class="card bg-info text-white">
            <div class="card-body">
                <h2 class="card-title">{{ $task->title }}</h2>
                <p class="card-text"><strong>Description:</strong> {{ $task->description }}</p>
                <p class="card-text"><strong>Due Date:</strong> {{ $task->due_date }}</p>
                <a href="{{ url('tasks') }}" class="btn btn-light">Back to Tasks</a>
            </div>
        </div>
    </div>
@endsection
