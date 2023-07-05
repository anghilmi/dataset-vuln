@include('layouts landing page.header')
@include('layouts landing page.nav')
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div
                class="col-lg-6 d-flex flex-column justify-content-center"
            >
                <h1 class="text-center" data-aos="fade-up">AYO</h1>
                <h1 class="text-center" data-aos="fade-up">
                    PERIKSA PAYUDARA SENDIRI
                </h1>
                <h2
                    class="text-center"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                    Deteksi Dini Kanker Payudara
                </h2>
                <div data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="text-center"
                        class="text-center text-lg-start"
                    >
                        <a
                            href="{{ route('login') }}"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"
                        >
                            <span>Go Sadari</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="col-lg-6 hero-img"
                data-aos="zoom-out"
                data-aos-delay="200"
            >
                <img
                    src="{{ asset('FlexStart') }}/img/vector.jpg"
                    class="img-fluid"
                    alt=""
                />
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
              <h2>INFORMASI</h2>
                <div
                    class="col-lg-6 d-flex flex-column justify-content-center"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div class="content">

                        <h2>Periksa Payudara Sendiri</h2>
                        <p>
                            Periksa payudara sendiri adalah cara paling
                            sederhana untuk mendeteksi kanker payudara
                            sedini mungkin. Dengan melakukannya secara
                            rutin, kamu bisa menyadari bila ada
                            perubahan yang tidak biasa pada payudara,
                            sehingga bisa melakukan pemeriksaan
                            diagnosis lanjutan. Kanker payudara yang
                            ditemukan lebih awal, saat masih kecil dan
                            belum menyebar, lebih mudah untuk diobati.
                            Wanita dianjurkan untuk melakukan
                            pemeriksaan payudara sendiri 7-10 hari
                            setiap bulannya.
                        </p>
                        <div class="text-center text-lg-start">
                            <a
                                href="#"
                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center"
                            >
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="col-lg-6 d-flex align-items-center"
                    data-aos="zoom-out"
                    data-aos-delay="200"
                >
                    <img
                        src="{{ asset('FlexStart') }}/img/about.jpg"
                        class="img-fluid"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>INFORMASI</h2>
                <p>Cara Periksa Payudara Sendiri</p>
            </header>

            <div class="row">
                <div
                    class="col-lg-4"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div class="box">
                        <img
                            src="{{ asset('FlexStart') }}/img/info-1.jpg"
                            class="img-fluid"
                            alt=""
                        />
                        <h3>SADARI di kamar mandi</h3>
                        <p>
                            SADARI saat mandi yang dapat dimulai dengan mengangkat satu tangan ke belakang kepala. Kemudian, gunakan tangan lain yang telah dilumuri sabun untuk meraba payudara
                            di sisi tangan yang terangkat. Gunakan jari untuk menekan-nekan bagian demi bagian dengan lembut.
                            Lakukan hal yang sama pada payudara satunya. Pemeriksaan SADARI saat sedang mandi terbilang cukup efektif karena busa sabun akan memudahkan pergerakan
                            tangan untuk memeriksa benjolan atau perubahan pada payudara dan area ketiak.
                        </p>
                    </div>
                </div>

                <div
                    class="col-lg-4 mt-4 mt-lg-0"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                    <div class="box">
                        <img
                            src="{{ asset('FlexStart') }}/img/info-2.jpg"
                            class="img-fluid"
                            alt=""
                        />
                        <h3>SADARI sambil bercermin</h3>
                        <p>
                            Perhatikan payudara Anda. Kebanyakan wanita memiliki payudara yang ukurannya tidak sama besar (payudara kanan lebih besar atau lebih kecil daripada yang kiri).
                            Berdirilah dengan posisi lengan dibiarkan lurus ke bawah. Perhatikan bentuk, ukuran, permukaan dan warna kulit, juga bentuk puting payudara. Lihatlah ada perubahan atau tidak
                            Letakkan tangan pada pinggang dan tekan kuat-kuat untuk mengencangkan otot dada. Perhatikan payudara sambil berkaca dari sisi kiri ke kanan dan sebaliknya.
                            Membungkuklah di depan kaca, sehingga payudara terjulur ke bawah. Perhatikan dan raba untuk memeriksa apakah ada perubahan tertentu pada payudara.
                            Tautkan kedua tangan di belakang kepala dan tekan ke dalam. Perhatikan kedua payudara Anda, termasuk di bagian bawah.
                            Periksa apakah terdapat cairan yang keluar dari puting Anda. Tempatkan jempol dan jari telunjuk Anda di sekitar puting, lalu tekan perlahan dan perhatikan apakah ada cairan yang keluar. Ulangi pada payudara yang lain.
                        </p>
                    </div>
                </div>

                <div
                    class="col-lg-4 mt-4 mt-lg-0"
                    data-aos="fade-up"
                    data-aos-delay="600"
                >
                    <div class="box">
                        <img
                            src="{{ asset('FlexStart') }}/img/info-3.jpg"
                            class="img-fluid"
                            alt=""
                        />
                        <h3>SADARI sambil berbaring</h3>
                        <p>
                            Baringkan tubuh Anda di tempat tidur atau permukaan datar lain yang nyaman, lalu tempatkan gulungan handuk atau bantal kecil di bawah pundak. Kemudian, tempatkan tangan kanan
                            di bawah kepala. Lumuri tangan kiri dengan losion dan gunakan jari tangan untuk meraba payudara kanan. Lakukan perabaan payudara mengikuti arah jarum jam dengan gerakan melingkar.
                            Setelah mencapai satu lingkaran, geser jari dan mulailah kembali hingga seluruh permukaan payudara terjamah, termasuk putingnya.
                            Tidak perlu terburu-buru saat melakukan pemeriksaan. Pastikan semua permukaan payudara telah teraba dengan seksama. Pemeriksaan SADARI dengan cara berbaring ini membuat payudara melebar sehingga memudahkan untuk diperiksa.
                            Saat dan setelah melakukan pemeriksaan SADARI Anda harus tetap tenang jika mendapati adanya perubahan pada payudara. Meski harus tetap waspada, sebagian besar perubahan fisik tidak mengarah pada kanker payudara.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Values Section -->

    <!-- ======= Features Section ======= -->

    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->

    <!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </header>

            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>
                                    +62 859-5262-1784<br />+62 895-3334-8202<br />+62 831-0123-1336
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>
                                    jannahvvmj@gmail.com<br />nurulauliaseptiani9@gmailcom<br />ferasantika21@student.polindra.ac.id
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- <div class="col-lg-6">
                    <form
                        action="forms/contact.php"
                        method="post"
                        class="php-email-form"
                    >
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="Your Name"
                                    required
                                />
                            </div>

                            <div class="col-md-6">
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    placeholder="Your Email"
                                    required
                                />
                            </div>

                            <div class="col-md-12">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="subject"
                                    placeholder="Subject"
                                    required
                                />
                            </div>

                            <div class="col-md-12">
                                <textarea
                                    class="form-control"
                                    name="message"
                                    rows="6"
                                    placeholder="Message"
                                    required
                                ></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank
                                    you!
                                </div>

                                <button type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End #main -->
@include('layouts landing page.footer');
