@extends('layouts.app')
 @section('content')
 <h1 class="h3 mb-2 text-gray-800">Thêm sản phẩm</h1>
 <form action="/products/save_media/{{ $product->id }}" method="post"
      enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <div class="col-sm-7">

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label>
        <div class="col-sm-9">
          <input type="" name="name" value="{{ $product->name }}" class="form-control" id="inputEmail3" placeholder="">
        </div>
      </div>
    
 
     
      

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Chọn ảnh</label>
        <div class="col-sm-9">
          <div class="mb-3">
            <input class="form-control" name="image1" type="file" id="formFileMultiple" multiple>
          </div>
        </div>
        
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Chọn ảnh</label>
        <div class="col-sm-9">
          <div class="mb-3">
            <input class="form-control" name="image2" type="file" id="formFileMultiple" multiple>
          </div>
        </div>
        
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Chọn ảnh</label>
        <div class="col-sm-9">
          <div class="mb-3">
            <input class="form-control" name="image3" type="file" id="formFileMultiple" multiple>
          </div>
        </div>
        
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Chọn ảnh</label>
        <div class="col-sm-9">
          <div class="mb-3">
            <input class="form-control" name="image4" type="file" id="formFileMultiple" multiple>
          </div>
        </div>
        
      </div>
    
      
    
     
     
    

    </div>
 
    
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Thêm mới</button>
    </div>
  </div>
</form>



 @endsection
  
