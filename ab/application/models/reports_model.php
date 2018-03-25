<?php

    class Reports_model extends CI_Model{

        function __contruct(){
            parent::__construct;
        }

        function get_guests(){
            $this->load->database();
            $this->db->select('participants.*');
            $query = $this->db->get('participants');
            return $query->num_rows();
        }

        function get_users(){
            $this->load->database();
            $this->db->select('users.*');
            $query = $this->db->get('users');
            return $query->num_rows();
        }

        function get_hotels(){
            $this->load->database();
            $this->db->select('hotels.*');
            $query = $this->db->get('hotels');
            return $query->result_array();
        }

        function get_recommend_report($recommended, $from = NULL, $to = NULL, $nationality = NULL, $hotel_id = NULL) {
            $this->load->database();
            $this->db->select('participants.*, hotels.name AS hotel_name, language.language AS lang_name');
            $this->db->join('hotels','participants.hotel_id = hotels.id');
            $this->db->join('language','participants.lang = language.id');
            $this->db->where_in('participants.recommend', $recommended);
            if ($hotel_id) {
              $this->db->where('participants.hotel_id', $hotel_id);
            }
            if ($nationality) {
              $this->db->like('participants.nationality', $nationality);
            }
            if ($from) {
                $this->db->where('participants.timestamp >=', $from);
            }
            if ($to) {
                $this->db->where('participants.timestamp <=', $to);
            }
            $this->db->where('participants.stage', 2);
            $this->db->order_by('participants.timestamp', 'ASC');
            $query = $this->db->get('participants');
            return $query->result_array();
        }

    }

?>