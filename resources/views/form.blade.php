@extends('layouts.app')

@section('title')
    <h1 class="mb-8 text-2xl font-bold">
    @isset($task)
        Edit Task
    @else    
        Input a new task
    @endisset
    </h1>
@endsection

@section('content')
    <form method="post" action="{{isset($task)? route('tasks.update', ['task' => $task->id]) : route('tasks.store')}}">
        @csrf
        @isset($task)
            @method('put')
        @endisset
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" @class(['border-red-700' => $errors->has('title')])/>
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5" @class(['border-red-700' => $errors->has('description')])>{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10" @class(['border-red-700' => $errors->has('long_description')])>{{ isset($task)? $task->long_description : old('long_description') }}</textarea>
            @error('long_description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex gap-2 items-center">
            <button type="submit" class="btn">
                @isset($task)
                Edit task
                @else    
                Save Task
                @endisset
            </button>
            @isset($task)
                <a href="{{ route('tasks.show', ['task' => $task]) }}" class="link">Cancel</a>
            @else
                <a href="{{ route('tasks.index') }}" class="link">Cancel</a>
            @endisset
        </div>
    </form>
@endsection