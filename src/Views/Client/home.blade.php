<?php
include "src/Views/Client/layout/header.php";
?>

<div>
    <img src="src/Views/Client/img/baner1.jpg" alt="" width="100%" height="500">
</div>
<div class="text-center">
    <br>
    <h1>🌟Sản phẩm Sale🌟</h1> <br>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($sanphams as $item) { ?>
            <div class="col-md-4">
                <div class="product-card">
                    <a href="src/Views/Client/&id=<?php echo $item['id_san_pham']; ?>"><img class="product-image" src="src/Views/Client/img/products/<?= $item['anh'] ?>" alt="Product 1"></a>
                    <div class="product-details">
                        <div class="product-name"><?= $item['ten_san_pham'] ?></div>
                        <del>
                            <div class="product-price">Giá: đ<?= number_format($item['gia']) ?></div>
                        </del>
                        <div class="product-sale-price">Giá ưu đãi: đ<?= number_format($item['gia_ban']) ?></div>
                        <div class="sale-price">Tiết kiệm: đ<?php echo number_format($item['gia'] - $item['gia_ban']) ?></div>
                        <a href="{{ url('chitietsp/' . $item['id_san_pham'] ) }}"><button class="btn btn-info">Xem Chi Tiết</button></a>
                    </div>
                </div>
            </div>
        <?php }; ?>
    </div>
</div>

<?php
include "src/Views/Client/layout/footer.php";
?>