@extends('tasks.layout')

@section('content')
    <div class="container mt-4" style="background-color: #d1d8e0; padding: 20px; border-radius: 10px; color: #fff;">
        <h2 class="text-primary">Edit Task</h2>
        <form action="{{ url('taskupdate/'.$task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ $task->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="date" class="form-control" id="due_date" name="due_date" value="{{ $task->due_date }}" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Update Task</button>
                <a href="{{ url('tasks') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
