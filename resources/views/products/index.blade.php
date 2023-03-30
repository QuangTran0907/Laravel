@extends('layouts.app')
 @section('content')
 <h1 class="h3 mb-2 text-gray-800">Thông tin cá nhân </h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    
    <div class="all" style="padding-top: 20px ; padding-left: 20px">
        <a href="products/create" class="btn btn-warning btn-icon-split" >
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Thêm mới sản phẩm</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               
                <thead>

                    
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Màu sắc</th>
                        <th>Ảnh </th>
                        <th>Giá</th>
                        <th>Hãng</th>
                        <th>Năm ra mắt</th>
                        <th>Hành động</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Màu sắc</th>
                        <th>Ảnh </th>
                        <th>Giá</th>
                        <th>Hãng</th>
                        <th>Năm ra mắt</th>
                        <th>Hành động</th>

                </tfoot>
                <tbody>
                    @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->color }}</td>
                        <td>{{ $item->image_path }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->brand_id }}</td>
                        <td>{{ $item->release_year }}</td>
                        <td>
                            
                            <form action="products/{{ $item->id }}"method ="post">
                                @csrf
                                @method('delete')
                                <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Message?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Bạn có muốn xóa không.</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Thoát</button>
                                            <button class="btn btn-primary" type="submit">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <a href="/products/{{ $item->id }}/edit" class="btn btn-success btn-circle">
                                    <i class="fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-circle" class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $item->id }}">

                                    
                                        <i class="fas fa-trash"></i>
                                
                                    </button>
                            </form> 
                            
                            
                    
                    </td>

                    </tr>
                    @endforeach
       
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
 @endsection
  
