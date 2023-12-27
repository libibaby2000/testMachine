@extends('tasks.layout')

@section('content')
    <div class="container mt-4" style="background-color: #3498db; padding: 20px; border-radius: 10px;">
        <h2 class="text-dark">Create Task</h2>
        <form action="{{ url('taskstore') }}" method="POST">
            @csrf
            <div class="form-group">
                <a href=""></a>
                <label for="title" class="text-dark">Title</label>
                <input type="text" class="form-control" id="title" name="title" pattern="[A-Za-z]+" title="Please enter alphabets only" required>
            </div>
            <div class="form-group">
                <label for="description" class="text-dark">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="due_date" class="text-dark">Due Date</label>
                <input type="date" class="form-control" id="due_date" name="due_date" required>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Save Task</button>
                <a href="{{ url('tasks') }}" class="btn btn-danger ml-2">Cancel</a>
            </div>
        </form>
    </div>
   
@endsection
