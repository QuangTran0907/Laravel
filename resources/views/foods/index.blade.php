@extends('layouts.app')
 @section('content')
 <h1>This is index foods add in layout</h1>
 @foreach ($foods as $item)
     <h4>{{ $item->id }}</h4>
     <h4>{{ $item->name }}</h4>
    <a href="foods/create"><button type="button">Create </button></a>

    <form action="foods/{{ $item->id }}/edit">
        <button type="submit">Edit</button>
    </form>
    <form action="foods/{{ $item->id }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
    <br>
    <br>
    <br>

 @endforeach
 @endsection
  
