@extends('layouts.admin')
@section('title', 'Trang đơn')
@section('content')
<form action="{{ route('page.store') }}" method="POST">
    @csrf
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tất cả trang đơn</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Tất cả trang đơn</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-sm btn-danger" type="submit" name="DELETE_ALL">
                            <i class="fas fa-trash"></i> Xóa đã chọn
                        </button>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="text-right">
                            <a class="btn btn-sm btn-success" href="{{ route('brand.create') }}">
                                <i class="fas fa-plus"></i> Thêm
                            </a>
                            <a class="btn btn-sm btn-danger" href="{{ route('brand.trash') }}">
                                <i class="fas fa-trash"></i> Thùng rác
                            </a>
                        </div>
                    </div>
                </div>
              </div>
            <div class="card-body">
                @includeIf('backend.messageAlert', ['some' => 'data']) 
                <table class="table table-bordered" id="myTable">                    
                    <thead class="bg-orange">
                        <tr>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Hình ảnh</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->description }}</td>
                                <td>{{ $row->price }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $row->image) }}" alt="{{ $row->name }}" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('page.edit', $row->id) }}" class="btn btn-sm btn-primary">Chỉnh sửa</a>
                                    <form action="{{ route('row.destroy', $row->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>@endsection