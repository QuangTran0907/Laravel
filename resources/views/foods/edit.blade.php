@extends('layouts.app')
 @section('content')
 
 <h1>Update the food</h1>
 <div class="container">
    <label for="form">Them mon an</label>
    <form action="/foods/{{ $food->id }}" method="post" name="form">
       
        @csrf
        @method('PUT')
        <input type="text" class="form-control" name="name" value="{{ $food->name }}" placeholder="Enter your name">
        <input type="text" class="form-control" name="sl" value="{{ $food->sl }}" placeholder="Enter sl">
        <input type="text" class="form-control" name="description" value="{{ $food->description }}" placeholder="Enter des">
        <select name="category_id" id="cars">
            @foreach ($categories as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
            
            
          </select>

        <input class="button btn-primary" type="submit" value="submit">
     </form>
 </div>



 @endsection
  
