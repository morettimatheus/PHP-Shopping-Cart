<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Cart extends CI_Controller {

	public function index() {
		$this->load->model('Products');
		$this->Products->createProducts();
		$data['products'] = $this->Products->getProducts();
		$this->load->view('cart/header');
		$this->load->view('cart/body', $data);
		$this->load->view('cart/footer');

	}
	public function addProductToCart() {
		$product = $this->input->post('productNo');
		$_SESSION['cart'][$product]["id"] = $product;
		$_SESSION['cart'][$product]["qty"] = $_SESSION['cart'][$product]["qty"] + 1;

	}
	public function removeProductFromCart() {
		$remove = $this->input->post('removeNo');
		unset($_SESSION['cart'][$remove]);
		var_dump($_SESSION['cart']);
	}
	public function changeQuantity(){
		$productNo = $this->input->post('productNo');
		$change = $this->input->post('quantity');

		$_SESSION['cart'][$productNo]['qty'] = $change;
	}
	public function destroySession() {
		session_destroy();
		echo "<script>window.location.replace('".base_url()."home');</script>";

	}
}

/* End of file shoppingcart.php */
/* Location: ./application/controllers/shoppingcart.php */