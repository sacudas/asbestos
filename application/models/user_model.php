<?php

/**
 * Class: User_Model
 *
 * @see CI_Model
 */
class User_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function login($email = '', $password = '') {
		$result = array();

		$email = trim($email);
		$password = sha1($password);

		$query = $this->db->query("
			SELECT
				*
			FROM
				users
			WHERE
				email = {$this->db->escape($email)}
			AND
				password = {$this->db->escape($password)}
		");

		if ($query && $query->num_rows()) {
			$result = $query->row();
		}

		return $result;
	}

	public function read($id = 0) {
		$result = array();

		$query = $this->db->query("
			SELECT
				*
			FROM
				users
			WHERE
				id = {$this->db->escape($id)}
		");

		if ($query && $query->num_rows()) {
			$result = $query->row();
		}

		return $result;
	}
}

