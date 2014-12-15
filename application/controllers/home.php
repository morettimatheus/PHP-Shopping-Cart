<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}
class Home extends CI_Controller {

	public function index() {
		$this->load->model('Products');
		$this->Products->createProducts();
		$data['products'] = $this->Products->getProducts();
		$this->load->view('home/header');
		$this->load->view('home/body', $data);
		$this->load->view('home/footer');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */