<?php

	class Admin_model extends CI_Model{

  		function __contruct(){
			parent::__construct;
		}

		function get_users(){
        	$this->load->database();
	    	$this->db->select('users.*');
			$query = $this->db->get('users');
			return $query->result_array();
    	}

		function get_user($id){
	        $this->load->database();
	    	$this->db->select('users.*');
	    	$this->db->where('users.id', $id);
			$query = $this->db->get('users');
			return $query->row_array();
	    }

		function update_user($data, $id) {
			$this->load->database();
			$this->db->where('users.id', $id);		
			$this->db->update('users', $data);
			return ($this->db->affected_rows() == 1)? $this->db->insert_id() : FALSE;
		}

		function delete_user($id){
	        $this->load->database();
	    	$this->db->where('users.id', $id);
			$this->db->delete('users', $data);
			$query = $this->db->get('users');
			return $query->row_array();
	    }

	}

?>