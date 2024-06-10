 <!-- Footer Section -->
 <footer>
     <div class="container">
         <div class="row">
             <!-- About Us Section -->
             <div class="col-md-4">
                 <h5>Thông tin liên hệ</h5>
                 <p>Điện thoại: 039 913 1006</p>
                 <p>Email: kingclothes@gmail.com</p>
             </div>
             <!-- Quick Links Section -->
             <div class="col-md-4">
                 <h5>Danh mục</h5>
                 <ul class="list-unstyled footer-links">
                     <li><a href="#">Trang chủ</a></li>
                     <li><a href="#">Giới thiệu</a></li>
                     <li><a href="#">Liên hệ</a></li>
                     <li><a href="#">Sản phẩm</a></li>
                 </ul>
             </div>
             <!-- Contact Us Section -->
             <div class="col-md-4">
                 <h5>Hệ thống cửa hàng</h5>
                 <p>Cửa hàng 1: 13 Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                 <p>Cừa hàng 2: 63 Đông Các, Đống Đa, Hà Nội</p>
                 <!-- Social Icons -->
                 <div class="social-icons">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
                 </div>
             </div>
         </div>
         <div class="text-center mt-4">
            <hr>
             <span>Copyright 2024 © King Clothes</span>
         </div>
     </div>
 </footer>

 <script>
     document.addEventListener("DOMContentLoaded", function() {
         var buttons = document.querySelectorAll(".add-to-cart-btn");

         buttons.forEach(function(button) {
             button.addEventListener("mouseover", function() {
                 this.style.backgroundColor = "#0056b3";
             });

             button.addEventListener("mouseout", function() {
                 this.style.backgroundColor = "#007bff";
             });
         });
     });
 </script>
 <!-- Bootstrap JS and dependencies -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>

 </html>