@extends('layouts.app')
 @section('content')
 <h1>This is index posts add in layout</h1>
 @foreach ($foods as $item)
     <h4>{{ $item->name }}</h4>
 @endforeach

 @endsection
  
