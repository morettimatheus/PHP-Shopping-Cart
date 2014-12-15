<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if(!isset($_SESSION)){
	session_start();
}
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}
class Shoppingcart extends CI_Model {

public function addToCart(){

	$product = $this->input->post('productNo');
	$_SESSION['cart'][$product]["id"] = $product;
	$_SESSION['cart'][$product]["qty"] = 1;
	
	echo $_SESSION['cart'][$product]["qty"];
	
}

}
/* End of file shoppingcart.php */
/* Location: ./application/models/shoppingcart.php */
?>