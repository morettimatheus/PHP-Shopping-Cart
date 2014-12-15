<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function index() {
		$this->load->view('payment/header');
		$this->load->view('payment/body');
		$this->load->view('payment/footer');
	}

}

/* End of file payment.php */
/* Location: ./application/controllers/payment.php */
?>