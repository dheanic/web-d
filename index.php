<?php
require 'controller.php';
if (isset($_POST["submit"])) {
    if (insert($_POST) > 0) {
        echo "<script> 
        alert ('Hore! Thank you for sending feedback!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "<script> 
        alert ('Yah, data gagal ditambahkan :(');
        document.location.href = 'index.php';
        </script>
    ";}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JaDe</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/app.css">
  </head>
  <body id="top">

    <!-- Navbar -->
    <nav class="navbar py-3 navbar-expand-lg navbar-dark bg-dark" data-aos="fade-down" data-aos-delay="400">
        <div class="container">
            <h4><a href="tolen">Tolen</a></h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav ms-auto">
    
    
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRODUCT</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="#">REVIEWS</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Best seller</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi</a>
                    </li>
    
                    <a href="#" class="btn btn-primary ms-lg-3">Ayo Dilihat</a>
    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section id="PRODUCT" class="min-vh-100 d-grid align-content-center py-5">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row gy-4 align-items-center">
                
                <!-- Col -->
                <div class="col-lg-5" data-aos="fade-down" data-aos-delay="400">
                    <img src="./assets/images/foto1.jpg" class="img-fluid" alt="">
                </div>

                <!-- Col -->
                <div class="col-lg-7 px-lg-5" data-aos="fade-down" data-aos-delay="500">
                    <h1 class="h3">JaDe 
                    </h1>
                    <p class="mt-3 mb-4">Menampilkan gaya yang elegan dan profesional, jas kami adalah pilihan terbaik untuk acara penting dan momen istimewa. Dibuat dengan teliti menggunakan bahan berkualitas tinggi, jas kami memberikan kenyamanan dan kepercayaan diri yang tak tertandingi.</p>
                    <div>
                        <a href="#" class="btn mx-2 btn-primary">order now</a>
                        <a href="#" class="btn mx-2 btn-secondary">Contact us</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

 
    <section id="product" class="py-5 bg-2">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row align-items-center mb-3" data-aos="fade-down" data-aos-delay="400">

                <!-- Col -->
                <div class="col-md-8">
                    <h6 class="text-primary">NEW PRODUCT</h6>
                    <h2 class="h3">Our Latest Produk</h2>
                    <p>Segera dapatkan jas impian Anda dan buatlah kesan yang tak terlupakan!</p>
                </div>

                <!-- Col -->
                <div class="col-md-4 text-md-end">
                    <a href="#" class="btn btn-primary">Explore More</a>
                </div>

            </div>

            <!-- Slider -->
            <div class="swiper mySwiper pb-5">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide" data-aos="fade-down" data-aos-delay="400">
                         <div class="project p-4 border-custom">
                            <img src="./assets/images/foto7.jpeg" class="img-fluid" alt="">
                            <div class="overlay">
                                <h4 class="h5">Modern Suit</h4>
                                <p class="mb-0">dengan beberapa pernak pernik tetapi tetap terlihat elegant dan mewah yang pasti tidak terlihat norak</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide" data-aos="fade-down" data-aos-delay="500">
                        <div class="project p-4 border-custom">
                            <img src="./assets/images/foto3.jpg" class="img-fluid" alt="">
                            <div class="overlay">
                                <h4 class="h5">short suit</h4>
                                <p class="mb-0">Terlihat sangat mewah dengan set ikatan di samping tangan yang membuat desain ini menjadi lebih elegant </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide" data-aos="fade-down" data-aos-delay="600">
                        <div class="project p-4 border-custom">
                            <img src="./assets/images/foto6.jpeg" class="img-fluid" alt="">
                            <div class="overlay">
                                <h4 class="h5">shawl suit</h4>
                                <p class="mb-0">Jas ini terlihat sederhana namun dengan selendang dibagian kanan bisa membuat nya menjadi berbeda </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide" data-aos="fade-down" data-aos-delay="700">
                        <div class="project p-4 border-custom">
                            <img src="./assets/images/foto5.jpeg" class="img-fluid" alt="">
                            <div class="overlay">
                                <h4 class="h5">Elegant Suit</h4>
                                <p class="mb-0">Jas sederhana namun terlihat sangat elegant</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>


        </div>

    </section>

    <!-- Testimonials -->
    <section id="reviews" class="py-5 ">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row align-items-center mb-3" data-aos="fade-down" data-aos-delay="400">

                <!-- Col -->
                <div class="col-md-8">
                    <h6 class="text-primary">REVIEWS</h6>
                    <h2 class="h3">What our customers say?</h2>
                </div>

                <!-- Col -->
                <div class="col-md-4 text-md-end">
                    <a href="#" class="btn btn-primary">Explore More</a>
                </div>

            </div>

            <!-- Slider -->
            <div class="swiper mySwiper pb-5">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide" data-aos="fade-down" data-aos-delay="400">
                        <div class="review p-4 border-custom">
                            <img src="./assets/images/gambar1.jpg" alt="">
                            <p class="my-3">I think this is definitely not too bad to wear to some events</p>
                            <h5>Stella</h5>
                            <p class="mb-0 text-primary">Pembeli</p>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide" data-aos="fade-down" data-aos-delay="500">
                        <div class="review p-4 border-custom">
                            <img src="./assets/images/gambar2.jpg" alt="">
                            <p class="my-3">this is very good can you guys bring out some more models?</p>
                            <h5>Mike</h5>
                            <p class="mb-0 text-primary">Pembeli</p>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide" data-aos="fade-down" data-aos-delay="600">
                        <div class="review p-4 border-custom">
                            <img src="./assets/images/gambar3.jpg" alt="">
                            <p class="my-3">I like.</p>
                            <h5>Stephanie</h5>
                            <p class="mb-0 text-primary">Pembeli</p>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide" data-aos="fade-down" data-aos-delay="700">
                        <div class="review p-4 border-custom">
                            <img src="./assets/images/gambar4.jpg" alt="">
                            <p class="my-3">it is very unique and elegant</p>
                            <h5>Lily</h5>
                            <p class="mb-0 text-primary">Pembeli</p>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>


        </div>

    </section>

    <!-- Team -->
    <section id="team" class="py-5 ">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row align-items-center mb-3" data-aos="fade-down" data-aos-delay="400">

                <!-- Col -->
                <div class="col-md-8">
                    <h6 class="text-primary">BEST SELLER</h6>
                    <h2 class="h3"></h2>
                    <p>Produk-produk yang sering kali dibeli</p>
                </div>

                <!-- Col -->
                <div class="col-md-4 text-md-end">
                    <a href="#" class="btn btn-primary">Explore More</a>
                </div>

            </div>

            <!-- Row -->
            <div class="row g-4 text-center">

                <!-- Col -->
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="400">
                    <div class="team-member border-custom py-3">
                        <div class="team-head p-3">
                            <img src="./assets/images/foto4.jpg" class="img-fluid mb-3" alt="">
                            <h5 class="mb-0">formal suit</h5>
                        </div>
                        <div class="divider mb-3"></div>
                       
                    </div>
                </div>

                <!-- Col -->
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="500">
                    <div class="team-member border-custom py-3">
                        <div class="team-head p-3">
                            <img src="./assets/images/foto5.jpeg" class="img-fluid mb-3" alt="">
                            <h5 class="mb-0">Modern suit</h5>
                        </div>
                        <div class="divider mb-3"></div>
                    </div>
                </div>

                <!-- Col -->
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="600">
                    <div class="team-member border-custom py-3">
                        <div class="team-head p-3">
                            <img src="./assets/images/foto7.jpeg" class="img-fluid mb-3" alt="">
                            <h5 class="mb-0">Elegant suit</h5>
                        </div>
                        <div class="divider mb-3"></div>
                        
                    </div>
                </div>

                <!-- Col -->
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="700">
                    <div class="team-member border-custom py-3">
                        <div class="team-head p-3">
                            <img src="./assets/images/foto8.jpeg" class="img-fluid mb-3" alt="">
                            <h5 class="mb-0">Tight suit</h5>
                        </div>
                        <div class="divider mb-3"></div>
                       
                    </div>
                </div>


            </div>
            


        </div>



    <!-- Contact -->
    <section id="contact" class="py-5">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row align-items-center mb-3" data-aos="fade-down" data-aos-delay="400">

                <!-- Col -->
                <div class="col-md-8">
                    <h6 class="text-primary">CONTACT</h6>
                    <h2 class="h3">Get in touch</h2>
                    <p>Jika ingin lebih tahu bisa hubungi kami dengan beberapa cara dibawah ini</p>
                </div>

            </div>

            <!-- Row -->
            <div class="row">

                <!-- Col -->
                <div class="col-lg-6 d-grid" data-aos="fade-down" data-aos-delay="400">
                    <div class="d-grid">
                        <div class="border-custom p-4 d-flex">
                            <div class="icon"><i class="las la-phone"></i></div>
                            <div class="ms-3">
                                <h5>Phone</h5>
                                <p class="mb-0">(+62)895337439622</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-custom p-4 d-flex">
                        <div class="icon"><i class="lar la-envelope"></i></div>
                        <div class="ms-3">
                            <h5>Email</h5>
                            <p class="mb-0">Dheanicky71@gamil.com</p>
                        </div>
                    </div>
                    <div class="border-custom p-4 d-flex">
                        <div class="icon"><i class="las la-phone"></i></div>
                        <div class="ms-3">
                            <h5>Address</h5>
                            <p class="mb-0">Bogor Timur, JL.Kemana</p>
                        </div>
                    </div>
                </div>

                <!-- Col -->
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="500">
                    <form action="controller.php" class="border-custom p-4" method = "post">
                        <div class="mb-3">
                            <label class="mb-2" for="name">Name</label>
                            <input type="text" class="form-control" name ="name" id ="name" require>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2" for="email">Email</label>
                            <input type="email" class="form-control" name ="email" id ="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label class="mb-2" for="message">Message</label>
                            <textarea name="message" rows="4" class="form-control" name ="message" id ="message"></textarea>
                        </div>
                        <button type = "submit" name ="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>

            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer data-aos="fade-down" data-aos-delay="400">
        
        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row g-0">

                <!-- Col -->
                <div class="col-md-6 p-4 border-custom">
                        <h4><a href="#">JaDe.</a></h4>
                        <p class="mb-0">Jika ingin lihat lebih banyak follow</p>
                </div>
                <!-- Col -->
                <div class="col-md-3 p-4 border-custom">
                        <h5>Follow us</h5>
                        <ul>
                            <li><a href="https://www.instagram.com/dhnckyazz/?hl=id">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>

                        </ul>
                </div>
            </div>

        </div>

    </footer>

    <!-- Scroll to top -->
    <a href="#top" class="icon scroll-to-top"><i class="las la-arrow-up"></i></a>
    
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>