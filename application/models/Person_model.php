<?php

class Person_model extends CI_Model
{
	public function getAllPerson()
	{
		$query = $this->db->get('person');
		return $query->result_array();
	}

	public function getPerson($limit, $start, $keyword = null)
	{
		if ($keyword) {
			$this->db->like('name', $keyword);
			// 		$this->db->or_like('email', $keyword);
		}

		return $this->db->get('person', $limit, $start)->result_array();
	}

	public function countPerson()
	{
		return $this->db->get('person')->num_rows();
	}
}
