<?php 
Class Home extends CI_Controller{
	public function __construct(){
    parent::__construct();
  }

	public function index(){
		$this->load->view('Navigation');
		$this->load->view('Page_Content');
		$this->load->view('Container');
		$this->load->view('New');
		$this->load->view('Pagination');
		$this->load->view('Footer');
		}

}