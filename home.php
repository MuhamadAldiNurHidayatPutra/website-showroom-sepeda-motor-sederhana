<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTORCYCLESTOREHOUSE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
            flex-direction: column;
            /* Menyusun elemen secara vertikal */
            height: 100vh;
            /* Menentukan tinggi 100% dari viewport */
        }

        header {
            color: #fff;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            height: 10%;
            z-index: 1;
            text-align: center;
            /* Menengahkan secara horizontal */
        }

        .logo img {
            padding-left: 35px;
        }

        nav {
            padding-left: 350px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding-right: 20px;
            display: inline-block;
            justify-content: center;
            /* Menengahkan secara horizontal */
            align-items: center;
            /* Menengahkan secara vertikal */
        }

        nav li {
            display: inline-block;
            margin: 0;
            padding: 0;
        }

        nav a {
            display: block;
            padding: 10px 10px;
            color: whitesmoke;
            text-decoration: none;
        }

        nav a:hover {
            color: grey;
        }

        .hero-container {
            position: relative;
            width: 100%;
        }

        .hero-image {
            padding-top: 1650px;
            width: 100%;
            display: block;
            filter: brightness(90%) contrast(80%);
        }

        .search-container {
            position: absolute;
            top: 50%;
            left: 50%;
            padding: 5px 5px;
            padding-right: 15px;
            transform: translate(-50%, -50%);
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        label {
            margin: 5px;
            font-size: 16px;
        }

        select {
            padding: 10px;
            font-size: 16px;
            margin: 5px;
            padding-right: 105px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            margin: 5px;
        }

        section {
            padding-top: 80px;
            text-align: left;
        }

        .about-image {
            width: 10%;
            display: block;
            filter: brightness(90%) contrast(80%);
        }

        .gotopbtn {
            position: fixed;
            width: 50px;
            height: 50px;
            background: #4CAF50;
            bottom: 40px;
            right: 50px;
            text-decoration: none;
            text-align: center;
            line-height: 50px;
            color: white;
            font-size: 22px;
        }

        .card-container {
            display: flex;
            justify-content: center;
            padding-top: 50px;
            padding-bottom: 30px;
        }

        .card {
            position: relative;
            width: 300px;
            margin-right: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #e1e1e1;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 1rem;
            color: #666;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
        }

        #mainheader {
            color: #fff;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 10%;
            z-index: 1;
            text-align: center;
            transition: top 0.15s ease, background-color 0.3s ease;
            /* Transisi untuk properti top dan background-color */
            background-color: rgba(51, 51, 51, 0);
            /* Warna latar belakang header dengan transparansi */
        }

        #mainNav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        #mainNav li {
            margin: 0 10px;
        }

        #mainNav a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 5px 10px;
            border-radius: 5px;
        }

        #mainNav a.active {
            color: #fff;
        }

        #mainNav a.active:hover {
            background-color: #555;
        }

        #mainheader.stock-active,
        #mainheader.about-active,
        #mainheader.contact-active {
            background-color: #333;
            /* Warna latar belakang header yang tidak transparan */
        }

        .tab-button {
            cursor: pointer;
            padding: 10px;
            border: none;
            outline: none;
            background-color: green;
            display: inline-block;
            transition: background-color 0.5s;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, .1);
        }

        .content {
            display: none;
        }

        .content.active {
            display: block;
        }

        /* Your existing floating box styles */
        .floating-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            max-height: 80vh;
            /* Set a maximum height, e.g., 80% of the viewport height */
            overflow-y: auto;
            /* Enable vertical scrolling if content exceeds max height */
            text-align: justify;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, .1);
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding-left: 100px;
            padding-top: 5px;
            padding-bottom: 5px;
            height: 30%;
        }

        .footer h4 {
            color: #fff;
        }

        .footer p {
            color: #bbb;
        }

        .social-icons {
            list-style: none;
            padding: 0;
        }

        .social-icons li {
            display: inline-block;
            margin-right: 10px;
        }

        .social-icons a {
            color: #fff;
            text-decoration: none;
            font-size: 20px;
        }

        .social-icons i {
            vertical-align: middle;
        }

        .footer p.text-center {
            margin-top: 20px;
        }

        /* Optional: Styling for Font Awesome icons (Assuming you're using Font Awesome) */
        .fa-facebook {
            color: #3b5998;
        }

        .fa-twitter {
            color: #1da1f2;
        }

        .fa-instagram {
            color: #e4405f;
        }

        /* Custom CSS to make columns equal height */
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-md-4 {
            flex: 1;
            margin-bottom: 20px;
            margin-left: 20px;
        }

    </style>
