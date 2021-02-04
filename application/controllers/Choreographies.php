<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Choreographies extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        // Load member model
        $this->load->model('choreography');
        
        // Load form helper and library
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        // Load pagination library
        $this->load->library('pagination');
        
        // Per page limit
        $this->perPage = 5;
    }
    
    public function index(){
        $data = array();
        
        // Get messages from the session
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        
        // If search request submitted
        if($this->input->post('submitSearch')){
            $inputKeywords = $this->input->post('searchKeyword');
            $searchKeyword = strip_tags($inputKeywords);
            if(!empty($searchKeyword)){
                $this->session->set_userdata('searchKeyword',$searchKeyword);
            }else{
                $this->session->unset_userdata('searchKeyword');
            }
        }elseif($this->input->post('submitSearchReset')){
            $this->session->unset_userdata('searchKeyword');
        }
        $data['searchKeyword'] = $this->session->userdata('searchKeyword');
        
        // Get rows count
        $conditions['searchKeyword'] = $data['searchKeyword'];
        $conditions['returnType']    = 'count';
        $rowsCount = $this->member->getRows($conditions);
        
        // Pagination config
        $config['base_url']    = base_url().'choreographies/index/';
        $config['uri_segment'] = 3;
        $config['total_rows']  = $rowsCount;
        $config['per_page']    = $this->perPage;
        
        // Initialize pagination library
        $this->pagination->initialize($config);
        
        // Define offset
        $page = $this->uri->segment(3);
        $offset = !$page?0:$page;
        
        // Get rows
        $conditions['returnType'] = '';
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        $data['Choreography'] = $this->choreography->getRows($conditions);
        $data['title'] = 'Choreographies';
        
        // Load the list page view
        $this->load->view('templates/header', $data);
        $this->load->view('choreographies/index', $data);
        $this->load->view('templates/footer');
    }
    public function add(){
        $data = array();
        $memData = array();
        
        // If add request is submitted
        if($this->input->post('memSubmit')){
            // Form field validation rules
            $this->form_validation->set_rules('choreography_title', 'choreography_title', 'required');
            $this->form_validation->set_rules('dance_type', 'dance_type', 'required');
            $this->form_validation->set_rules('music', 'music', 'required');
            
            // Prepare member data
            $memData = array(
                'choreography_title'=> $this->input->post('choreography_title'),
                'dance_type' => $this->input->post('dance_type'),
                'music'     => $this->input->post('music')
            );
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
                // Insert member data
                $insert = $this->choreography->insert($memData);

                if($insert){
                    $this->session->set_userdata('success_msg', 'Choreography has been added successfully.');
                    redirect('choreographies');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        
        $data['Choreography'] = $memData;
        $data['title'] = 'Add Choreography';
        
        // Load the add page view
        $this->load->view('templates/header', $data);
        $this->load->view('choreographies/add', $data);
        $this->load->view('templates/footer');
    }

 }
