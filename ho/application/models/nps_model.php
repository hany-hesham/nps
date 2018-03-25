<?php

	class Nps_model extends CI_Model{

  		function __contruct(){
			parent::__construct;
		}

		function create_form($data) {
			$this->load->database();
			$this->db->insert('participants', $data);
			return ($this->db->affected_rows() == 1)? $this->db->insert_id() : FALSE;
		}

		function update_form($data, $id) {
			$this->load->database();
			$this->db->where('participants.id', $id);		
			$this->db->update('participants', $data);
			return ($this->db->affected_rows() == 1)? $this->db->insert_id() : FALSE;
		}

		function delete_form($id){
        	$this->load->database();
			$this->db->where('participants.id', $id);		
			$this->db->delete('participants');
			return ($this->db->affected_rows() == 1)? $this->db->insert_id() : FALSE;
    	}

    	function view_form($id){
        	$this->load->database();
	    	$this->db->select('participants.*');
			$this->db->where('participants.id', $id);		
			$query = $this->db->get('participants');
			return $query->row_array();
    	}

    	function translate($lang){
        	$this->load->database();
	    	$this->db->select('language.*');
			$this->db->where('language.id', $lang);		
			$query = $this->db->get('language');
			return $query->row_array();
    	}

	}

?>