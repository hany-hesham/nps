<?php

class Reports extends MY_Controller {

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
		$this->load->model('reports_model');
		$this->data['total_guest'] = $this->reports_model->get_guests();
		$this->data['total_user'] = $this->reports_model->get_users();
		//die(print_r($this->data['user']));
		$this->data['title'] = "Reports";
		$this->render("admin");
	}

	function summary() {
		$this->load->model('reports_model');
		$this->data['total_guest'] = $this->reports_model->get_guests();
		$this->data['total_user'] = $this->reports_model->get_users();
		$this->data['hotels'] = $this->reports_model->get_hotels();
		if ($this->input->post('submit')) {
			$hotel_id = $this->input->post('hotel_id');
			$nationality = $this->input->post('nationality');
			$recommend = $this->input->post('recommend');
			$from_date = $this->input->post('from_date');
			$to_date = $this->input->post('to_date');
			if ($from_date) {
				$from_date .=" 00:00:00";
			}
			if ($to_date) {
				$to_date .= " 23:59:59";
			}
			if ($recommend == 1) {
				$recommended = array(0,1,2,3,4,5,6);
			} else if ($recommend == 2) {
				$recommended = array(7,8);
			} else if ($recommend == 3) {
				$recommended = array(9,10);
			} else {
				$recommended = array(0,1,2,3,4,5,6,7,8,9,10);
			}
			$participants = $this->reports_model->get_recommend_report($recommended, $from_date, $to_date, $nationality, $hotel_id);
			//die(print_r($participants));
			$this->data['total'] = 0;
			foreach ($participants as $key => $participant) {
				$this->data['total']++;
			}
			$this->data['participants'] = $participants;
			$this->data['posting'] = TRUE;
		}
		$this->data['title'] = "Summary Report";
		$this->render("admin");
	}

	function detail() {
		$this->load->model('reports_model');
		$this->data['total_guest'] = $this->reports_model->get_guests();
		$this->data['total_user'] = $this->reports_model->get_users();
		$this->data['hotels'] = $this->reports_model->get_hotels();
		if ($this->input->post('submit')) {
			$hotel_id = $this->input->post('hotel_id');
			$nationality = $this->input->post('nationality');
			$recommend = $this->input->post('recommend');
			$from_date = $this->input->post('from_date');
			$to_date = $this->input->post('to_date');
			if ($from_date) {
				$from_date .=" 00:00:00";
			}
			if ($to_date) {
				$to_date .= " 23:59:59";
			}
			if ($recommend == 1) {
				$recommended = array(0,1,2,3,4,5,6);
			} else if ($recommend == 2) {
				$recommended = array(7,8);
			} else if ($recommend == 3) {
				$recommended = array(9,10);
			} else {
				$recommended = array(0,1,2,3,4,5,6,7,8,9,10);
			}
			$participants = $this->reports_model->get_recommend_report($recommended, $from_date, $to_date, $nationality, $hotel_id);
			//die(print_r($participants));
			$this->data['total'] = 0;
			foreach ($participants as $key => $participant) {
				$this->data['total']++;
			}
			$this->data['participants'] = $participants;
			$this->data['posting'] = TRUE;
		}
		$this->data['title'] = "Detail Report";
		$this->render("admin");
	}

}
