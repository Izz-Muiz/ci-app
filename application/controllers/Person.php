<?php

class Person extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Person';
		$this->load->model('Person_model');

		//Pagination
		$this->load->library('pagination');

		// keyword
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}


		$this->db->like('name', $data['keyword']);
		$this->db->from('person');
		$config['total_rows'] = $this->db->count_all_results();

		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 20;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['person'] = $this->Person_model->getPerson($config['per_page'], $data['start'], $data['keyword']);

		$this->load->view('templates/header', $data);
		$this->load->view('person/index', $data);
		$this->load->view('templates/footer');
	}
}
