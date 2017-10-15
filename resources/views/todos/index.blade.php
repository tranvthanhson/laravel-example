@extends('layouts.master')

@section('master.css')
<style>
    h1 {
        font-size: 40px;
        font-family: Roboto;
        font-weight: 700;
        color: #333;
    }
</style>
@endsection

@section('master.content')

<h1>Hello World! Welcome to my homepage</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('todos.store') }}" method="POST" accept-charset="utf-8">
    {{ csrf_field() }}
    <input type="text" name="content">
    <input type="checkbox" name="is_completed">
    <button type="submit">SAVE</button>
</form>

<ul>
    @foreach ($todos as $todo)
        <li>{{ $todo->content }}</li>
    @endforeach
</ul>

@endsection
