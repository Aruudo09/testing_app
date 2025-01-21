<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once __DIR__ . '/../../vendor/autoload.php';

class Mt_cv_crew extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mt_cv_crew');
        // $this->M_login->getsecurity();
    }

    public function generate_mpdf()
    {
        $booking = $this->M_mt_cv_crew->getBooking();


        // Inisialisasi mPDF di luar loop
        $mpdf = new \Mpdf\Mpdf([
            'setAutoTopMargin' => 'stretch', // Atur margin atas otomatis
            'setAutoBottomMargin' => 'stretch',
            'format' => 'A4'
        ]);

        $h = $mpdf->hPt;
        $w = $mpdf->wPt;

        // Muat stylesheet
        $stylesheet = file_get_contents(base_url('asset/style-penawaran.css')); // Pastikan path valid

        // Tulis stylesheet ke PDF terlebih dahulu
        $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

        $mpdf->SetHTMLHeader('<div class="header-boy" style="text-align: center;"></div>');


        // Loop untuk setiap booking
        for ($i = 0; $i < count($booking); $i++) {
            $info = [
                'no_booking' => $booking[$i]['no_booking'],
                'nopol' => $booking[$i]['nopol']
            ];

            $crew = $this->M_mt_cv_crew->getCrew($info);
            // Data yang dikirim ke view
            $data = [
                'title' => 'PDF Title for Booking ' . ($i + 1),
                'message' => 'This is a dynamically generated PDF for Booking.',
                'booking' => $booking[$i], // Ambil booking per iterasi
                'crews' => $crew
            ];

            // Muat view dengan data
            $html = $this->load->view('mt_cv_crew', $data, true);

            // Menambahkan background image
            $url = base_url('asset/bg_cv_driver.jpg');
            $mpdf->SetDefaultBodyCSS('background', "url(" . $url . ")");
            $mpdf->SetDefaultBodyCSS('background-image-resize', 6);

            // Tulis HTML ke PDF
            $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);

            // Tambahkan halaman baru jika bukan iterasi terakhir
            if ($i < count($booking) - 1) {
                $mpdf->AddPage();
            }
        }

        // Tampilkan atau unduh PDF
        $mpdf->Output('generated_file.pdf', 'I'); // 'I' untuk menampilkan di browser, 'D' untuk download
    }
}
