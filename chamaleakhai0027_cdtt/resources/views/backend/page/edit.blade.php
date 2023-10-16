@extends('layouts.admin')
@section('title', 'Cập Nhật')
@section('content')
<form action="{{ route('page.update',['menu'=> $menu->id]) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cập nhật trang đơn</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item active">Cập nhật trang đơn</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input name="name" id="name" type="text" class="form-control" value="{{ $menu->name }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea name="description" id="description" class="form-control" rows="4">{{ $menu->description }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Giá</label>
                            <input name="price" id="price" type="text" class="form-control" value="{{ $menu->price }}">
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
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection