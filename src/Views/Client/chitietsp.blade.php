<?php
// C:\laragon\www\Test\src\Views\Client\layout\header.php
include "src/Views/Client/layout/header.php";
?>
<style>
    .khung-san-pham {
        margin: 50px 100px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .anh-san-pham img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .thong-tin-san-pham {
        width: 500px;
        flex: 1;
        margin-left: 150px;
    }

    .thong-tin-san-pham h2 {
        font-weight: bold;
        font-size: 30px;
        margin-bottom: 10px;
    }

    .thong-tin-san-pham del {
        color: #999;
    }

    .thong-tin-san-pham h4 {
        color: #007bff;
        margin-top: 10px;
    }

    .thong-tin-san-pham span {
        color: #ff0000;
    }

    .thong-tin-san-pham p {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .nut-them-vao-gio-hang {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .nut-them-vao-gio-hang:hover {
        background-color: #0056b3;
    }

    /* Nút "Bình luận" */
    .binhluan {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin: 10px 100px;
    }

    .binhluan:hover {
        background-color: #0056b3;
    }

    /* Form bình luận */
    #form_binhluan {
        margin-top: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        background-color: #f9f9f9;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    #form_binhluan h3 {
        color: black;
        font-size: 20px;
        margin-bottom: 10px;
    }

    #form_binhluan textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    #form_binhluan button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #form_binhluan button:hover {
        background-color: #0056b3;
    }

    .binhluan-table {
        width: 87%;
        margin: 20px 100px;
        border-collapse: collapse;
    }

    .detail-info h3 {
        margin-left: 100px;
    }

    .binhluan-table th,
    .binhluan-table td {
        border: 1px solid #ddd;
        padding: 10px 20px;
    }

    .binhluan-table th {
        background-color: #f2f2f2;
    }

    .binhluan-table tr:hover {
        background-color: #f2f2f2;
    }
  
    .binhluan-table td:first-child {
        width: 30%;
    }

    /* FORM đánh giá  */
    #form_danhgia {
    margin-top: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    background-color: #f9f9f9;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    
    }#form_danhgia button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #form_danhgia button:hover {
        background-color: #0056b3;
    }
    .reviews {
    margin-top: 20px; 
    }
    .review {
        margin-bottom: 20px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
    }
    .review .user {
        font-weight: bold;
    }
    .review .stars {
        margin-top: 5px;
    }
    .review .content {
        margin-top: 5px;
    }
    .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
        text-align: left;
    }
    .rating > span {
        display: inline-block;
        position: relative;
        font-size: 2rem;
        color: #FFD700;
        cursor: pointer;
    }
    .rating > span:hover:before,
    .rating > span:hover ~ span:before {
        content: "\2605";
        position: absolute;
        color: #FFD700;
    }
    .star {
        color: #FFD700;
        font-size: 1.5rem;
    }
    .danhgia {
    margin-top: 20px; 
    margin-left: 100px; 
    margin-right: 100px; 
}

</style>
<div class="container">
    <?php foreach ($item as $key ): ?>
        <div class="khung-san-pham">
            <div class="anh-san-pham">
                <img src="uploads/products/<?php echo htmlspecialchars($key['anh']); ?>" alt="Ảnh sản phẩm" width="300">
            </div>
            <div class="thong-tin-san-pham">
                <h2><?php echo htmlspecialchars($key['ten_san_pham']); ?></h2>
                <del>Giá: đ<?php echo number_format($key['gia']); ?></del>
                <h4>Giá ưu đãi: đ<?php echo number_format($key['gia_ban']); ?></h4>
                <span>Giảm: đ<?php echo number_format($key['gia'] - $key['gia_ban']); ?></span><br>
                <p>Mô tả sản phẩm: <br> <?php echo nl2br(htmlspecialchars($key['mota'])); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>
<!-- <div class="detail-info" style="margin-bottom: 50px;">
    <h3 style="text-decoration: underline;">Bình luận</h3><span><button id="hienthiform" class="binhluan">Gửi bình luận</button></span>
    <?php if ($binhluan && is_array($binhluan)) : ?>
        <table class="binhluan-table">
            <thead>
                <tr>
                    <th>Người bình luận</th>
                    <th>Nội dung</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($binhluan as $comment) : ?>
                    <tr>
                        <td><?= $comment['ten_nguoi_dung'] ?></td>
                        <td><?= $comment['noidung_binhluan'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p style="margin-left: 100px;">Không có bình luận nào cho sản phẩm này.</p>
    <?php endif; ?>
</div>

<div class="binhluan" id="form_binhluan" style="display: none;">
    <form action="" method="post">
        <input type="hidden" name="ngay_dang" value="<?= date('Y-m-d H:i:s') ?>">
        <textarea name="noidung_binhluan" id="noidung" cols="30" rows="5" placeholder="Nhập nội dung bình luận của bạn"></textarea><br>
        <button type="submit" name="gui_binhluan">Gửi</button>
    </form>
</div>

<div class="detail-info">
<h3 style="text-decoration: underline;">Đánh giá</h3>
    <div class="danhgia">

    <?php if ($danhgia && is_array($danhgia)) : ?>
        <div class="reviews">
            <?php foreach ($danhgia as $comment) : ?>
                <div class="review">
                    <div class="user"><?= $comment['ten_nguoi_dung'] ?></div>
                    <div class="stars">
                        <?php 
                            $sao_danh_gia = $comment['sao_danh_gia'];
                            for ($i = 0; $i < $sao_danh_gia; $i++) {
                                echo '<span class="star">&#9733;</span>'; 
                            }
                            for ($i = $sao_danh_gia; $i < 5; $i++) {
                                echo '<span class="star">&#9734;</span>';
                            }
                        ?>
                    </div>
                    <div class="content"><?= $comment['noidung_danhgia'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p>Không có đánh giá nào cho sản phẩm này.</p>
    <?php endif; ?>
    </div>
</div>

<script>
    var formBinhLuan = document.getElementById('form_binhluan');
    var hienthiformButton = document.getElementById('hienthiform');

    hienthiformButton.addEventListener('click', function() {
        // Kiểm tra xem form bình luận đã được hiển thị chưa
        if (formBinhLuan.style.display === 'block') {
            // Nếu đã hiển thị, ẩn form bình luận lại
            formBinhLuan.style.display = 'none';
        } else {
            // Nếu chưa hiển thị, hiển thị form bình luận
            formBinhLuan.style.display = 'block';
        }
    });
</script> -->
<?php 
include "src/Views/Client/layout/footer.php";
?>
