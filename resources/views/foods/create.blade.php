@extends('layouts.app')
 @section('content')
 <h1>This is create foods add in layout</h1>
 <div class="container">
    <label for="form">Them mon an</label>
    <form action="/foods" method="post" name="form">
        @csrf
        <input type="text" class="form-control" name="name" placeholder="Enter your name">
        <input type="text" class="form-control" name="sl" placeholder="Enter sl">
        <input type="text" class="form-control" name="description" placeholder="Enter des">
        <input class="button btn-primary" type="submit" value="submit">
     </form>
 </div>



 @endsection
  
