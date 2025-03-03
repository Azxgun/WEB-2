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

        <div class="container py-5">
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-8" data-aos="fade-up">
                <h2 class="mb-4">Hubungi Kami</h2>
                    <p>Jika Anda memiliki pertanyaan atau memerlukan informasi lebih lanjut, jangan ragu untuk menghubungi kami</p>
                    <form action="https://formspree.io/f/mjkkqvdl" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nama *</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Nomor Telepon *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+62" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pertanyaan *</label>
                        <textarea class="form-control" id="message" name="message" rows="4"
                            placeholder="Tulis pesan Anda di sini" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                </form>
                <p class="mt-3 text-muted text-smaller">* Kami akan menangani data pribadi Anda sesuai dengan kebijakan privasi kami.</p>
            </div>

        <!-- Contact Info Section -->
        <div class="col-md-4" data-aos="fade-left">
            <h4 class="mb-4">Kontak Langsung</h4>
            <p class="mb-3"><i class="fas fa-phone-alt me-2"></i>0896-1488-9141</p>
            <p class="mb-3"><i class="fab fa-whatsapp me-2 text-success"></i> <a href="https://chat.whatsapp.com/HsSuZMxLTRo7ZF0m8Rdm30" target="_blank">WhatsApp</a></p>
            <p class="mb-3"><i class="fab fa-instagram me-2 text-success"></i> <a href="https://www.instagram.com/omah.library?igsh=eGkyemg4Z3V3dTh1&utm_source=qr" target="_blank">Instagram</a></p>
            <p class="mb-3"><i class="fas fa-envelope me-2 text-success"></i> <a href="mailto:OmahLibrary5@gmail.com" target="_blank">Email</a></p>
            <hr>
            <div class="mb-3">
                <i class="fas fa-video me-2"></i> <strong>Dilarang Video Call</strong>
            </div>
            <div class="mb-3">
                <i class="fas fa-handshake me-2"></i> <strong>Friendly Admin</strong>
            </div>
            <div class="mb-3">
                <i class="fas fa-tools me-2"></i> <strong>Fast Respon</strong>
            </div>
            <div class="mb-3">
                <i class="fas fa-question-circle me-2"></i> <strong>Permintaan Bantuan Pertanyaan</strong>
            </div>
        </div>
    </div>
</div>

        <script crossorigin="anonymous" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Gx0f4g5Y1b4rE4t5p5v5p5p5p5p5" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>