@extends('layouts.todoitem')

@section('main')
    <h1 class="font-thin text-4xl">List</h1>
    <a href="{{route('todoitems.create')}}">Add new</a>
@endsection
