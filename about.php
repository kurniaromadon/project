<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Di Bookly, kami adalah pecinta buku yang berkomitmen untuk menyediakan akses mudah dan pengalaman berbelanja yang menyenangkan bagi semua pencinta literatur. Dengan staf yang ramah dan pengetahuan yang luas tentang berbagai genre, kami siap membantu Anda menemukan buku yang sesuai dengan minat dan kebutuhan Anda. Sambut kami sebagai mitra dalam perjalanan Anda menuju penemuan baru di dunia literatur di Bookly!</p>
         <p>Kami di Bookly tidak hanya sekadar toko buku, tetapi juga wadah untuk komunitas pembaca yang berbagi hasrat akan literatur. Dengan semangat berbagi pengetahuan dan kecintaan akan membaca, kami mengundang Anda untuk bergabung dalam petualangan bersama kami, mengeksplorasi cerita-cerita yang menginspirasi dan memperkaya pikiran. Bersama, mari kita bangun dan perluas dunia literasi, membawa kegembiraan membaca ke setiap rumah dan hati di Bookly!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>Pengalaman berbelanja di Bookly sungguh luar biasa! Koleksi bukunya sangat lengkap dan stafnya sangat membantu dalam membimbing saya menemukan buku yang saya cari. Akan kembali belanja di sini lagi.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Arzan</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.JPG" alt="">
         <p>Saya sangat terkesan dengan pelayanan pelanggan yang cepat dan ramah di Bookly. Mereka tidak hanya menyediakan buku-buku terbaru, tetapi juga memberikan saran-saran yang sangat berguna. Terima kasih.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Furqan</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpg" alt="">
         <p>Tempat yang fantastis untuk pencinta buku! Saya menemukan banyak buku langka dan edisi terbatas di Bookly. Proses pembelian online pun sangat mudah dan cepat. Sukses terus untuk timnya.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Azam</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.JPG" alt="">
         <p>Saya sangat senang menemukan Bookly - tempat yang sempurna untuk mengeksplorasi genre baru dan menemukan penulis favorit. Layanan pelanggan mereka sungguh luar biasa, responsif dan informatif.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Radeva</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.JPG" alt="">
         <p>Pengiriman cepat dan buku-buku dalam kondisi prima. Saya selalu mempercayai Bookly untuk memenuhi kebutuhan literatur saya. Mereka benar-benar memahami kebutuhan para pembaca.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nahiyan</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.JPG" alt="">
         <p>Ketika saya mencari buku langka, Bookly adalah tempat yang paling saya andalkan. Stafnya selalu bersedia membantu dan memberikan saran yang berharga. Saya merekomendasikan mereka kepada semua pencinta buku.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nadeo</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.JPG" alt="">
         <div class="share">
            <a href="https://www.facebook.com/kurniaramadhan393" class="fab fa-facebook-f"></a>
            <a href="https://github.com/kurniaromadon" class="fab fa-github"></a>
            <a href="https://instagram.com/yuongdhan" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/kurnia-romadon-865658279/" class="fab fa-linkedin"></a>
         </div>
         <h3>Kurnia</h3>
      </div>

      <div class="box">
         <img src="images/author-2.JPG" alt="">
         <div class="share">
            <a href="https://www.facebook.com/kurniaramadhan393" class="fab fa-facebook-f"></a>
            <a href="https://github.com/kurniaromadon" class="fab fa-github"></a>
            <a href="https://instagram.com/yuongdhan" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/kurnia-romadon-865658279/" class="fab fa-linkedin"></a>
         </div>
         <h3>Romadon</h3>
      </div>

      <div class="box">
         <img src="images/author-3.JPG" alt="">
         <div class="share">
            <a href="https://www.facebook.com/kurniaramadhan393" class="fab fa-facebook-f"></a>
            <a href="https://github.com/kurniaromadon" class="fab fa-github"></a>
            <a href="https://instagram.com/yuongdhan" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/kurnia-romadon-865658279/" class="fab fa-linkedin"></a>
         </div>
         <h3>Kurnia Romadon</h3>
      </div>

      <div class="box">
         <img src="images/author-4.JPG" alt="">
         <div class="share">
            <a href="https://www.facebook.com/kurniaramadhan393" class="fab fa-facebook-f"></a>
            <a href="https://github.com/kurniaromadon" class="fab fa-github"></a>
            <a href="https://instagram.com/yuongdhan" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/kurnia-romadon-865658279/" class="fab fa-linkedin"></a>
         </div>
         <h3>Yuong</h3>
      </div>

      <div class="box">
         <img src="images/author-5.JPG" alt="">
         <div class="share">
            <a href="https://www.facebook.com/kurniaramadhan393" class="fab fa-facebook-f"></a>
            <a href="https://github.com/kurniaromadon" class="fab fa-github"></a>
            <a href="https://instagram.com/yuongdhan" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/kurnia-romadon-865658279/" class="fab fa-linkedin"></a>
         </div>
         <h3>Dhan</h3>
      </div>

      <div class="box">
         <img src="images/author-6.JPG" alt="">
         <div class="share">
            <a href="https://www.facebook.com/kurniaramadhan393" class="fab fa-facebook-f"></a>
            <a href="https://github.com/kurniaromadon" class="fab fa-github"></a>
            <a href="https://instagram.com/yuongdhan" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/kurnia-romadon-865658279/" class="fab fa-linkedin"></a>
         </div>
         <h3>Yuongdhan</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>