<?php

class Student_model extends CI_Model
{
	public function getAllStud()
	{
		$query = $this->db->get('student');
		return $query->result_array();
	}

	public function addStudent()
	{
		$data = array(
			'nama' => $this->input->post('nama', true),
			'ic' => $this->input->post('ic', true),
			'alamat' => $this->input->post('alamat', true),
			'umur' => $this->input->post('umur', true)
		);

		$this->db->insert('student', $data);
	}

	public function updateStudent()
	{
		$data = array(
			'nama' => $this->input->post('nama', true),
			'ic' => $this->input->post('ic', true),
			'alamat' => $this->input->post('alamat', true),
			'umur' => $this->input->post('umur', true)
		);

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('student', $data);
	}

	public function deleteStudent($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('student');
	}

	public function getAllStudById($id)
	{
		return $this->db->get_where('student', ['id' => $id])->row_array();
	}

	public function searchStudent()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('ic', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('umur', $keyword);
		return $this->db->get('student')->result_array();
	}
}
