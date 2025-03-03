<html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            <title>Omah Library</title>
            <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
            <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
            <link href="style.css" rel="stylesheet"/>
            <!-- <script src="main.js"></script> -->
        </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init()
        </script>

<?php include 'header.php';?>
<div class="hero-section" id="Home">
            <img src="images/membaca.jpg"/>
            <div class="hero-text">
                <h1></h1>
                <!-- <button class="btn btn-custom">Lebih Lanjut</button> -->
            </div>
        </div>

        <!-- Tentang Kami -->
                <div class="section bg-light" id="about-us">
                <section data-aos="fade-up">
                    <div class="container">
                        <h2 class="section-title text-center">Tentang Kami</h2>
                        <div class="about-wrapper row align-items-center">
                            <div class="about-details col-md-6">
                                <h3 class="mb-3">Selamat Datang di <span class="text-primary">Omah Library</span></h3>
                                <p>
                                    Tempat di mana literasi bertemu dengan inovasi! Kami menyediakan koleksi buku lengkap, suasana membaca yang nyaman, 
                                    dan teknologi modern untuk mendukung pengalaman belajar Anda.
                                </p>
                                <p class="mt-3">
                                    <strong>Misi kami</strong>: Menciptakan generasi pembelajar dengan menyediakan sumber daya terbaik untuk belajar, 
                                    berkembang, dan menginspirasi.
                                </p>
                            </div>
                            <div class="about-image-container col-md-6 text-center">
                                <img src="images/library.jpg" alt="Library Image" class="about-image img-fluid rounded shadow">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <!-- Layanan Kami -->
        <div class="section" >
            <div class="container">
                <h2>Layanan kami</h2>
                <section data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img alt="Book Lending" class="card-img-top" height="200" src="./images/pinjamanbuku.png" width="300"/>
                            <div class="card-body">
                                <h3 class="card-title">Peminjaman Buku</h3>
                                <p class="card-text">Pinjam buku dari koleksi kami yang luas untuk jangka waktu tertentu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img alt="Research Assistance" class="card-img-top" height="200" src="./images/pinjamanbuku2.png" width="300"/>
                            <div class="card-body">
                                <h3 class="card-title">Bantuan Penelitian</h3>
                                <p class="card-text">Dapatkan bantuan untuk proyek penelitian Anda dari staf kami yang berpengetahuan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img alt="Community Programs" class="card-img-top" height="200" src="./images/pinjamanbuku3.png" width="300"/>
                            <div class="card-body">
                                <h3 class="card-title">Program Komunitas</h3>
                                <p class="card-text">Berpartisipasi dalam berbagai program dan acara yang dirancang untuk semua kelompok umur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </div>

        <!-- Kontak Kami --> 
        <div class="section bg-light" id="Kontak">
            <div class="container">
                <h2>Kontak Kami</h2>
                <p>Jika Anda memiliki pertanyaan atau ingin menghubungi kami, berikut adalah cara-cara yang dapat Anda gunakan:</p>
                <section data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="card-title">WhatsApp</h3>
                                <p>Hubungi kami melalui WhatsApp untuk pertanyaan cepat.</p>
                                <a href="https://chat.whatsapp.com/HsSuZMxLTRo7ZF0m8Rdm30" target="_blank" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i> Chat di WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="card-title">Instagram</h3>
                                <p>Ikuti kami di Instagram untuk pembaruan terbaru.</p>
                                <a href="https://www.instagram.com/omah.library?igsh=eGkyemg4Z3V3dTh1&utm_source=qr" target="_blank" class="btn btn-danger">
                                    <i class="fab fa-instagram"></i> Follow di Instagram
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="card-title">Email</h3>
                                <p>Kirim email kepada kami untuk pertanyaan lebih lanjut.</p>
                                <a href="mailto:Omah.Library5@gmail.com" class="btn btn-primary">
                                    <i class="fas fa-envelope"></i> Kirim Email
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>
        
        <div class="footer">
            <p>&copy; 2025 Omah Library. Dibuat oleh Tim Kami.</p>
        </div>
        <script crossorigin="anonymous" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Gx0f4g5Y1b4rE4t5p5v5p5p5p5p5" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html> 