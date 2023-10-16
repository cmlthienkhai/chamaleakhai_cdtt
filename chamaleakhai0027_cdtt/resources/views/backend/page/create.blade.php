@extends('layouts.admin')
@section('title', 'Thêm')
@section('content')
<form action="{{ route('page.store') }}" method="post" enctype="multipart/form-data">
  @csrf
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm trang đơn</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm trang đơn</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                <div class="card-body">
                    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input name="name" id="name" type="text" class="form-control" placeholder="Tên">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Mô tả"></textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Giá</label>
                            <input name="price" id="price" type="text" class="form-control" placeholder="Giá">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh</label>
                            <input name="image" id="image" type="file" class="form-control">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                        <div>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection