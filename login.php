<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <!-- Container untuk mengatur layout dengan margin atas (mt-5) -->
    <div class="row justify-content-center">
        <!-- Baris yang diatur di tengah secara horizontal -->
        <div class="col-md-6">
            <!-- Kolom dengan lebar medium -->

            <!-- Alert untuk menampilkan pesan login gagal -->
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Login Gagal</strong> Periksa kembali username dan Passwordnya.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <!-- Kartu (card) untuk menampung elemen-elemen login -->
            <div class="card">
                <!-- Header kartu dengan judul "Halaman Login" -->
                <div class="card-header text-center">
                    Halaman Masuk
                </div>

                <!-- Formulir login dengan aksi ke "cekLogin.php" menggunakan metode POST -->
                <form action="cekLogin.php" method="post">
                    <!-- Badan kartu (card-body) dengan elemen-elemen formulir -->
                    <div class="card-body">

                        <!-- Input pertama untuk username -->
                        <label for="username" class="form-label">Siapa Nama Leader le Minerale</label>
                        <div class="input-group">
                            <!-- Ikon person-circle dari Bootstrap Icons -->
                            <span class="input-group-text" id="basic-addon3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                            </span>
                            <!-- Input teks untuk mengambil nilai username -->
                            <input type="text" class="form-control" id="username" name="username" required
                                placeholder="masukkan nama" aria-describedby="basic-addon3 basic-addon4">
                        </div>

                        <!-- Input kedua untuk password -->
                        <label for="Password" class="form-label">Berapa Jumlah Member Le Minerale</label>
                        <div class="input-group">
                            <!-- Ikon key dari Bootstrap Icons -->
                            <span class="input-group-text" id="basic-addon3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-key" viewBox="0 0 16 16">
                                    <path
                                        d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5" />
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg>
                            </span>
                            <!-- Input teks untuk mengambil nilai password -->
                            <input type="password" class="form-control" id="password" name="password" required
                                placeholder="masukkan angka" aria-describedby="basic-addon3 basic-addon4">
                        </div>

                        <!-- Tombol untuk mengirimkan formulir -->
                        <div class="row mb-3">
                            <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
