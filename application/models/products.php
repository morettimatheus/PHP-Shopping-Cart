<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//including the product model
include_once 'productmodel.php';


//define the array outside of the Model to grant global access to both functions
//$products = array();

class Products extends CI_Model {

	// function createProducts() {
	// 	global $products;
	// 	$url = base_url();
	// 	// the following for creates 10 sample objects. Their names and IDs(productNo) are created within the for
	// 	for ($i=0; $i < 10; $i++) {
	// 		$productNo = count($products) + 1;
	// 		$p = new Productmodel($productNo, "Product" . $productNo, 9.90, "This product is an example of product.",	$url . "public/images/products/". $productNo .".png", 0);
	// 		$products[$productNo] = $p;
	// 	}
	// }

	function getProducts() {
		$products = $this->db->query("SELECT * FROM Products");
		return $products;
}
}?>
