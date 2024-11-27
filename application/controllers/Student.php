<?php

class Student extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Student_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Student';
		$data['students'] = $this->Student_model->getAllStud();
		if ($this->input->post('keyword')) {
			$data['students'] = $this->Student_model->searchStudent();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('student/index', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['title'] = 'Add Student';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('ic', 'IC', 'required|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('umur', 'Umur', 'required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('student/add', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Student_model->addStudent();
			$this->session->set_flashdata('flash', 'Added');
			redirect('student');
		}
	}

	public function update($id)
	{
		$data['student'] = $this->Student_model->getAllStudById($id);
		$data['title'] = 'Update Student';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('ic', 'IC', 'required|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('umur', 'Umur', 'required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('student/update', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Student_model->updateStudent();
			$this->session->set_flashdata('flash', 'Updated');
			redirect('student');
		}
	}

	public function delete($id)
	{
		$this->Student_model->deleteStudent($id);
		$this->session->set_flashdata('flash', 'Deleted');
		redirect('student');
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Student';
		$data['student'] = $this->Student_model->getAllStudById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('student/detail', $data);
		$this->load->view('templates/footer');
	}
}
