@extends('layouts.todoitem')

@section('main')
    <h1 class="font-thin text-4xl">Add new todo</h1>

    <form action="{{route('todoitems.store')}}" method="post">
        @csrf
        <div class="field my-2">
            <label for="">Title</label>
            <input type="text" name="title" class="border border-gray-300 left-2">
        </div>
        <div class="field my-2">
            <label for="">Detail</label>
            <textarea name="content" cols="30" rows="10" class="border border-gray-300 p-2"></textarea>
        </div>
        <div class="actions">
            <button type="submit" class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300">Submit</button>
        </div>
    </form>
@endsection
