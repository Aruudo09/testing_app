<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once __DIR__ . '/../../vendor/autoload.php';


class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function generate_mpdf()
	{
		// $this->load->view('generate_mpdf');
		// Data yang dikirim ke view
		$data = [
			'title' => 'PDF Title',
			'message' => 'This is a dynamically generated PDF.'
		];

		// Muat view dengan data
		$html = $this->load->view('pu_penawaran_read', $data, true);
		$mpdf = new \Mpdf\Mpdf([
			'setAutoTopMargin' => 'stretch', // Atur margin atas otomatis
		]);
		$mpdf->SetHTMLHeader('
		<div class="header-logo">
                <img src="C:\xampp\htdocs\testing_app\asset\Header.png" alt="header pengenumroh">
            </div>');
		$mpdf->SetHTMLFooter('<div class="footer-logo">
                <img src="C:\xampp\htdocs\testing_app\asset\Footer.png" alt="footer pengenumroh">
            </div>');
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
}
