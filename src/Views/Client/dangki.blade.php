<?php
// C:\laragon\www\Test\src\Views\Client\layout\header.php
include "src/Views/Client/layout/header.php";
?>

<style>


    .contai {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        box-sizing: border-box; /* Ensure padding doesn't affect the width */
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    input[type="text"], input[type="email"], input[type="password"], input[type="datetime-local"], input[type="file"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 20px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
<br>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="container p-4 bg-white rounded shadow" style="max-width: 400px;">
        <h2 class="text-center mb-4">Form Đăng Ký</h2>
        <form action="/submit_registration" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" id="avatar" name="avatar" class="form-control-file" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="created_at">Created At</label>
                <input type="datetime-local" id="created_at" name="created_at" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="updated_at">Updated At</label>
                <input type="datetime-local" id="updated_at" name="updated_at" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
        </form>
    </div>
</div>
<br>
<?php 
include "src/Views/Client/layout/footer.php";
?>
