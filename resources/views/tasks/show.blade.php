@extends('layouts.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header text-center">Task Page</div>
        <div class="card-body">
        <div class="card-body">
        <h5 class="card-text">title : {{ $tasks->title }}</h5>
        <h5 class="card-text">description : {{ $tasks->description }}</h5>
        <h5 class="card-text">status : {{ $tasks->status }}</h5>
        <h5 class="card-text">date : {{ $tasks->date }}</h5>
        <h5 class="card-text">priority : {{ $tasks->priority }}</h5>
        </div>
    </hr>
    </div>
</div>
@endsection