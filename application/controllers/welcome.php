<?php

class Welcome extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->data['is_admin'] = $this->ion_auth->is_admin();
		$this->load->database();
		$this->load->helper('url');
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
	}
	
	function index() {
		//die(print_r($this->data['user']));
		$this->data['title'] = "Admin Panel";
		$this->load->model('reports_model');
        $this->data['total_guest'] = $this->reports_model->get_guests();
        $this->data['total_user'] = $this->reports_model->get_users();
		$this->render("admin");
	}

}
