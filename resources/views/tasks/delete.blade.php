<!-- resources/views/tasks/delete.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Delete Task</h1>

    <p>Are you sure you want to delete the task "{{ $task->title }}"?</p>

    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Confirm Delete</button>
    </form>
@endsection
