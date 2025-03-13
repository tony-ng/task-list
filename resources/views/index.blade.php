@extends('layouts.app')

@section('title')
    <h1 class="mb-8 text-3xl font-bold">Welcome to Task list Program</h1>
@endsection

@section('content')
    <nav class="mb-8">
        <a href="{{ route('tasks.create') }}" class="link">Add Task</a>
    </nav>

    @if (count($tasks))
        @foreach ($tasks as $task)
            <p class="mb-4"><a href="{{route('tasks.show', ['task'=>$task->id])}}" @class(['text-xl', 'text-gray-700', 'line-through' => $task->completed])>{{$task->title}}</a></p>
        @endforeach

        <nav class="mt-8">
            {{ $tasks->links() }}
        </nav>
    @else
        <p>There is no task!</p>
    @endif
@endsection
