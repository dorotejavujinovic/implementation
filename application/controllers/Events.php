<?php
	
	class Events extends CI_Controller{
		public function index() {
			
			$data['title'] = 'Events';
			$data['events'] = $this->event_model->get_events();
			$this->load->view('templates/header');
			$this->load->view('events/index', $data);
			$this->load->view('templates/footer');

		}
		public function view($slug = NULL){
			$data['event'] = $this ->event_model->get_events($slug);
			$event_id = $data['event']['event_id'];
			if(empty($data['event'])){
				show_404();
			}
			$data['title'] = $data['event']['title'];
			$this->load->view('templates/header');
			$this->load->view('events/view', $data);
			$this->load->view('templates/footer');
		}
		public function create(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title'] = 'Create Event';
			$this->form_validation->set_rules('title', 'Event Name', 'required');
			$this->form_validation->set_rules('event_description', 'Event Description', 'required');
			$this->form_validation->set_rules('event_place', 'Event Place', 'required');
			$this->form_validation->set_rules('event_date', 'Event Date', 'required');


				if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('events/create', $data);
				$this->load->view('templates/footer');
			
				} else{
				
				$this->event_model->create_event();

				$this->session->set_flashdata('event_created', 'Your event has been created');
				redirect('events');
				
			}
		}
		
		public function delete($event_id){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->event_model->delete_event($event_id);
			$this->session->set_flashdata('event_deleted', 'Your event has been deleted');
			redirect('events');
		}

		public function edit($slug){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['event'] = $this->event_model->get_events($slug);
			if($this->session->userdata('userid') != $this->event_model->get_events($slug)['user_id']){
				redirect('events');

			}

			if(empty($data['event'])){
				show_404();
			}
			$data['title'] = 'Edit Event';
			$this->load->view('templates/header');
			$this->load->view('events/edit', $data);
			$this->load->view('templates/footer');

		}

		public function update(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->event_model->update_event();
			$this->session->set_flashdata('event_updated', 'Your event has been updated');
			redirect('events');
		}	
	}