@extends('layouts.admin')
@section('title', 'Thùng rác')
@section('header')
@endsection
@section('content')   
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="text-transform: uppercase;">Thùng rác</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Bảng điều khiển</a></li>
                                <li class="breadcrumb-item active">Thùng rác</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="text-right">
                                    <a class="btn btn-sm btn-info" href="{{ route('user.index') }}">
                                        <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @includeIf('backend.messageAlert', ['some' => 'data'])

                        <table class="table table-bordered" id="dataTable">
                            <table class="table table-bordered" id="myTable">
                                <thead class="bg-orange">
                                    <tr>
                                        <th class="text-center" style="width:20px"><input type="checkbox"></th>
                                        <th class="text-center" style="width:100px">Hình</th>
                                        <th style="width:150px">Tên tài khoản</th>
                                        <th style="width:150px">Email</th>
                                        <th style="width:100px">Phone</th>
                                        <th class="text-center">Ngày tạo</th>
                                        <th style="width:200px" class="text-center">Chức năng</th>
                                        <th class="text-center" style="width:20px">ID</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($list as $row)
                                <tr>
                                    <td class="text-center" style="width:20px">
                                        <input type="checkbox">
                                    </td>
                                    <td class="index-img">
                                        <img src="../public/images/user/{{ $row->image }}" class="card-img-top index-img" alt="{{ $row->image }}">
                                    </td>
                                    <td>
                                        {{ $row->name }}
                                    </td>
                                    <td>
                                        {{ $row->email }}
                                    </td>
                                    <td>
                                        {{ $row->phone }}
                                    </td>

                                    <td class="text-center">
                                        {{ $row->created_at }}
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-info" href="{{ route('user.show',['user'=>$row->id]) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('user.restore',['user'=>$row->id]) }}">
                                            <i class="fas fa-undo-alt"></i>
                                        </a>                                
                                        <form action="{{ route('user.destroy',['user'=>$row->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center" style="width:20px">
                                        {{ $row->id }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
        </div>
@endsection
@section('footer')

@endsection
