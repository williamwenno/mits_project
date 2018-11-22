<?php
/**
* 
*/
class C_user extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->view('user/home_page');
	}

	function detail() {
		$this->load->view('user/detail');
	}
}