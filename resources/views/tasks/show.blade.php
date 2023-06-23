<!-- resources/views/tasks/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Task Details</h1>

    <h2>{{ $task->title }}</h2>
    <p>{{ $task->description }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
    <a href="{{ route('tasks.delete', $task->id) }}">Delete</a>
@endsection
