<?php

class Home extends CI_Controller
{
	public function index($name = '')
	{
		$data['name'] = $name;
		$data['title'] = 'Home';
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}
