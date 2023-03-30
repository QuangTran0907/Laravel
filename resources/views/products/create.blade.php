@extends('layouts.app')
 @section('content')
 <h1 class="h3 mb-2 text-gray-800">Thêm sản phẩm</h1>
 <form action="/products" method="post"
      enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <div class="col-sm-7">

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label>
        <div class="col-sm-9">
          <input type="" name="name" class="form-control" id="inputEmail3" placeholder="">
        </div>
      </div>
    
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Hãng</label>
        <div class="col-sm-9">
          <select name="brand_id" class="custom-select ">
            <option selected>Chọn hãng</option>
            @foreach ($brands as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
           
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Giá</label>
        <div class="col-sm-9">
          <input type="" name="price" class="form-control" id="inputEmail3" placeholder="">
        </div>
        
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Mô tả</label>
        <div class="col-sm-9">
          <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>
        
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Chọn ảnh</label>
        <div class="col-sm-9">
          <div class="mb-3">
            <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
          </div>
        </div>
        
      </div>
    
      
    
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Năm phát hành</label>
        <div class="col-sm-4">
          <input type="text" name="release_year" class="form-control" name="datepicker" id="datepicker" />
        </div>
    
        
      </div>
     
      <div class="form-group row">
        <div class="col-sm-2">Checkbox</div>
        <div class="col-sm-10">
          @foreach ($sizes as $item)
          
          <div class="form-group row">
            <div class="form-check col-sm-3">
            
              <div class="col-sm-10">
                <input name="{{ $item->id }}" class="form-check-input" type="checkbox" onclick="onCheck{{ $item->id }}()" id="gridCheck{{ $item->id }}">
                <label class="form-check-label" for="gridCheck1">
                  {{ $item->size."------:" }}       
                </label>            </div>
            </div>
            

            <div class="col-sm-4" id="demo{{ $item->id }}">
            </div>
          </div>
          <script>
            function onCheck{{ $item->id }}()
            {
              var flag = document.getElementById("gridCheck{{ $item->id }}").checked;
              if(flag==true)
              {
                document.getElementById("demo{{ $item->id }}").innerHTML = '<input type="text" name="{{ $item->id."SL" }}" class="form-control"  id="datepicker" />';

              }else
              {
                document.getElementById("demo{{ $item->id }}").innerHTML = '';
              }
            }
              
          </script>

          
          @endforeach

        </div>
      </div>
    

    </div>
    <div class="col-sm-5">
      <div class="promotion-image-container">
        <img src="https://via.placeholder.com/300x200" class="img-thumbnail">
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
  