</head>

<body>
    <!-- header -->
    <header id="mainheader">
        <div class="logo">
            <img src="logo.png" usemap="#image-map" width="200px">

            <map name="image-map">
                <area target="" alt="logo" title="logo" href="" coords="27,52,91,9,138,22,168,31,434,29,423,61,24,60" shape="poly">
            </map>
        </div>

        <nav id="mainNav">
            <ul>
                <li><a href="#home" onclick="changeHeader('home')">Home</a></li>
                <li><a href="#stock" onclick="changeHeader('stock')">Stock</a></li>
                <li><a href="#about" onclick="changeHeader('about')">About</a></li>
                <li><a href="#contact" onclick="changeHeader('contact')">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <!-- header end -->

    <div class="hero-container">
        <section id="home">
            <img src="home4.webp" alt="Hero Image" class="hero-image">
            <div class="search-container">
                <label for="brand"></label>
                <select id="brand">
                    <option value="" disabled selected>pilih merk</option>
                    <option value="honda">Honda</option>
                    <option value="yamaha">Yamaha</option>
                    <option value="suzuki">Suzuki</option>
                    <option value="kawasaki">Kawasaki</option>
                </select>

                <label for="type"></label>
                <select id="type">
                    <option value="" disabled selected>pilih tipe</option>
                    <option value="sport">Sport</option>
                    <option value="cruiser">Cruiser</option>
                    <option value="touring">Touring</option>
                    <option value="naked">Naked</option>
                </select>
                <button onclick="cari()">Search</button>
            </div>
        </section>

        <section id="stock" class="stock">
            <h1 align="center">READY STOCK</h1>
            <div class="card-container">
                <div class="card">
                    <img src="r1m.jpg" alt="Card Image">
                    <div class="card-content">
                        <div class="card-title">Yamaha R1M</div>
                        <p class="card-description">Sebuah Motorsport buatan Yamaha yang memiliki cc standar 998 cc</p>
                        <a href="R1M.html" class="btn" onclick="showFloatingBox(event)">Spesifikasi</a>
                    </div>
                </div>

                <div class="card">
                    <img src="hayabucin.jpg" alt="Card Image">
                    <div class="card-content">
                        <div class="card-title">Hayabusa GSX1300R</div>
                        <p class="card-description">Sebuah Motorsport buatan Suzuki yang memiliki cc standar 1300 cc</p>
                        <a href="#" class="btn" onclick="showFloatingBox(event)">Spesifikasi</a>
                    </div>
                </div>

                <div class="card">
                    <img src="panigale.webp" alt="Card Image">
                    <div class="card-content">
                        <div class="card-title">Panigale V4 S</div>
                        <p class="card-description">Sebuah Motorsport buatan Ducati yang memiliki cc standar 1103 cc</p>
                        <a href="#" class="btn" onclick="showFloatingBox(event)">Spesifikasi</a>
                    </div>
                </div>

                <div class="card">
                    <img src="h2r2.webp" alt="Card Image">
                    <div class="card-content">
                        <div class="card-title">H2R</div>
                        <p class="card-description">Sebuah Motorsport buatan Kawasaki yang memiliki cc standar 998 cc</p>
                        <a href="#" class="btn" onclick="showFloatingBox(event)">Spesifikasi</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <h1 align="center">ABOUT</h1>
            <table>
                <tr>
                    <td>
                        <p align="center">
                            Motorcycle Storehouse is a motorbike showroom that provides various types of motorbikes including sport, cruiser, naked and touring, and also provides payment in the form of cash and credit.
                            Motorcycle Storehouse was founded in 2015 in Bandung, and is still standing and will continue to grow
                        </p>
                    </td>
                    <td>
                        <img src="about2.jpg" alt="">
                    </td>
                </tr>
            </table>
        </section>

        <section>
            <footer id="contact" class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Jam Operasional</h4>
                            <p>Senin - Jumat: 09:00 - 18:00</p>
                            <p>Sabtu: 09:00 - 16:00</p>
                            <p>Minggu: Libur</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Alamat Showroom</h4>
                            <p>Jl. Sukajadi No.157, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162</p>
                            <p>Telp: (021) 123-4567</p>
                            <p>Email: MOTORCYCLESTOREHOUSE@gmail.com</p>
                        </div> &nbsp;
                        <div class="col-md-4">
                            <h4>Ikuti Kami</h4>
                            <ul class="social-icons">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <p align="center">&copy; 2024 MOTORCYCLESTOREHOUSE . Muhamad Aldi & Rizal Maulana.</p>
                    </div>
                </div>
            </footer>
        </section>
    </div>

    <div class="floating-box" id="floatingBox">
        <div class="wrapper">
            <div class="buttonWrapper">
                <button class="tab-button active" onclick="showTab('spesifikasi')">spesifikasi</button>
                <button class="tab-button" onclick="showTab('Fitur')">Fitur</button>
            </div>

            <div class="contentWrapper">
                <div class="content active" id="spesifikasi">
                    <table>
                        <tr>
                            <td>Dimensi (P x L x T)</td>
                            <td>:</td>
                            <td>2.055 x 690 x 1.150 mm</td>
                        </tr>
                        <tr>
                            <td>Tinggi Jok</td>
                            <td>:</td>
                            <td>860 mm</td>
                        </tr>
                        <tr>
                            <td>Wheelbase</td>
                            <td>:</td>
                            <td>1.405 mm</td>
                        </tr>
                        <tr>
                            <td>Minimum Jarak Terendah</td>
                            <td>:</td>
                            <td>130 mm</td>
                        </tr>
                        <tr>
                            <td>Bobot</td>
                            <td>:</td>
                            <td>199 kg</td>
                        </tr>
                        <tr>
                            <td>Kapasitas Bahan Bakar</td>
                            <td>:</td>
                            <td>17 L</td>
                        </tr>
                        <tr>
                            <td>Kapasitas Tangki Oli</td>
                            <td>:</td>
                            <td>3.9 L</td>
                        </tr>
                        <tr>
                            <td>Tipe Mesin</td>
                            <td>:</td>
                            <td>Berpendingin cairan, in-line 4 silinder,<br> 4-stroke, DOHC, 4-valves</td>
                        </tr>
                        <tr>
                            <td>Kapasitas Mesin</td>
                            <td>:</td>
                            <td>998 cc</td>
                        </tr>
                        <tr>
                            <td>Sistem Starter</td>
                            <td>:</td>
                            <td>Elektrik</td>
                        </tr>
                        <tr>
                            <td>Sistem Transmisi</td>
                            <td>:</td>
                            <td>Constant mesh 6-speed</td>
                        </tr>
                        <tr>
                            <td>Tenaga Maksimal</td>
                            <td>:</td>
                            <td>147.1 kW (200,0 PS) @ 13.500 rpm</td>
                        </tr>
                        <tr>
                            <td>Torsi Maksimal</td>
                            <td>:</td>
                            <td>112.4 Nm (11.5 kg-m) @ 11.500 rpm</td>
                        </tr>
                        <tr>
                            <td>Suspensi Depan</td>
                            <td>:</td>
                            <td>Upside-down telescopic fork, Ø 43 mm</td>
                        </tr>
                        <tr>
                            <td>Suspensi Belakang</td>
                            <td>:</td>
                            <td>Swingarm (Link suspension)</td>
                        </tr>
                        <tr>
                            <td>Rem Depan</td>
                            <td>:</td>
                            <td>Dual hydraulic disc, Ø 310 mm</td>
                        </tr>
                        <tr>
                            <td>Rem Belakang</td>
                            <td>:</td>
                            <td>Single hydraulic disc, Ø 220 mm</td>
                        </tr>
                        <tr>
                            <td>Ban Depan</td>
                            <td>:</td>
                            <td>120/70 ZR17M/C (58W)</td>
                        </tr>
                        <tr>
                            <td>Ban Belakang</td>
                            <td>:</td>
                            <td>190/55 ZR17M/C (75W)</td>
                        </tr>
                    </table>
                </div>
                <div class="content" id="Fitur">
                    <tr>
                        <td>1. Öhlins Electronic Racing Suspension</td><br>
                        <td>Yamaha R1M terbaru sudah dilengkapi dengan sistem suspensi modern, Öhlins Electronic Racing Suspension (ERS), yang saat ini masih menjadi sistem suspensi paling baik dari Yamaha. Software suspensi ini sangat canggih, sehingga mampu mengerem dan berkendara dengan lebih efisien dan nyaman.</td>
                    </tr><br><br>
                    <tr>
                        <td>2. Öhlins NPX Anti-Cavitation Gas Forks</td><br>
                        <td>Untuk sistem gasnya, Yamaha R1M dilengkapi dengan Öhlins NPX Anti-Cavitation Gas Forks, supaya menghindari kavitasi pada proses penguapan. Sistem ini membuat proses pembasahan mesin bekerja dengan lebih efektif, dengan begitu kontrol terhadap jalannya motor pun lebih akurat dan berkendara jadi terasa lebih aman.</td>
                    </tr><br><br>
                    <tr>
                        <td>3. Sistem Brake Control</td><br>
                        <td>Sistem pengereman Yamaha R1M mampu menganalisis data seperti akselerasi dan sudut yang aman saat berkendara. Sistemnya juga secara instan memodulasi tekanan hidrolik untuk mencegah ban terkunci, sehingga jalannya lebih mulus dan cepat saat digunakan untuk balapan maupun berkendara di jalan raya biasa.</td>
                    </tr><br><br>
                    <tr>
                        <td>4. Sistem Engine Brake Management</td><br>
                        <td>Dilengkapi dengan Engine Brake Management (EBM), membuat pengendara bisa memilih sendiri sistem pengereman yang sesuai dengan kondisi jalan dan berkendara. Menggunakan data dari berbagai sensor, sistem EBM menyesuaikan bukaan throttle, volume bahan bakar dan komponen lainnya, lalu memberi opsi dari 3 mode pengereman.</td>
                    </tr><br><br>
                    <tr>
                        <td>5. Mesin Crossplane 998 cc</td><br>
                        <td>Mesin Yamaha R1M dikembangkan dengan teknologi Yamaha M1 yang digunakan untuk MotoGp. Mesin ini menggunakan injektor dari Bosch dengan kapasitas 998 cc, karena itu efisiensi mesin pun jadi lebih baik.

                            Ada berbagai fitur tambahan yang mampu menghasilkan performa rpm luar biasa, mesin crossplane EU5 yang digunakan dilengkapi dengan sistem lubrikasi terbaik yang menghasilkan performa luar biasa tinggi dan memuaskan!</td>
                    </tr>
                </div>
            </div>
        </div>
    </div>

    <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>

    <script>
        function cari() {
            // Mendapatkan nilai dari elemen dropdown merk dan tipe
            var selectedBrand = document.getElementById('brand').value;
            var selectedType = document.getElementById('type').value;

            // Logika pencarian atau navigasi sesuai dengan nilai yang dipilih
            if (selectedBrand && selectedType) {
                // Contoh: Navigasi ke bagian "Stock" dengan merk dan tipe yang dipilih
                window.location.href = '#stock';
            } else {
                // Jika merk atau tipe tidak dipilih, berikan pesan atau lakukan tindakan lainnya
                alert('Harap pilih merk dan tipe motor.');
            }
        }


        function changeHeader(section) {
            var body = document.body;
            var header = document.getElementById('mainheader');
            var navLinks = document.querySelectorAll('#mainNav a');

            // Menghapus kelas "active" dari semua tautan
            navLinks.forEach(function(link) {
                link.classList.remove('active');
            });

            // Menghapus kelas-kelas yang menandakan status aktif dari elemen header
            header.classList.remove('stock-active', 'about-active', 'contact-active');

            if (section === 'home') {
                // Untuk "Home", menghapus background header dan mengatur top ke 0
                header.style.backgroundColor = '';
                header.style.top = '0';
            } else {
                // Untuk "Stock", "About", atau "Contact Us", atur background header dan top ke -100%
                header.style.backgroundColor = '#333';
                header.style.top = '0';
                header.style.width = '100%';
                header.style.height = '10%';
                // Menambahkan kelas "active" pada tautan yang ditekan
                var activeLink = document.querySelector('#mainNav a[href="#' + section + '"]');
                activeLink.classList.add('active');

                // Menambahkan kelas yang menandakan status aktif pada elemen header
                header.classList.add(section + '-active');
            }
        }

        function showFloatingBox(event) {
            // Mengambil elemen floating box
            var floatingBox = document.getElementById('floatingBox');

            // Menampilkan atau menyembunyikan floating box saat tombol ditekan
            floatingBox.style.display = (floatingBox.style.display === 'block') ? 'none' : 'block';

            // Mencegah event click dari menyebabkan navigasi
            event.preventDefault();
        }

        function showTab(tabId) {
            // Hide all tabs and deactivate buttons
            var tabs = document.querySelectorAll('.content');
            tabs.forEach(function(tab) {
                tab.classList.remove('active');
            });

            var buttons = document.querySelectorAll('.tab-button');
            buttons.forEach(function(button) {
                button.classList.remove('active');
            });

            // Show the selected tab and activate button
            document.getElementById(tabId).classList.add('active');
            event.currentTarget.classList.add('active');
        }
    </script>
</body>

</html>