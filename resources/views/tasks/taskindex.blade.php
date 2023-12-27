@extends('tasks.layout')

@section('content')
    <div class="container mt-4" style="background-color: #00008B; padding: 20px; border-radius: 10px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary">Task Management System</h2>
            <a href="{{ url('taskcreate') }}" class="btn btn-success">Create New Task</a>
        </div>

        <div class="row">
            @foreach($tasks as $task)
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #ADD8E6;">
                    <a style='text-decoration:none; color:black' href="{{ url('tasks/'.$task->id) }}">
                        <div class="card-body">
                            <h5 class="card-title text-info">{{ $task->title }}</h5>
                            <p class="card-text">{{ $task->description }}</p>
                            <p class="card-text"><strong>Due Date:</strong> {{ $task->due_date }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url('tasks/'.$task->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ url('taskedit/'.$task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url('taskdelete/'.$task->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
