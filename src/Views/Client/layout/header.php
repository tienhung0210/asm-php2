<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Clothes</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #ffffff;
            /* Dark gray background */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            padding: 10px 0;
        }

        .navbar-nav {
            flex-direction: row;
        }

        .nav-link {
            padding-right: 15px;
            padding-left: 15px;
            color: #282c34;
            /* White color for better contrast */
            font-weight: bold;
        }

        .nav-link:hover {
            color: #61dafb;
            /* Light blue color on hover */
        }

        .navbar-brand {
            display: flex;
            justify-content: center;
            width: 100%;
            position: absolute;
            left: 0;
            right: 0;
            text-align: center;
        }

        .navbar-brand img {
            max-height: 50px;
        }

        h5{
            color: #FFA52F;
        }
        
        p:hover{
            padding-left: 8px;
        }

        footer {
            border-top: 3px solid #E3E6F3;
            padding: 40px 0;
            height: 200px;
            clear: both;
        }

        .footer-links a {
            color: black;
            text-decoration: none;
        }

        .footer-links a:hover {
            padding-left: 8px;
        }

        .social-icons a {
            color: #adb5bd;
            margin-right: 15px;
        }

        .social-icons a:hover {
            color: #FFA52F;
        }

        .aa {
            text-align: center;
            color: #61dafb;
            /* Match hover color */
        }

        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 15px;
            overflow: hidden;
            text-align: center;
            transition: box-shadow 0.3s ease;
        }

        .product-card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            max-width: 100%;
            border-bottom: 1px solid #ddd;
        }

        .product-details {
            padding: 15px;
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .product-price,
        .product-sale-price,
        .sale-price {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .product-price {
            color: #999;
            text-decoration: line-through;
        }

        .product-sale-price {
            color: #e74c3c;
            font-weight: bold;
        }

        .sale-price {
            color: #27ae60;
            font-weight: bold;
        }

        .add-to-cart-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .add-to-cart-btn:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <a href="http://localhost/Test/" class="nav-link aa">King Clothes</a>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Test/">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Test/gioithieu">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Test/lienhe">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Test/sanpham">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Test/login"><i class="fas fa-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>