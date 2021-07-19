<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/home_header');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$this->load->view('templates/home_header');
		$this->load->view('home/about');
		$this->load->view('templates/footer');
	}

	public function blog()
	{
		$this->load->view('templates/home_header');
		$this->load->view('home/blog');
		$this->load->view('templates/footer');
	}

	public function team()
	{
		$this->load->view('templates/home_header');
		$this->load->view('home/team');
		$this->load->view('templates/footer');
	}
}