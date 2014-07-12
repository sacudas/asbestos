<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class: Main
 *
 * @see MY_Controller
 */
class Main extends MY_Controller {

	/**
	 * __construct()
	 *
	 */
	public function __construct() {
		parent::__construct();

	}

	/**
	 * index()
	 */
	public function index() {

		$this->render('main/index');
	}


	/**
	 * index()
	 */
	public function test() {

		$this->load->view('main/test');
	}

	/**
	 * sign_in()
	 */
	public function sign_in() {
		$user = $this->user_model->login($this->input->post('email'), $this->input->post('password'));

		if (isset($user->id) && $user->id > 0) {
			$this->session->set_userdata('user_id', $user->id);
		}

		redirect();
	}

	/**
	 * sign_out()
	 */
	public function sign_out() {
		$this->session->sess_destroy();

		redirect();
	}
}
