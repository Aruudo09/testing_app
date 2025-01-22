<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_spk extends CI_Controller
{
    public function index()
    {
        // Load library FPDF
        $this->load->library('fpdf');

        // Inisialisasi FPDF
        $pdf = new Pdf();
        $pdf->AddPage();

        // Path gambar background
        $imagePath = FCPATH . 'assets/img/kopmorena.jpg';
        if (file_exists($imagePath)) {
            // Tambahkan gambar background di halaman
            $pdf->Image($imagePath, 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());
        }

        // Nomor SPK
        $pdf->Ln(30);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(30, 7, 'Nomor', 0, 0);
        $pdf->Cell(2, 7, ':', 0, 0);
        $pdf->Cell(0, 7, 'MCS12025010543', 0, 1);

        $pdf->Cell(30, 5, 'Lampiran', 0, 0);
        $pdf->Cell(2, 5, ':', 0, 0);
        $pdf->Cell(0, 5, '1 Lembar Estimasi Perbaikan', 0, 1);

        $pdf->Cell(30, 7, 'Perihal', 0, 0);
        $pdf->Cell(2, 7, ':', 0, 0);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(0, 7, 'Perbaikan Kendaraan', 0, 1);
        $pdf->Ln(5);

        // Header Surat
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(0, 4, 'Auto 2002', 0, 1);
        $pdf->Cell(0, 7, 'Jl. Paripurna Atmil Jaya No. 78', 0, 1);
        $pdf->Cell(0, 5, '082297663333', 0, 1);
        $pdf->Ln(5);

        // Isi Surat
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(0, 5, 'Dengan Hormat,', 0, 1);
        $pdf->Ln(3);
        $pdf->MultiCell(0, 5, "Berdasarkan informasi dari bengkel perihal pemberitahuan biaya perbaikan untuk kendaraan PT Mandiri Cipta Sejahtera, maka dengan ini dapat kami sampaikan untuk pengerjaan perbaikan kendaraan tersebut dapat dilakukan. Adapun rinciannya adalah sebagai berikut :");
        $pdf->Ln(5);

        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(2, 7, '', 0, 0);
        $pdf->Cell(40, 7, 'Customer', 0, 0);
        $pdf->Cell(3, 7, ':', 0, 0);
        $pdf->Cell(0, 7, 'PT. FEDERAL INTERNATIONAL FINANCE', 0, 1);

        $pdf->Cell(2, 7, '', 0, 0);
        $pdf->Cell(40, 5, 'Cabang', 0, 0);
        $pdf->Cell(3, 5, ':', 0, 0);
        $pdf->Cell(0, 5, 'CIANJUR', 0, 1);

        $pdf->Cell(2, 7, '', 0, 0);
        $pdf->Cell(40, 7, 'No. Polisi', 0, 0);
        $pdf->Cell(3, 7, ':', 0, 0);
        $pdf->Cell(0, 7, 'B 9504 KAK', 0, 1);

        $pdf->Cell(2, 7, '', 0, 0);
        $pdf->Cell(40, 5, 'No. Rangka', 0, 0);
        $pdf->Cell(3, 5, ':', 0, 0);
        $pdf->Cell(0, 5, 'MHKAA1AY0PK034732', 0, 1);

        $pdf->Cell(2, 7, '', 0, 0);
        $pdf->Cell(40, 7, 'No. Mesin', 0, 0);
        $pdf->Cell(3, 7, ':', 0, 0);
        $pdf->Cell(0, 7, '1NRG241649', 0, 1);

        $pdf->Cell(2, 7, '', 0, 0);
        $pdf->Cell(40, 5, 'Jenis Kendaraan', 0, 0);
        $pdf->Cell(3, 5, ':', 0, 0);
        $pdf->Cell(0, 5, 'ALL NEW XENIA 1.3 X MT', 0, 1);

        $pdf->Cell(2, 7, '', 0, 0);
        $pdf->Cell(40, 7, 'Tahun', 0, 0);
        $pdf->Cell(3, 7, ':', 0, 0);
        $pdf->Cell(0, 7, '2023', 0, 1);

        $pdf->Cell(2, 7, '', 0, 0);
        $pdf->Cell(40, 5, 'Jenis Pekerjaan', 0, 0);
        $pdf->Cell(3, 5, ':', 0, 0);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(0, 5, 'Perbaikan Kendaraan', 0, 1);

        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(2, 7, '', 0, 0);
        $pdf->Cell(40, 7, 'Sistem Pembayaran', 0, 0);
        $pdf->Cell(3, 7, ':', 0, 0);
        $pdf->Cell(0, 7, 'Transfer via Bank', 0, 1);

        $pdf->Cell(2, 7, '', 0, 0);
        $pdf->Cell(40, 5, 'Harga Perbaikan', 0, 0);
        $pdf->Cell(3, 5, ':', 0, 0);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(0, 5, 'Rp. 2.400.000', 0, 1);
        $pdf->Ln(5);

        // Penutup
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(0, 5, "Mengenai pembayaran tagihan (Invoice) diharap dapat dikirimkan kepada pihak kami di PT. Mandiri Cipta Sejahtera Ruko Niaga Citra Grand Blok R9 No. 5-6 Jl. Alternatif Transyogie Cibubur Telp. (021) 84311622 ext. 209 Fax. (021) 84311626 Up. Pristiani (Bag. Asuransi)");
        $pdf->Ln(3);
        $pdf->MultiCell(0, 5, "Mengingat pentingnya kebutuhan kendaraan tersebut, kami berharap kendaraan tersebut dapat diselesaikan tepat pada waktunya.");
        $pdf->Ln(3);
        $pdf->MultiCell(0, 5, "Demikian surat ini kami sampaikan, atas kerjasamanya kami ucapkan terima kasih.");
        $pdf->Ln(8);

        // Tanda Tangan
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(60, 7, 'Hormat Kami,', 0, 0, 'C');
        $pdf->Cell(60, 7, 'Mengetahui,', 0, 0, 'C');
        $pdf->Cell(60, 7, 'Menyetujui,', 0, 1, 'C');
        $pdf->Ln(2);
        // Load image
        $pdf->Image(base_url('assets/img/ttd/1003.png'), 25, 225, 30, 30);
        $pdf->Image(base_url('assets/img/ttd/1004.png'), 85, 225, 30, 30);
        $pdf->Image(base_url('assets/img/ttd/1005.png'), 145, 225, 30, 30);
        $pdf->Ln(20);
        $pdf->SetFont('Arial', 'BU', 10);
        $pdf->Cell(60, 7, 'Pristiani', 0, 0, 'C');
        $pdf->Cell(60, 7, 'Hansri Widiyastanto', 0, 0, 'C');
        $pdf->Cell(60, 7, 'M.Charles Manalu', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(10, 5, '', 0, 0, 'C');
        $pdf->Cell(40, 5, 'Insurance Staff', 0, 0, 'C');
        $pdf->Cell(81, 5, 'Asr Sub.Dept.Head', 0, 0, 'C');
        $pdf->Cell(60, 5, 'Operational Manager', 0, 1);

        // Output PDF
        $pdf->Output();
    }
}
