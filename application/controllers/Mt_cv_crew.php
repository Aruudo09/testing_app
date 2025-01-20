<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once __DIR__ . '/../../vendor/autoload.php';

class Mt_cv_crew extends CI_Controller
{
    public function generate_mpdf()
    {
        // Data yang dikirim ke view
        $data = [
            'title' => 'PDF Title',
            'message' => 'This is a dynamically generated PDF.'
        ];

        // Muat view dengan data
        $html = $this->load->view('mt_cv_crew', $data, true);

        // Muat stylesheet
        $stylesheet = file_get_contents('http://localhost/testing_app/asset/style-penawaran.css'); // Pastikan path valid

        // Inisialisasi mPDF
        $mpdf = new \Mpdf\Mpdf([
            'setAutoTopMargin' => 'stretch', // Atur margin atas otomatis
            'format' => 'A4'
        ]);

        // Atur header HTML
        $mpdf->SetHTMLHeader('
    <div class="header-logo">
        <h4>CV CREW MORENA TRANS</h4>        
    </div>');

        // Menambahkan background image
        $mpdf->SetDefaultBodyCSS('background', "url('C:\xampp\htdocs\testing_app\asset\BG CV Driver.jpg')");
        $mpdf->SetDefaultBodyCSS('background-image-resize', 4); // Resize sesuai rasio aspek halaman

        // $mpdf->SetDefaultBodyCSS('background', "C:\xampp\htdocs\testing_app\asset\BG CV Driver.jpg");
        // $mpdf->SetDefaultBodyCSS('background-image-resize', 6);

        // Tulis stylesheet ke PDF terlebih dahulu
        $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

        // Tulis HTML ke PDF
        $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);

        // Tampilkan atau unduh PDF
        $mpdf->Output();
    }
}
