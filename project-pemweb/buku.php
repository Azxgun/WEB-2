<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Omah Library</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init()
    </script>

    <?php include 'header.php';?>

    <!-- Modal untuk Buku -->
    <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="bookModalImage" class="img-fluid mb-3" src="" alt="">
                    <p id="bookModalDescription"></p>
                </div>
            </div>
        </div>
    </div>

    <?php
    $books = [
        ["title" => "Aku Anak Pemberani Percaya Diri Dan Mandiri", "category" => "bukuanak", "image_url" => "images/anakanak.jpg", "description" => "“Aku Anak Pemberani, Percaya Diri, dan Mandiri” memuat berbagai tips melindungi diri yang dikemas dalam cerita pendek dua bahasa (Bahasa Indonesia dan Bahasa Inggris). Selain ceritanya yang asyik untuk dibaca, setiap halaman juga dipenuhi ilustrasi berwarna-warni yang semakin menambah daya tarik buku karangan Dewi Cendika ini.
Isinya yang edukatif serta menyenangkan membuat buku “Aku Anak Pemberani, Percaya Diri, dan Mandiri” sangat direkomendasikan. Buku ini juga dapat dijadikan sebagai sarana melatih kemampuan bilingual anak."],
        ["title" => "Aku Tidak Mau Berbohong Lagi", "category" => "bukuanak", "image_url" => "images/anakanak3.jpg", "description" => "kisah Udin yang selalu berbohong kepada teman-temannya hingga tak ada satupun yang akhirnya percaya dengan Udin dan memilih utnuk menjauhi Udin. di buku ini, kalian akan mendapatkan banyak pesan moral mengenai buruknya memiliki perilaku berbohong. Dari buku ini juga, anak-anak akan belajar mengenai sifat-sifat yang tidak baik yang tidak boleh dilakukan di lingkungan sekitar. Kisah Udin disini akan menjadi sebuah pelajaran baru bagi anak."],
        ["title" => "Aku Tidak Banyak Jajan", "category" => "bukuanak", "image_url" => "images/anakanak4.jpg", "description" => "Bahasa Indonesia Tio juara lomba mewarnai. Hadiahnya piala dan sejumlah uang. Uang itu akan Tio belikan krayon baru. Namun, Tio malah membeli yang lain. Sisa uangnya cukup tidak, ya, untuk membeli krayon baru?."],
        ["title" => "Jangan Buang Aku Sembarangan", "category" => "bukuanak", "image_url" => "images/anakanak5.jpg", "description" => "ini menceritakan plastik pembukus snack bernama Woni yang sedih sekali karena seorang anak membuangnya tidak pada tempatnya. Cerita bertema sampah ini memberikan pengetahuan tentang dampak buruk dari membuang sampah sembarangan agar anak tidak buang sampah sembarangan dan cerita kesedihan Woni juga dapat memberikan pembelajaran kepada anak untuk membuang sampah pada tempatnya. Buku cerita ini dilengkapi dengan gambar karakter yang lucu, berwarna, dan menarik perhatian anak dalam mengeksplorasi cerita bergambar. Anak tidak hanya membaca cerita tapi juga dapat membayangkan melalui gambar sehingga hal ini bisa mengembangkan daya imajinasi dan kreativitasnya. Karena belajar sambil berimajinasi adalah hal yang asik dan menyenangkan."],
        ["title" => "Soekarno", "category" => "bukubiografi", "image_url" => "images/sejarah2.jpg", "description" => "Soekarno adalah manusia luar biasa yang pernah dilahirkan oleh ibu pertiwi, dan bahkan belum tentu dalam seratus tahun nanti akan ada sosok yang bisa menandingi figur Soekarno. Soekarno adalah founding father, orator ulung, berwibawa, kharismatik, cendikiawan, ideolog, dan bahkan sosok yang sempurna sebagai pemimpin bangsa. Karena itu, tidak heran jika sosok Soekarno tidak ada yang heran jika sosok Soekarno tidak ada yang mampu menandinginya sampai sekarang ini, meskipun ada juga kekurangan yang membuat dirinya tetap menjadi (manusia)."],
        ["title" => "K.H Ahmad Dahlan", "category" => "bukubiografi", "image_url" => "images/sejarah3.jpg", "description" => "K.H. Ahmad Dahlan adalah anak keempat dari tujuh bersaudara, putra dari K.H. Abu Bakar bin Kiai Sulaiman dan Siti Aminah binti almarhum K.H. Ibrahim. Ayahnya seorang khatib tetap Masjid Agung Yogyakarta. Sedangkan adalah putri dari Penghulu Besar di Yogyakarta. K.H. Ahmad Dahlan lahir di Kauman, Yogyakarta, tahun 1869. Sebelum ia mendapat gelar dan nama K.H. Ahmad Dahlan, nama yang diberikan orang tuanya adalah Muhammad Darwis. Nama K.H. Ahmad Dahlan, ia peroleh dari para Kiai setelah ia selesai menunaikan ibadah haji."],
        ["title" => "Soe Hok Gie", "category" => "bukubiografi", "image_url" => "images/sejarah4.jpg", "description" => "Soe Hok Gie datang dari sebuah rumah di Kebon Jeruk untuk menjadi seorang pahlawan. Jiwa (pemberontak) diwarisi dari ayahnya, seorang peranakan Cina yang memilih menjadi penulis dan jurnalis. Pada umur 17 tahun, dia sudah pandai menggugat pemerintah yang dianggapnya lalai memenuhi amanat rakyat. Keberanian jiwanya tak terbendung setelah menyandang status mahasiswa."],
        ["title" => "Tan Malaka", "category" => "bukubiografi", "image_url" => "images/sejarah5.jpg", "description" => "Tan Malaka adalah teladan tokoh revolusi militan, radikal, dan revolusioner. Namun sayang, nama dan perannya dalam kemerdekaan indonesia sengaja dikaburkan dan dihilangkan oleh rezim Orde Baru dari catatan sejarah dan album pahlawan nasional. Sementara itu, segudang ide dan pemikirannya yang bernas telah berperan besar dalam mengantarkan bangsa ini menutup lembaran demi lembaran sejarah penjajahan. Dia telah menjadi korban pemalsuan sejarah."],
        ["title" => "Tetap Tenang Di Dunia Yang Lari Kencang", "category" => "selfimprovement", "image_url" => "images/selfImprovement4.jpg", "description" => "Dunia yang serba cepat telah membawa kita menjamah berbagai sudut dunia, menghantarkan kita menjelajahi berjuta pengembaraan, mempertontonkan kita beragam makna.Kecepatan memang telah terpenuhi, namun tanpa sadar manusia telah kehilangan begitu banyak perilaku kemanusiaan. Kehilangan banyak pemaknaan.Yang hadir adalah hasrat yang tak pernah terpuaskan. Hasrat yang terus-menerus mengejar kepuasan dunia. Manusia sibuk berlari memenuhi ketidakpuasan abadi. Namun, tak juga menemukan ketentraman, kenyamanan, dan kebahagiaan. Yang tersisa hanyalah kesunyian, kehampaan, dan kekosongan."],
        ["title" => "Tentang Luka Yang Ku Simpan Sendiri", "category" => "selfimprovement", "image_url" => "images/selfImprovement3.jpg", "description" => "Kita punya hak untuk bersedih, kita punya hak untuk memilih menyimpan atau berbagi rasa sakit. Hanya saja, kali ini mari sama-sama memahami bahwa kita tak sendiri. Setiap orang di bumi ini punya lukanya sendiri. Tak perlu membandingkan luka siapa yang paling hebat, kita hanya perlu bertahan dari luka kita sendiri dan Kembali bangkit meski aku paham itu adalah hal yang sulit.
Meski benar, Tuhan selalu ada, tapi boleh kan jika aku membutuhkan satu manusia yang bersedia ada?"],
        ["title" => "Hidupku Kenapa Gini Gini Aja", "category" => "selfimprovement", "image_url" => "images/selfImprovement(2).jpg", "description" => "Kegagalan, kesedihan, dan kekurangan adalah bagian yang tak terpisahkan dari perjalanan hidup kita. Daripada melarikan diri dari kenyataan ini, lebih baik kita memperkuat mentalitas dengan menerima dan belajar dari pengalaman-pengalaman tersebut. Bahwa di setiap kegagalan, kita dapat menemukan kesempatan untuk tumbuh dan tak berhenti memperbaiki diri.
Buku ini mengajak kita berkontemplasi, melihat jauh kedalam diri kita sendiri dan mempertanyakan definisi kebahagiaan sejati. apakah kebahagiaan itu sebatas tampilan yang diperlihatkan kepada dunia luar, ataukah lebih dari itu?"],
        ["title" => "Untukmu Yang Saat Ini Tidak Baik-Baik Saja", "category" => "selfimprovement", "image_url" => "images/selfImprovement.jpg", "description" => "Setiap perjalanan yang kita lalui pasti akan ada lika-likunya. Setiap pelayaran yang kita arungi pasti akan ada gelombang dan badainya. Begitu pula dalam hidup ini akan ada kondisi dan situasi di mana kita tak baik-baik saja. Pasti akan ada saia masalah dan ujiannya.
Makan tak lagi terasa nikmat. Tidur tak lagi terasa nyenyak. Bergerak tak lagi dipenuhi dengan rasa semangat. Rasa takut dan kekhawatiran di pikiran yang selalu ramai dan semakin berkelebat."],
        ["title" => "Islam Risalalah Cinta Kebaghagiaan", "category" => "bukuagama", "image_url" => "images/agama6.jpeg", "description" => "“Agama adalah Mengenal Allah (ma'rifatullah). Mengenal Allah adalah berlaku dengan akhlak (yang baik). Akhlak (yang baik) adalah menghubungkan tali kasih sayang (silaturrahim). Dan Silaturrahim adalah memasukkan rasa bahagia di hati sesama kita.” (Rangkaian hadis yang dijalin oleh Syaikh Yusuf Makassari)."],
        ["title" => "Nasihat Rasulallah Untuk Muslilah", "category" => "bukuagama", "image_url" => "images/agama4.jpeg", "description" => "dalam beberapa hadis telah disebutkan bahwa ada empat wanita yang dijamin oleh Allah akan masuk surga. Hal ini sebagaimana disebutkan dalam hadis berikut ini; Rasulullah Saw. bersabda, “Adapun laki-laki yang sempurna amat banyak, sedangkan wanita tidak ada yang sempurna, kecuali Maryam binti Imran, Asiyah istri Fir'aun, Khadijah binti Khuwailid, dan Fatimah binti Muhammad.” (HR. Ibnu Majah)
Orang yang beriman kepada Allah dan Hari Akhir tentu menginginkan surga sebagai tempat kembalinya. Tidak terkecuali bagi wanita. Apabila kamu begitu menginginkan surga, kamu dapat mengambil pelajaran dari mereka."],
        ["title" => "Membangun Karakter Islam", "category" => "bukuagama", "image_url" => "images/agama3.jpg", "description" => "Tasawuf merupakan batin (esoteris) dari ajaran Islam, sementara sisi lahirnya (eksoteris) adalah syariah yang mengandung hukum-hukum keagamaan formal, mengenai apa yang harus dilakukan oleh seseorang (al-wajibat) serta apa yang seharusnya ditinggalkan (al-muharramat). Tasawuf, selain mengisi sisi batiniah dari syariah, juga memberikan makna bagaimana hidup ber-Tuhan dengan baik danbenar."],
        ["title" => "Tenang Ada Allah", "category" => "bukuagama", "image_url" => "images/agama.jpeg", "description" => "kehidupan dapat kita ibaratkan seperti roda yang terus berputar. Terkadang, kita berada di atas, dipuncak kejayaan dan kebahagiaan. Namun, ada pula masanya kita mesti berada di bawah, di ambang kegagalan nan penuh tantangan. Dan, di sinilah sesungguhnya kita dituntut untuk siaga menghadapi segala kemungkinan"],
        ["title" => "Pulang Pergi", "category" => "bukufiksi", "image_url" => "images/fiksi4.jpeg", "description" => "bagaimana caramu untuk menghabiskan waktu luang? Apakah dengan melamun dan mendelomong dan tidak memikirkan apa pun? Apa pun itu, semoga kegiatannya tetaplah positif, ya.
Cara menghabiskan waktu dengan positif adalah membaca novel. Membaca fiksi dipercayai dapat meningkatkan imajinasi. Kamu juga akan terhibur oleh kisah-kisahnya yang mengiris hati atau membuatmu tertawa.
Salah satu novel yang sering dicari novel pdf-nya untuk dibaca adalah novel karya Tere Liye. Penulis satu ini memang punya banyak sekali karya. Berikut merupakan sinopsis novel Pulang-Pergi yang bisa kamu baca di waktu luang."],
        ["title" => "Planet Luna", "category" => "bukufiksi", "image_url" => "images/fiksi3.jpeg", "description" => "Nawang itu paduan sempurna atas apa yang tidak Luna miliki. Tidak hanya pintar dan baik hati, tetapi juga berprestasi dan punya banyak teman. Sementara Luna tak pernah berhasil meskipun setengah mati ingin bisa bergaul dan punya sahabat. Dia justru dirundung dan dijauhi orang-orang yang dia kira akan menjadi temannya. Mendengarkan Nawang tertawa-tawa bersama teman-temannya di sebelah rumah hanya mengingatkan Luna pada kesendirian. Luna merasa planetnya akan selalu kosong dan hampa. Dia akan selalu tersisih dari pergaulan dan kesepian sampai tua."],
        ["title" => "Ruang Sunyi", "category" => "bukufiksi", "image_url" => "images/fiksi2.jpeg", "description" => "Ruang Sunyi menceritakan tentang keluarga yang tidak sempurna. Seorang Ibu yang menderita oleh trauma dari masa kecil dengan segala penolakan serta keasingan yang dirasakannya di keluarganya sendiri.
Seorang Ayah yang kehilangan kepercayaan dari anak-anaknya, mencoba untuk menerima kenyataan bahwa tidak selamanya dia bisa dicintai. Dua orang anak yang terapung di antara kemandirian dan kebutuhan kasih sayang. Mereka adalah kita semua, yang mencoba untuk menjadi sempurna, tetapi pada akhirnya menerima. Penerimaan tentang derita dan bahagia yang pasti selalu akan datang."],
        ["title" => "Kala Senja Menyapa", "category" => "bukufiksi", "image_url" => "images/fiksi.jpeg", "description" => "Senja acapkali menyapa kala matahari beranjak kembali ke peraduan, sembari menyimpan kisah tentang hari yang kiranya berangsur lampau. Tentang senyum yang tak terjawab, maksud yang tak sampai, atau bahagia yang tak terbalas. Maupun, tentang senyum yang tak terduga, paham yang tak bersuara, dan nyaman yang hanya singgah ataupun menetap."],
        ["title" => "Inspirasi Dosis Tinggi", "category" => "bukumotivasi", "image_url" => "images/motivasi4.jpg", "description" => "kadang kita dapat pelajarannya dulu, baru dapat pengalamannya. Kadang kita dapat pengalamannya dulu, baru pelajarannya. Karena waktu yang terbatas, tidak semua pengalaman bisa kita peroleh sendiri. Kita bisa mendapatkan pelajarannya dari pengalaman orang lain, melalui kisah yang kita dengar sendiri dari orangnya langsung, atau melalui oranglainnya lagu, atau yang dikisahkan dan direkam melalui tulisan dalam novel, memoir, biografi, dan lain-lain."],
        ["title" => "Maaf Tuhan Aku Hampir Menyerah", "category" => "bukumotivasi", "image_url" => "images/motivasi3.jpg", "description" => "tidak semua hal akan berjalan sesuai keinginanmu. Pada satu waktu, impianmu akan dipukul mundur, harapanmu terpatahkan, dan langkahmu dihentikan paksa,dunia yang luas terasa begitu menyesakkan. Ramai, tapi sepi. Ingin terus melangkah, takut terjatuh. Ingin putar balik, sudah tak mungkin tertempuh. Ingin menyerah, tetap saja tidak akan pernah menyelesaikan masalah. Setiap pilihan nyaris tak mampu kamu tanggung konsekuensinya."],
        ["title" => "Esok Lebih Baik", "category" => "bukumotivasi", "image_url" => "images/motivasi2.jpg", "description" => "semua orang ingin mendapatkan apa yang diinginkan. Namun, dalam prosesnya acap kali terbentur dengan berbagai masalah dan tantangan yang datang tak terduga. Acap kali juga keduanya terlampau sulit dan berat untuk diatasi, sehingga membuatnya kecewa, sedih, cemas, takut, hingga tahap depresi dan putus asa."],
        ["title" => "Menjadi Pribadi Yang Bahagia Dan Inspiratif", "category" => "bukumotivasi", "image_url" => "images/motivasi.jpeg", "description" => "sebagian orang menikmati hidup berlimpah dan sempurna yang mereka miliki. Orang-orang ini ibarat magnet; sangat bersinar, riang, dan menarik sampai-sampai mereka tak perlu memaksa atau meminta orang lain untuk “membukakan jalan” bagi mereka. Pintu-pintu selalu terbuka lebar dan mengundang mereka untuk memasukinya. Kehadiran mereka membuat orang lain nyaman dan bahagia. Mereka paham bagaimana cara terbaik untuk membujuk orang lain, bahkan tanpa harus mengucapkan sepatah kata pun. Mereka sangat populer dalam lingkungan sosial dan pergaulan, pekerjaan dan karier mereka pun dapat melesat dengan pesat."],
    ];
    ?>

    <!-- Koleksi Buku -->
    <div class="section" id="Koleksi-Buku">
        <div class="container">
            <h2 class="section-title text-center">Selamat Datang di Buku Digital</h2>
            <p class="text-center subtitle">Buku siap untuk kamu baca</p>
            <div class="text-center mb-4">
                <button class="btn btn-primary filter-button" data-filter="all">Lihat Semua</button>
                <button class="btn btn-secondary filter-button" data-filter="bukuagama">Buku Agama</button>
                <button class="btn btn-secondary filter-button" data-filter="bukubiografi">Buku Biografi</button>
                <button class="btn btn-secondary filter-button" data-filter="bukumotivasi">Buku Motivasi</button>
                <button class="btn btn-secondary filter-button" data-filter="bukufiksi">Buku Fiksi</button>
                <button class="btn btn-secondary filter-button" data-filter="bukuanak">Buku Anak</button>
                <button class="btn btn-secondary filter-button" data-filter="selfimprovement">Self Improvement</button>
            </div>

            <!-- Buku Anak, Buku Biografi, Buku Selfimprovement, Buku Agama, Buku Fiksi -->
            <div class="row">
                <?php foreach ($books as $book): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 book-item <?= $book['category'] ?>" 
                        data-title="<?= htmlspecialchars($book['title'], ENT_QUOTES) ?>" 
                        data-image="<?= $book['image_url'] ?>" 
                        data-description="Deskripsi tentang buku ini <?= htmlspecialchars($book['description'], ENT_QUOTES) ?>">
                        <div class="card">
                            <img class="card-img-top" src="<?= $book['image_url'] ?>" alt="<?= htmlspecialchars($book['title'], ENT_QUOTES) ?>">
                            <div class="card-body text-center">
                                <h6 class="card-title"><?= htmlspecialchars($book['title'], ENT_QUOTES) ?></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

    <!-- Script untuk Modal -->
    <script>
       // Menambahkan event listener untuk setiap buku
            document.querySelectorAll('.book-item').forEach(item => {
                item.addEventListener('click', function() {
                    // Mengambil data dari elemen yang diklik
                    var title = this.getAttribute('data-title');
                    var image = this.getAttribute('data-image');
                    var description = this.getAttribute('data-description');

                    // Mengisi modal dengan informasi buku
                    document.getElementById('bookModalLabel').textContent = title;
                    document.getElementById('bookModalImage').src = image;
                    document.getElementById('bookModalDescription').textContent = description;

                    // Menampilkan modal
                    var modal = new bootstrap.Modal(document.getElementById('bookModal'));
                    modal.show();
                });
            });


        // Script untuk filter buku
        document.addEventListener("DOMContentLoaded", function() {
            const filterButtons = document.querySelectorAll(".filter-button");
            const bookItems = document.querySelectorAll(".book-item");

            filterButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const filter = this.getAttribute("data-filter");

                    // Filter buku berdasarkan kategori
                    bookItems.forEach(item => {
                        if (filter === "all" || item.classList.contains(filter)) {
                            item.style.display = "block"; // Tampilkan buku
                        } else {
                            item.style.display = "none"; // Sembunyikan buku
                        }
                    });

                    // Tambahkan kelas aktif untuk tombol yang dipilih dan ubah warna
                    filterButtons.forEach(btn => {
                        btn.classList.remove("btn-primary");
                        btn.classList.add("btn-secondary"); // Setel tombol lain ke warna default
                    });
                    this.classList.remove("btn-secondary");
                    this.classList.add("btn-primary"); // Jadikan tombol aktif berwarna biru
                });
            });
        });
    </script>

    <script crossorigin="anonymous" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Gx0f4g5Y1b4rE4t5p5v5p5p5p5p5" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
