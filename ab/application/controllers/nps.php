<?php

class Nps extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
        $this->data['is_admin'] = $this->ion_auth->is_admin();
		$this->load->database();
		$this->load->helper('url');
	}
	

	function hello($lang) {
		$this->load->model('nps_model');
        $this->load->model('reports_model');
        $this->data['total_guest'] = $this->reports_model->get_guests();
        $this->data['total_user'] = $this->reports_model->get_users();
		//$this->lang->load("ion_auth", '"'.$lang.'"');
        //$this->session->set_userdata('language', '"'.$lang.'"');
    	$this->load->helper('lang_helper');
        $this->data['translation'] = $this->nps_model->translate($lang);
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('recommend','Recommendation','trim|required');
            if ($this->form_validation->run() == true){
            	$form = array(
                    'lang' => $lang,
                    'hotel_id' => 1,
                    'ip' => $this->input->ip_address(),
                    'recommend' => $this->input->post('recommend'),
                    'stage' => 1               
                );
            	$form_id = $this->nps_model->create_form($form);
                if (!$form_id) {
                    die("ERROR");
                }
                redirect('/nps/room/'.$form_id);
            }
        }
		$this->data['title'] = "Hello";
		$this->render();
	}

	function hello_edit($id) {
		$this->load->model('nps_model');
        $this->load->model('reports_model');
        $this->data['total_guest'] = $this->reports_model->get_guests();
        $this->data['total_user'] = $this->reports_model->get_users();
		//$this->lang->load("ion_auth", '"'.$lang.'"');
        //$this->session->set_userdata('language', '"'.$lang.'"');
    	$this->load->helper('lang_helper');
        $this->data['nps'] = $this->nps_model->view_form($id);
        $this->data['translation'] = $this->nps_model->translate($this->data['nps']['lang']);
    	if ($this->input->post('submit')) {
    		$this->nps_model->delete_form($id);
    		redirect('/welcome/');
    	}
    	if ($this->input->post('submit1')) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('recommend','Recommendation','trim|required');
            if ($this->form_validation->run() == true){
                $form = array(
                    'lang' => $lang,
                    'hotel_id' => 1,
                    'ip' => $this->input->ip_address(),
                    'recommend' => $this->input->post('recommend'),
                    'stage' => 1               
                );
                $this->nps_model->update_form($form, $id);
        		redirect('/nps/room/'.$id);
    	   }
        }
		$this->data['title'] = "Hello";
		$this->data['id'] = $id;
		$this->render();
	}

    Public function insert_signature(){
    $img = $_POST['image'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = './assets/signature/' . uniqid() . '.png';
    $success = file_put_contents($file, $data);
    $image=str_replace('./','',$file);
    // echo json_encode(['result' => $success ? $file : 'Unable to save the file.']);
    return $image ;
    }

	function room($id) {
		$this->load->model('nps_model');
        $this->load->model('reports_model');
        $this->data['total_guest'] = $this->reports_model->get_guests();
        $this->data['total_user'] = $this->reports_model->get_users();
		//$this->lang->load("ion_auth", '"'.$langg.'"');
        //$this->session->set_userdata('language', '"'.$langg.'"');
    	$this->load->helper('lang_helper');
        $this->data['nps'] = $this->nps_model->view_form($id);
        //die(print_r($this->data['nps']['lang']));
        $this->data['translation'] = $this->nps_model->translate($this->data['nps']['lang']);
    	if ($this->input->post('submit')) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
            if ($this->form_validation->run() == true){
        		$form = array(
                    'room' => $this->input->post('room'),
                    'email' => $this->input->post('email'),
                    'nationality' => $this->input->post('nationality'),
                    'telephone' => $this->input->post('telephone'),
                    'comment' => $this->input->post('comment'),
                    'signature' => $this->insert_signature(),
                    'ip' => $this->input->ip_address(),
                    'stage' => 2               
                );
        		$this->nps_model->update_form($form, $id);
                //$im = imagegrabscreen();
                //$browser = new COM("InternetExplorer.Application");
                //$handle = $browser->HWND;
                //$browser->Visible = true;
                //$im = imagegrabwindow($handle);
                //$browser->Quit();
                //imagepng($im, "assets/uploads/sign/".$id.".png");
                //imagedestroy($im);
        		redirect('/nps/thanks/'.$id);
            }else{ 
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            }
    	}
		$this->data['title'] = "Information";
		$this->data['id'] = $id;
		$this->render();
	}

	/*function signature($id) {
		$this->load->model('nps_model');
		//$this->lang->load("ion_auth", '"'.$langg.'"');
        //$this->session->set_userdata('language', '"'.$langg.'"');
        $this->load->helper('lang_helper');
        $this->load->helper('perfex_helper');
        $this->load->helper('perfex_misc_helper');
        //die(print_r());
    	if ($this->input->post('submit')) {
    		$form = array(
                'signature' => $this->input->post('signature'),
                'ip' => $this->input->ip_address(),
                'stage' => 6
            );
    		$this->nps_model->update_form($form, $id);
            //$this->pdf_zip   = ticket_pdf($id);
            //$dir = "/assets/uploads/sign";
            //if (is_dir($dir)) {
            //    delete_dir($dir);
            //}
            //mkdir("/assets/uploads/sign", 0777);
            //$_temp_file_name = slug_it($id);
            //$file_name       = $dir . '/' . strtoupper($_temp_file_name);
            //$this->pdf_zip->Output($file_name . '.png', 'I');
    		redirect('/nps/thanks/');
    	}
		$this->data['title'] = "Signature";
		$this->data['id'] = $id;
		$this->render();
	}*/

	function thanks($id) {
		$this->load->model('nps_model');
        $this->load->model('reports_model');
        $this->data['total_guest'] = $this->reports_model->get_guests();
        $this->data['total_user'] = $this->reports_model->get_users();
		//$this->lang->load("ion_auth", '"'.$langg.'"');
        //$this->session->set_userdata('language', '"'.$langg.'"');
        $this->data['nps'] = $this->nps_model->view_form($id);
        $this->data['translation'] = $this->nps_model->translate($this->data['nps']['lang']);
    	$this->load->helper('lang_helper');
		$this->data['title'] = "Thank You";
		$this->render();
	}

}
