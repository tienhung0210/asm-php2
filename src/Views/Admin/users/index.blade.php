@extends('layouts.master')

@section('title')
Danh sách User
@endsection

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-primary">
            Danh sách User
        </h2>
    </div>

    <a class="btn btn-primary" href="{{ url('admin/users/create') }}">Thêm mới</a>

    @if (isset($_SESSION['status']) && $_SESSION['status'])
    <div class="alert alert-success">
        {{ $_SESSION['msg'] }}
    </div>

    @php
    unset($_SESSION['status']);
    unset($_SESSION['msg']);
    @endphp
    @endif

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>TYPE</th>
                        <th>CREATED AT</th>
                        <th>UPDATED AT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>
                            <img src="{{ asset($user['avatar']) }}" alt="" width="100px">
                        </td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>
                            {!! $user['type'] == 'admin'
                            ? '<span class="badge bg-primary">admin</span>'
                            : '<span class="badge bg-warning">member</span>' !!}
                        </td>
                        <td>{{ $user['created_at'] }}</td>
                        <td>{{ $user['updated_at'] }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ url('admin/users/' . $user['id'] . '/show') }}">Xem</a>
                            <a class="btn btn-warning" href="{{ url('admin/users/' . $user['id'] . '/edit') }}">Sửa</a>
                            <a class="btn btn-danger" href="{{ url('admin/users/' . $user['id'] . '/delete') }}" onclick="return confirm('Chắc chắn xóa không?')">Xóa</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection