@extends('layouts.layout')

@section('content')
    <form class="mt-5" action="{{ route('task.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label><br>
            <input class="form-control" type="text" name="title" value="{{ $task->title }}" id="title">
        </div>

        <div class="form-group">
            <label for="description">Description</label><br>
            <input class="form-control" type="text" name="description" value="{{ $task->description }}" id="description">
        </div>

        <div class="form-group">
            <label for="status">Status</label><br>
            <select class="form-control" name="status" id="status">
                <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date">Date</label><br>
            <input class="form-control" type="date" name="date" value="{{ $task->date }}" id="date">
        </div>

        <div class="form-group">
            <label for="priority">Priority</label><br>
            <select class="form-control" name="priority" id="priority">
                <option value="low" {{ $task->priority == 'low' ? 'selected' : '' }}>Low</option>
                <option value="medium" {{ $task->priority == 'medium' ? 'selected' : '' }}>Medium</option>
                <option value="high" {{ $task->priority == 'high' ? 'selected' : '' }}>High</option>
            </select>
        </div>

        <br>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection
