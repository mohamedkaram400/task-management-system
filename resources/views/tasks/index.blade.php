@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Priority</th>
                <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
                <tr>
                <th>{{ $task->id }}</th>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->priority }}</td>
                <td>{{ $task->date }}</td>
                <td>
                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-sm">Update</a>
                
                    <form action="{{ route('task.delete', $task->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this task?')">Delete</button>
                    </form>
                
                    <a href="{{ route('task.show', $task->id) }}" class="btn btn-info btn-sm">Info</a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection