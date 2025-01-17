<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="C:\xampp\htdocs\testing_app\asset\style-penawaran.css">
</head>

<body>
    <div class="container">
        <div class="canvas">
            <main>
                <div class="header-content">
                    <div style="position: absolute; left: 100px;">
                        <img class="img-logo" src="C:\xampp\htdocs\testing_app\asset\Logo_MT.png" alt="morenaTrans">
                    </div>
                    <div class="row">
                        <table>
                            <tr>
                                <td>No</td>
                                <td>:</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Tanggal Dokumen</td>
                                <td>:</td>
                                <td>19-01-2022</td>
                            </tr>
                            <tr>
                                <td>Berlaku s.d.</td>
                                <td>:</td>
                                <td>19-01-2024</td>
                            </tr>
                            <tr>
                                <td>Produk</td>
                                <td>:</td>
                                <td>Sepatu</td>
                            </tr>
                            <tr>
                                <td>Kepada</td>
                                <td>:</td>
                                <td>Masruroh</td>
                            </tr>
                        </table>
                        <div class="qr-code">
                            <img src="data:image/png;base64, <?= $qr_code ?>" alt="qrcode" class="img-qrcode">
                            <!-- <img src="C:\xampp\htdocs\testing_app\asset\favicon-pu.png" alt="pengenumroh-logo" class="pu-logo"> -->
                        </div>
                    </div>
                </div>
                <div class="layanan">
                    <div class="header">
                        <h1>LAYANAN</h1>
                    </div>
                    <div class="row">
                        <div class="left-side">
                            <p>Deskripsi :</p>
                            <p></p>
                        </div>
                        <div class="right-side">
                            <table>
                                <tr>
                                    <td>Keberangkatan</td>
                                    <td>:</td>
                                    <td>19-02-2023</td>
                                </tr>
                                <tr>
                                    <td>Durasi</td>
                                    <td>:</td>
                                    <td>2<span>Hari</span></td>
                                </tr>
                                <tr>
                                    <td>Berangkat Dari</td>
                                    <td>:</td>
                                    <td>Cikampek</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="layanan-list">
                        <div class="left-side">
                            <p>Layanan Termasuk :</p>
                            <ol>
                                <li>The best</li>
                            </ol>
                        </div>
                        <div class="right-side">
                            <p>Layanan Tidak Termasuk :</p>
                            <ol>
                                <li>The best</li>
                            </ol>
                            <div class="extra-content">
                                <table>

                                    <tr>
                                        <td>Hotel Mekkah</td>
                                        <td>5</td>
                                        <td>:</td>
                                        <td>Fermount</td>
                                    </tr>

                                    <td><i class="fas fa-solid fa-plane"></i>Keberangkatan</td>
                                    <td></td>
                                    <td>:</td>
                                    <td>Bekasi</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-solid fa-plane"></i>Kepulangan</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>Jakarta</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="harga-paket">
                    <div class="header">
                        <h1>HARGA PAKET</h1>
                    </div>
                    <table>
                        <tr>
                            <td>Quad</td>
                            <td>:</td>
                            <td>Rp. 2.000.000</td>
                        </tr>
                        <tr>
                            <td>Triple</td>
                            <td>:</td>
                            <td>Rp. 3.000.000</td>
                        </tr>
                        <tr>
                            <td>Double</td>
                            <td>:</td>
                            <td>Rp. 5.000.000</td>
                        </tr>
                    </table>
                </div>

                <div class="layanan-pasti">
                    <div class="header">
                        <h1>LAYANAN PASTI</h1>
                    </div>
                    <div class="row">
                        <div class="left-side">
                            <ol>
                                <li>Konsultasi Gratis </li>
                                <li>Gratis Bantuan Pembuatan Paspor</li>
                                <li>Gratis Antar Dokumen & Perlengkapan</li>
                                <li>Gratis Pendampingan Manasik</li>
                            </ol>
                        </div>
                        <div class="right-side">
                            <ol>
                                <li>Gratis Handling Keberangkatan</li>
                                <li>Gratis Handling Kepulangan</li>
                                <li>Jaminan Pasti Berangkat</li>
                                <li>Garansi 100% Uang Kembali Apabila Travel Gagal Memberangkatkan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </main>
            <!-- <div class="footer-logo">
                <img src="C:\xampp\htdocs\testing_app\asset\Footer.png" alt="footer pengenumroh">
            </div> -->
        </div>
    </div>
    <div class="container">
        <div class="canvas2">
            <!-- <div class="header-logo">
                <img src="C:\xampp\htdocs\testing_app\asset\Footer.png" alt="header pengenumroh">
            </div> -->
            <main>
                <table class="rundown">
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Kegiatan</th>
                    </tr>

                    <tr>
                        <td>Sabtu</td>
                        <td>09-01-2000</td>
                        <td>Test</td>
                    </tr>

                </table>
            </main>
            <!-- <div class="footer-logo">
                <img src="C:\xampp\htdocs\testing_app\asset\Footer.png" alt="footer pengenumroh">
            </div> -->
        </div>
    </div>

</html>