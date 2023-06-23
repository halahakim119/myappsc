@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Task List</h1>

        <div class="task-list">
            @foreach ($tasks as $task)
                <div class="task">
                    <h2 class="task-title">
                        <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
                    </h2>
                    <p class="task-description">{{ $task->description }}</p>
                    <p class="task-status">Status: {{ $task->status }}</p>

                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('add')
    <div class="container">
        <div class="add-form">
            <h1>Create Task</h1>

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="pending">Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Task</button>
            </form>
        </div>
    </div>
@endsection
