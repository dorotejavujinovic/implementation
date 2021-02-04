<?php
	class Event_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}
		public function get_events($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('events.event_id', 'DESC');
				
				$this->db->join('members', 'members.user_id = events.user_id');

				$query = $this->db->get('events');
				return $query->result_array();
			}
			$query = $this->db->get_where('events', array('slug' => $slug));
			return $query->row_array();
		}
		public function create_event(){
			$slug = url_title($this->input->post('title'));
			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'event_description' => $this->input->post('event_description'),
				'event_place' => $this->input->post('event_place'),
				'event_date' => $this->input->post('event_date'),
				'user_id' => $this->session->userdata('userid')
							);
			return $this->db->insert('events', $data);
		}

		public function delete_event($event_id){
			$this->db->where('event_id', $event_id);
			$this->db->delete('events');
			return true;
		}
		public function update_event(){
		$slug = url_title($this->input->post('title'));
		$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'event_place' => $this->input->post('event_place'),
				'event_date' => $this->input->post('event_date'),
				'event_description' => $this->input->post('event_description')
			);
		$this->db->where('event_id', $this->input->event('event_id'));	
		return $this->db->update('events', $data);
		}
	}