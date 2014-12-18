<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListAllProducts extends CI_Controller {

	public function index() {
		$query = $this->db->query('SELECT * FROM Products');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
      			echo $row->name;
      			echo $row->price;
      			echo $row->description;
   			}
		}
	}
}

/* End of file listAllProducts.php */
/* Location: ./application/controllers/listAllProducts.php */?>