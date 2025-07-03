@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <h2>Create New Task</h2>
        <form action="{{ route('task.insert') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label><br>
                <input class="form-control" type="text" name="title" value="{{ old('title') }}" id="title">
            </div>

            <div class="form-group">
                <label for="description">Description</label><br>
                <input class="form-control" type="text" name="description" value="{{ old('description') }}" id="description">
            </div>

            <div class="form-group">
                <label for="status">Status</label><br>
                <select class="form-control" name="status" id="status">
                    <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date">Date</label><br>
                <input class="form-control" type="date" name="date" value="{{ old('date') }}" id="date">
            </div>

            <div class="form-group">
                <label for="priority">Priority</label><br>
                <select class="form-control" name="priority" id="priority">
                    <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                    <option value="medium" {{ old('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
                </select>
            </div>

            <br>
            <button class="btn btn-success" type="submit">Create Task</button>
        </form>
    </div>
@endsection
