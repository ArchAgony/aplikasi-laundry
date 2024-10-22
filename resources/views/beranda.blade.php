<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styleberanda.css">
    <style>
        .img-fluid {
            background-image: url(/images/bg.jpg);
            height: 600px;
            /* background-attachment: fixed; */
            /* background-position: center; */
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="img-fluid">
        <nav class="navbar navbar-expand-lg bg-transparent" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">Aplikasi Laundry</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active icon-link icon-link-hover" aria-current="page"
                                href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="perbaikan()">Karyawan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="perbaikan()">Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="perbaikan()">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="perbaikan()">Barang</a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-outline-light" onclick="perbaikan()">
                    Daftar
                </button>
            </div>
        </nav>
        <div class="container pt-5 mt-3 text-light">
            <div class="row">
                <div class="col-7 text-center">
                    <div class="display-5">Lebih Banyak Waktu Untuk Anda, Lebih Sedikit Waktu Untuk Mencuci : Aplikasi
                        Laundry Siap Membantu Anda</div>
                    <button class="btn btn-outline-light mt-5 btn-lg" onclick="perbaikan()">
                        Langganan Sekarang
                    </button>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col text-center">
                <div class="display-5">Solusi Andal Untuk Kehidupan Yang Lebih Mudah</div>
            </div>
            <div class="col pt-4">
                <div class="fs-5">Dengan komitmen untuk memberikan layanan yang praktis dan efisien, kami hadir untuk
                    membantu mempermudah kebutuhan Anda. Kami menggabungkan teknologi modern dengan solusi ramah
                    lingkungan untuk hasil yang terbaik.</div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col">
                <div class="container card border-success-subtle">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="grey"
                            class="bi bi-box-seam-fill px-2 py-2 bg-success-subtle rounded-pill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                        </svg>
                        <div class="fs-5 pt-2">Layanan Penjemputan Fleksibel</div>
                        <div class="fs-6 pt-2">Nikmati kemudahan layanan penjemputan dan pengiriman kami yang dapat
                            disesuaikan dengan jadwal Anda. Kami siap mengantar langsung ke pintu Anda, tanpa repot!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container card border-success-subtle">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="grey"
                            class="bi bi-cart-check-fill px-2 py-2 bg-success-subtle rounded-pill" viewBox="0 0 16 16">
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708" />
                        </svg>
                        <div class="fs-5 pt-2">Produk Berbasis Lingkungan</div>
                        <div class="fs-6 pt-2">Kami hanya menggunakan bahan pembersih yang ramah lingkungan dan aman
                            untuk kesehatan. Pakaian Anda tetap bersih, segar, dan bebas dari zat berbahaya.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container card border-success-subtle">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="grey"
                            class="bi bi-basket2-fill px-2 py-2 bg-success-subtle rounded-pill" viewBox="0 0 16 16">
                            <path
                                d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1" />
                        </svg>
                        <div class="fs-5 pt-2">Layanan Dry Cleaning Berkualitas</div>
                        <div class="fs-6 pt-2">Serahkan pada ahli kami untuk menjaga kualitas pakaian Anda dengan
                            layanan dry cleaning profesional. Hasil yang sempurna dengan perawatan khusus untuk setiap
                            pakaian.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5 text-center">
        <div class="display-5">Layanan Kami</div>
        <div class="fs-5 pt-2 px-5 mx-5">Didirikan dengan misi untuk menyederhanakan hidup Anda dan meningkatkan
            pengalaman mencuci Anda, kami memadukan teknologi modern dan praktik ramah lingkungan.</div>
    </div>
    <div class="container pt-5">
        <div class="border rounded border-primary-subtle">
            <div class="position-relative">
                <div class="border position-absolute top-0 start-50 translate-middle py-2 px-2 rounded-pill bg-primary-subtle"
                    style="width: 1000px">
                    <div class="row">
                        <div class="col">
                            <div class="border px-1 py-1 fs-6 bg-light-subtle rounded-pill text-center fw-semibold">
                                Cuci & lipat</div>
                        </div>
                        <div class="col">
                            <div class="border px-1 py-1 fs-6 bg-light-subtle rounded-pill text-center"
                                onclick="pengembangan()">Cuci kering
                            </div>
                        </div>
                        <div class="col">
                            <div class="border px-1 py-1 fs-6 bg-light-subtle rounded-pill text-center"
                                onclick="pengembangan()">Pengambilan
                                pakaian
                            </div>
                        </div>
                        <div class="col">
                            <div class="border px-1 py-1 fs-6 bg-light-subtle rounded-pill text-center"
                                onclick="pengembangan()">Layanan setrika
                            </div>
                        </div>
                        <div class="col">
                            <div class="border px-1 py-1 fs-6 bg-light-subtle rounded-pill text-center"
                                onclick="pengembangan()">Penghilang noda
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5 px-5">
                <div class="row">
                    <div class="col">
                        <div class="fs-2 lh-sm">Pencucian Mudah, Lipatan Sempurna</div>
                        <div class="fs-5 pt-2">Layanan Cuci & Lipat kami dirancang untuk memudahkan hidup Anda. Cukup
                            serahkan cucian Anda, dan kami akan mengurus sisanya. Dari memilah dan mencuci hingga
                            mengeringkan dan melipat, kami menangani setiap langkah dengan cermat dan hati-hati.
                        </div>
                        <div class="fs-2 pt-3 pb-2 lh-sm">Apa yang kami tawarkan</div>
                        <div class="row pb-2">
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32"
                                    fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                </svg>
                            </div>
                            <div class="col fs-5">Pembersihan kompherensif</div>
                        </div>
                        <div class="row pb-2">
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32"
                                    fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                </svg>
                            </div>
                            <div class="col fs-5">Lipatan sempurna</div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                </svg>
                            </div>
                            <div class="col fs-5">Perhatian terhadap detail</div>
                        </div>
                    </div>
                    <div class="col">
                        <img src="/images/lipatan.webp" alt="" class="img-fluid rounded"
                            style="height: 415px" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-info mt-2 py-3">
        <div class="text-center">
            <div class="fs-4 fw-semibold">©Dava Ari Ardiansyah</div>
            <div class="fs-4 fw-semibold">https://github.com/ArchAgony/aplikasi-laundry.git</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        function perbaikan() {
            Swal.fire({
                title: "Sedang dalam perbaikan!",
                text: 'Pantau terus pembaruannya di commit terbaru ',
                icon: "info"
            });
        }

        function pengembangan() {
            Swal.fire({
                title: "fitur ini sedang tahap pengembangan! si admin lagi belajar js dom",
                width: 600,
                padding: "3em",
                color: "#716add",
                background: "#fff url(/images/trees.png)",
                backdrop: `
    rgba(0,0,123,0.4)
    url("/images/nyan-cat.gif")
    left top
    no-repeat
  `
            });
        }
    </script>
</body>

</html>
