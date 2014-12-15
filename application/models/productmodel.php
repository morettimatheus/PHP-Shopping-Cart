<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productmodel extends CI_Model {
	var $productNo;
	var $name;
	var $price;
	var $description;
	var $imagepath;
	var $qtyOnCart = 0;

    //GETTERS AND SETTERS
    function get_name() {
		return $name;
    }
    function set_name($name) {
    	$this->name = $name;
    }
    function get_price() {
    	return $price;
    }
    function set_price($price) {
    	$this->price = $price;
    }
    function get_description() {
    	return $description;
    }
    function set_description($description) {
    	$this->description = $description;
    }
    function get_imagepath() {
    	return $imagepath;
    }
    function set_imagepath($imagepath) {
    	$this->imagepath = $imagepath;
    }
    function get_productNo() {
    	return $productNo;
    }
    function get_qtyOnCart() {
		return $qtyOnCart;
    }
    function set_qtyOnCart($qtyOnCart) {
    	$this->qtyOnCart = $qtyOnCart;
    }

    //constructor to create object with all parameters
    function __construct($productNo, $name, $price, $description, $imagepath, $qtyOnCart) {
    	parent::__construct();
    	$this->productNo = $productNo;
    	$this->name = $name;
    	$this->price = $price;
    	$this->description = $description;
    	$this->imagepath = $imagepath;
    	$this->qtyOnCart = $qtyOnCart;

    }
}