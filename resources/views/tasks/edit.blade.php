@extends('layouts.app')

@section('content')
    <div class="add-form">
        <h1>Edit Task</h1>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ $task->title }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
    </div>
@endsection
