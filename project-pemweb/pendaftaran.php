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
<!-- Pendaftaran -->
<div class="section bg-light" id="Pendaftaran">
        <div class="container py-5">
            <div class="form-container mx-auto" data-aos="fade-up">
                <h2 class="text-center mb-4">Pendaftaran</h2>
                <p class="text-center mb-5 text-muted">Isi Formulir Di Bawah Ini Sebelum Membaca Buku</p>
                <form action="proses_pendaftaran.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" required>
                        <label for="name">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="phone" placeholder="Nomor Telepon" required>
                        <label for="phone">Nomor Telepon</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Alamat Lengkap" id="address" style="height: 100px" required></textarea>
                        <label for="address">Alamat Lengkap</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <script crossorigin="anonymous" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Gx0f4g5Y1b4rE4t5p5v5p5p5p5p5" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>