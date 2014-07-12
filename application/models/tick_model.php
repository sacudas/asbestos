<?php

/**
 * Class: Tick_Model
 *
 * @see CI_Model
 */
class Tick_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function create($data = array()) {
		if (!is_object($data) || !isset($data->high)) {
			return false;
		}

		$this->db->query("
			INSERT
				ticks
			SET
				high		= {$this->db->escape($data->high)},
				low			= {$this->db->escape($data->low)},
				avg			= {$this->db->escape($data->avg)},
				vol			= {$this->db->escape($data->vol)},
				vol_cur		= {$this->db->escape($data->vol_cur)},
				last		= {$this->db->escape($data->last)},
				buy			= {$this->db->escape($data->buy)},
				sell		= {$this->db->escape($data->sell)},
				updated		= {$this->db->escape($data->updated)},
				api_time	= {$this->db->escape($data->server_time)}
		");

		if ($this->db->insert_id() < 0) {
			return false;
		}

		return true;
	}

	/**
	 * stats()
	 *
	 * @param int $from
	 * @param int $to
	 */
	public function stats($from = 0, $to = 0) {
		$result = new stdClass();

		$query = $this->db->query("
			SELECT
				MIN(low)	AS Lowest_Low,
				MIN(buy)	AS Lowest_Buy,
				MAX(buy)	AS Highest_Buy,
				MAX(high)	AS Highest_High
			FROM
				ticks
			WHERE
				updated >= {$this->db->escape($from)}
			AND
				updated <= {$this->db->escape($to)}
		");
		
		if ($query && $query->num_rows()) {
			$result = $query->row();
		}

		return $result;
	}

	/**
	 * read_list()
	 *
	 * @param int $offset
	 * @param int $limit
	 */
	public function read_list($offset = 0, $limit = 10) {
		$result = array();

		$query = $this->db->query("
			SELECT
				*
			FROM
				ticks
			ORDER BY
				id DESC
			LIMIT
				{$this->db->escape($offset)}, {$this->db->escape($limit)}
		");

		if ($query && $query->num_rows()) {
			$result = $query->result();
		}

		return $result;
	}
}

