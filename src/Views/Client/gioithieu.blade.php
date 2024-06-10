<?php
// C:\laragon\www\Test\src\Views\Client\layout\header.php
include "src/Views/Client/layout/header.php";
?>
 <style>
   .jumbotron {
    background-color: #f8f9fa; /* Màu nền */
  }
  .jumbotron-img {
    max-width: 100%;
  } 
  .jumbotron-img {
    transition: filter 0.3s ease-in-out;
  }
  .jumbotron-img:hover {
    filter: brightness(60%); 
  }
  </style>
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4 text-primary">Chào mừng bạn đến với King Clothes!</h1>
    <span class="lead">Nơi thăng hoa phong cách và sự tự tin!</span>
    <hr class="my-4">
    <span>Tại King Clothes, chúng tôi cam kết mang đến cho bạn những bộ trang phục đẹp và chất lượng hàng đầu từ các thương hiệu uy tín trên toàn thế giới. Từ những bộ đồ công sở thanh lịch, những trang phục dạo phố cá tính đến những trang phục dành cho các buổi tiệc đặc biệt, chúng tôi có đủ mọi thứ để bạn có thể tự tin thể hiện phong cách riêng của mình.</span>
    <span>Ngoài ra, dịch vụ chăm sóc khách hàng tận tình và chu đáo là ưu tiên hàng đầu của chúng tôi. Chúng tôi luôn sẵn lòng lắng nghe và đáp ứng mọi nhu cầu của bạn để đảm bảo bạn có trải nghiệm mua sắm tuyệt vời nhất tại King Clothes.</span>
    <span class="lead">
      <br>
      <a class="btn btn-primary btn-lg" href="http://localhost/Test/" role="button">Khám phá ngay</a>
    </span>
  </div>
</div>
<div class="container">
  <div class="row">
  <div class="col-md-6">
  <img src="https://th.bing.com/th/id/R.e239e0b465c70a5695c72ad07bbab614?rik=8lnQWG5UvRA5Pg&pid=ImgRaw&r=0" alt="Welcome Image" class="jumbotron-img">
</div>
    <div class="col-md-6">
      <div class="jumbotron">
        <h1 class="display-4 text-primary">King Clothes!</h1>
        <hr class="my-4">
    <span class="lead">Nơi bạn có thể tìm thấy những bộ trang phục đẹp và chất lượng hàng đầu từ các thương hiệu uy tín trên toàn thế giới.</span>
    <span>Từ những bộ đồ công sở thanh lịch, những trang phục dạo phố cá tính đến những trang phục dành cho các buổi tiệc đặc biệt, chúng tôi có đủ mọi thứ để bạn có thể tự tin thể hiện phong cách riêng của mình.</span>
    <span>Ngoài ra, dịch vụ chăm sóc khách hàng tận tình và chu đáo là ưu tiên hàng đầu của chúng tôi. Chúng tôi luôn sẵn lòng lắng nghe và đáp ứng mọi nhu cầu của bạn để đảm bảo bạn có trải nghiệm mua sắm tuyệt vời nhất tại cửa hàng của chúng tôi.</span>      </div>
    </div>
  </div>
</div>

<br>
<?php 
include "src/Views/Client/layout/footer.php";
?>
