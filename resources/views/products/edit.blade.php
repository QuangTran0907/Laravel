@extends('layouts.app')
 @section('content')
 <h1 class="h3 mb-2 text-gray-800">Sửa sản phẩm</h1>

 <form action="/products/{{ $product->id }}" method="post"
      enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group row">
    <div class="col-sm-7">

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label>
        <div class="col-sm-9">
          <input type="" value="{{ $product->name }}" name="name" class="form-control" id="inputEmail3" placeholder="">
        </div>
      </div>
    
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Hãng</label>
        <div class="col-sm-9">
          <select name="brand_id" class="custom-select ">
            <option selected value="{{ $product->id }}">Chọn hãng</option>
            @foreach ($brands as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
           
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Giá</label>
        <div class="col-sm-9">
          <input type=""  value="{{ $product->price }}" name="price" class="form-control" id="inputEmail3" placeholder="">
        </div>
        
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Mô tả</label>
        <div class="col-sm-9">
          <textarea class="form-control" id="exampleFormControlTextarea1"  name="description" rows="3"> {{ $product->description }}</textarea>
        </div>
        
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Chọn ảnh</label>
        <div class="col-sm-9">
          <div class="mb-3">
            <input class="form-control" name="image"  value="{{ $product->image_path }}" type="file" id="formFileMultiple" multiple>
          </div>
        </div>
        
      </div>
    
      
    
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Năm phát hành</label>
        <div class="col-sm-4">
          <input type="text" name="release_year"  value="{{ $product->release_year }}" class="form-control" name="datepicker" id="datepicker" />
        </div>
    
        <label for="inputEmail3" class="col-sm-1 col-form-label">Size</label>
        <div class="col-sm-4">
    
          <select name="size" class="custom-select ">
            <option selected>Chọn size</option>
            @foreach ($sizes as $item)
            <option value="{{ $item->id }}">{{ $item->size }}</option>
            @endforeach
           
          </select>
      </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Màu sắc</legend>
          <div class="col-sm-10">
            <div class="form-check ">
              <input class="form-check-input" type="radio" name="color" id="color" value="red" checked>
              <label class="form-check-label" for="color">
                First radio
              </label>
            </div>
          </div>
    
          
        </div>
      </fieldset>
    

    </div>
    <div class="col-sm-5">
      <div class="promotion-image-container">
        <img src="{{ asset('images/' . $product->image_path) }}" class="img-thumbnail">
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
  
