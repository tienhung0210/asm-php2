<?php
include "src/Views/Client/layout/header.php";
?>

<div class="container mt-3">
    @if (!empty($_SESSION['error']))
    <div class="alert alert-warning">
        {{ $_SESSION['error'] }}
    </div>

    @php
    unset($_SESSION['error']);
    @endphp
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Đăng nhập</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('handle-login') }}" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" placeholder="Nhập email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ url('dangki') }}">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php
include "src/Views/Client/layout/footer.php";
?>