<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class: MY_Controller
 *
 * @see CI_Controller
 */
class MY_Controller extends CI_Controller {

	/**
	 * __construct()
	 *
	 */
	public function __construct() {
		parent::__construct();
	}

	public function render($view = '', $data = array()) {
		$this->load->view("common/head");
		$this->load->view($view, $data);
		$this->load->view("common/foot");
	}
}
