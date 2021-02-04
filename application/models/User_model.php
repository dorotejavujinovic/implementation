<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			$data = array(
				'name' => $this->input->post('name'),
				'last_name' => $this->input->post('last_name'),
				'contact' => $this->input->post('contact'),
				'password' => $enc_password
			);
			return $this->db->insert('members', $data);
		}
		public function login($name, $last_name, $password){
			$this->db->where('name', $name);
			$this->db->where('last_name', $last_name);
			$this->db->where('password', $password);
			$result = $this->db->get('members');
			if($result->num_rows() == 1){
				return $result->row(0)->user_id;
			} else{
				return false;
			}

		}

		public function check_email_exists($contact){
			$query = $this->db->get_where('members', array('contact' => $contact));
			if(empty($query->row_array())){
				return true;
			} else{
				return false;
			}
		}
	}