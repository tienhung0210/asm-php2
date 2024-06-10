@extends('layouts.master')

@section('title')
    Thêm mới người dùng
@endsection

@section('content')
    <h1>Thêm mới người dùng</h1>

    @if (!empty($_SESSION['errors']))
        <div class="alert alert-warning">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            @php
                unset($_SESSION['errors']);
            @endphp
        </div>
    @endif

    <form action="{{ url('admin/users/store') }}" enctype="multipart/form-data" method="POST">
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Họ tên:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3 mt-3">
            <label for="avatar" class="form-label">Image:</label>
            <input type="file" class="form-control" id="avatar" name="avatar">
        </div>
        <div class="mb-3 mt-3">
            <label for="password" class="form-label">Mật khẩu:</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 mt-3">
            <label for="password" class="form-label">Nhập lại mật khẩu:</label>
            <input type="text" class="form-control" id="confirm_password" name="confirm_password">
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
@endsection