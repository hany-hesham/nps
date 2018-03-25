<?php

	class LanguageSwitcher extends MY_Controller {
    
	    function __construct() {
			parent::__construct();
			$this->load->library('ion_auth');
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->database();
			$this->load->helper('url');
		}
	 
	    function switchLang($language = "") {
	        
	        $language = ($language != "") ? $language : "english";
	        $this->session->set_userdata('language', $language);
	        $this->session->set_userdata('site_lang', $language);
	       	$this->config->set_item('language', $language);
	        redirect($_SERVER['HTTP_REFERER']);
	        
	    }
	}

?>