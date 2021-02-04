<?php 
	class Users extends CI_Controller{
		public function register(){
			$data['title'] = 'Create an Account';
			$this->form_validation->set_rules('name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', ' Last Name', 'required');
			$this->form_validation->set_rules('contact', 'Email Address', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');

			} else{
				$enc_password = md5($this->input->post('password'));
				$this->user_model->register($enc_password);
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
				redirect('posts');
			}
		}

		public function login(){
			$data['title'] = 'Sign in';
			$this->form_validation->set_rules('name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', ' Last Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');

			} else{
				$name = $this->input->post('name');
				$last_name = $this->input->post('last_name');
				$password = md5($this->input->post('password'));
				$userid = $this->user_model->login($name, $last_name, $password);
				if($userid){
					$user_data = array(
						'userid' => $userid,
						'name' => $name,
						'last_name' => $last_name,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					redirect('posts');

				} else{
					$this->session->set_flashdata('login_failed', 'Login is invalid');
					redirect('users/login');

				}

				
			}
		}

		public function logout(){
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('userid');
			$this->session->unset_userdata('name');
			$this->session->unset_userdata('last_name');
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');
			redirect('users/login');

		}

		public function check_email_exists($contact){
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose adifferent one');
			if($this->user_model->check_email_exists($contact)){
				return true;
			} else{
				return false;
			}
		}
	}