<?php

class Users extends MY_Controller {

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
		$this->load->model('admin_model');
		$this->load->model('reports_model');
		$this->data['total_guest'] = $this->reports_model->get_guests();
		$this->data['total_user'] = $this->reports_model->get_users();
		//die(print_r($this->data['user']));
		$this->data['users'] = $this->admin_model->get_users();
		$this->data['title'] = "Users";
		$this->render("admin");
	}

	function edit($id) {
		$this->load->model('admin_model');
		$this->load->model('reports_model');
		$this->data['total_guest'] = $this->reports_model->get_guests();
		$this->data['total_user'] = $this->reports_model->get_users();
		$this->data['user'] = $this->admin_model->get_user($id);
		$this->data['title'] = "Edit ".$this->data['user']['username']."'s Profile";
		if ($this->input->post('submit')) {
          	$this->load->library('form_validation');
          	$this->load->library('email');
          	$this->form_validation->set_rules('username','Username','trim|required');
          	$this->form_validation->set_rules('email','Email','trim|required');
          	$this->form_validation->set_rules('first_name','First Name','trim|required');
          	$this->form_validation->set_rules('last_name','Last Name','trim|required');
          	if ($this->form_validation->run() == TRUE) { 
	            $form_data = array(
              		'username' => $this->input->post('username'),
              		'email' => $this->input->post('email'),
              		'first_name' => $this->input->post('first_name'),
              		'last_name' => $this->input->post('last_name'),
              		'phone' => $this->input->post('phone'),
              		'company' => $this->input->post('company'),
              		'active' => $this->input->post('active')
   	            );
              	$file_name = $this->do_upload("ppic");
              	$form_data['ppic'] = $file_name; 
	            //die(print_r($form_data));
	            $this->admin_model->update_user($form_data, $id);
          	}
    		redirect('/users/view/'.$id);
        }
		
		$this->render("admin");
	}

	function view($id) {
		$this->load->model('admin_model');
		$this->load->model('reports_model');
		$this->data['total_guest'] = $this->reports_model->get_guests();
		$this->data['total_user'] = $this->reports_model->get_users();
		$this->data['user'] = $this->admin_model->get_user($id);
		$this->data['title'] = $this->data['user']['username']."'s Profile";	
		$this->render("admin");
	}

	function delete($id) {
		$this->load->model('admin_model');
		$this->data['user'] = $this->admin_model->delete_user($id);
		$this->data['title'] = "Delete ".$this->data['user']['username']."'s Profile";
    	redirect('/users');
	}

	private function do_upload($field) {
      	$config['upload_path'] = 'assets/uploads/files/';
      	$config['allowed_types'] = '*';
      	$this->load->library('upload', $config);
      	if ( ! $this->upload->do_upload($field)) {
        	$this->data['error'] = array('error' => $this->upload->display_errors());
        	return FALSE;
      	} else {
        	$file = $this->upload->data();
        	return $file['file_name'];
      	}
    }

}
