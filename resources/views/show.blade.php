@extends('layouts.app')

@section(section: 'title')
    <nav class="mb-8">
        <a href="{{ route('tasks.index') }}" class="link">Back to Task List</a>
    </nav>

    <h1 class="mb-8 text-2xl font-bold">{{$task->title}}</h1>
@endsection

@section('content')
    <p class="mb-4 text-lg text-gray-700">{{$task->description}}</p>
    
    @if ($task->long_description)
        <p class="mb-4 text-lg text-gray-700">{{$task->long_description}}</p>
    @endif

    <p class="mb-4">
        @if ($task->completed)
            <span class="text-base text-green-700">Completed</span>
        @else
            <span class="text-base text-red-700">Not Completed</span>
        @endif
    </p>

    <p class="mb-4 text-sm text-gray-500">{{$task->created_at->diffForHumans()}} | {{$task->updated_at->diffForHumans()}}</p>

    <div class="flex gap-2">
        <a class="btn" href="{{ route('tasks.edit', ['task' => $task]) }}">Edit</a>
        
        <form method="post" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
            @csrf
            @method('put')
            <button type="submit" class="btn">{{ $task->completed? 'Not Completed' : 'Completed' }}</button>
        </form>
        
        <form method="post" action="{{ route('tasks.destroy', ['task' => $task]) }}">
            @csrf
            @method('delete')
            <button type="submit" class="btn">Delete</button>
        </form>
    </div>
@endsection
