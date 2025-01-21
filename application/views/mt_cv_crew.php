<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="C:\xampp\htdocs\testing_app\asset\style-penawaran.css"> -->
</head>

<body>

    <div class="container-table1">
        <table class="data-master1">
            <tr>
                <td style="vertical-align: top;">Nama Customer</td>
                <td style="vertical-align: top;">:</td>
                <td><?= $booking['nama_cust'] ?></td>
            </tr>
            <tr>
                <td>Nopol</td>
                <td>:</td>
                <td><?= $booking['nopol'] ?></td>
            </tr>
            <tr>
                <td>No. Telepon Customer</td>
                <td>:</td>
                <td><?= $booking['telp_cust'] ?></td>
            </tr>
            <tr>
                <td>PIC Perjalanan</td>
                <td>:</td>
                <td><?= $booking['pic'] ?></td>
            </tr>
            <tr>
                <td>No. Telepon PIC Perjalanan</td>
                <td style="vertical-align: top;">:</td>
                <td style="vertical-align: top;"><?= $booking['telp_cust'] ?></td>
            </tr>
        </table>
    </div>
    <div class="container-table2">
        <table class="data-master1">
            <tr>
                <td style="vertical-align: top;">Tujuan</td>
                <td style="vertical-align: top;">:</td>
                <td><?= $booking['nama_cust'] ?></td>
            </tr>
            <tr>
                <td>PIC Perjalanan</td>
                <td>:</td>
                <td><?= $booking['nopol'] ?></td>
            </tr>
            <tr>
                <td>No Tlp PIC Perjalanan</td>
                <td>:</td>
                <td><?= $booking['telp_cust'] ?></td>
            </tr>
            <tr>
                <td>Type Kendaraan</td>
                <td>:</td>
                <td><?= $booking['pic'] ?></td>
            </tr>
            <tr>
                <td>Nopol</td>
                <td>:</td>
                <td><?= $booking['telp_cust'] ?></td>
            </tr>
        </table>
    </div>

    <div class="crew-container">
        <?php foreach ($crews as $crew) { ?>
            <div class="crew">
                <div class="image-crew">
                    <img src="<?= base_url('asset/' . $crew->foto) ?>" alt="">
                </div>
                <div class="driver-data">
                    <table>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><?= $crew->nama_lengkap ?></td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td>:</td>
                            <td><?= $crew->nama_panggilan ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?= $crew->jabatan ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td>:</td>
                            <td><?= $crew->tmpt_tgl_lahir ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        <?php } ?>
    </div>

</body>

</html>