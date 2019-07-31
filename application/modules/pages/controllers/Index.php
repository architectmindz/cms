<?php
class Index extends CI_Controller{
    /**
     * Class Constructor
     */
    function __construct(){
        parent::__construct();
        
        if (! $this->session->userdata('loggedin')) {
            redirect('admin/authorize/logout');
        }
        
        $this->load->model('pages_model');
    }
    
    /**
     * This action displays all pages
     */
    public function index(){
        try{
            // Declarations
            $info = array();
            $info['menuItem'] = 'pages';
            $info['pageTitle'] = 'CMS Index';
            
            // Fetch list of available pages
            $data['pages'] = $this->pages_model->getAllPages();
            
            // Templates
            $this->load->view('common/header', $info);
            $this->load->view('common/sidebar', $info);
            $this->load->view('pages', $data);
            $this->load->view('common/footer');
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }
    
    /**
     * This action displays page add form
     */
    public function add(){
        try{
            // Declarations
            $info = array();
            $info['menuItem'] = 'pages';
            $info['pageTitle'] = 'CMS Index';
            
            // Templates
            $this->load->view('common/header', $info);
            $this->load->view('common/sidebar', $info);
            $this->load->view('addpage');
            $this->load->view('common/footer');
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }
    
    /**
     * This action inserts page into database
     */
    public function create(){
        try{
            // Declarations
            $insert = array();
            $insert['page_title'] = $this->input->post('page_title');
            $insert['meta_tags'] = base64_encode($this->input->post('meta_tags'));
            $insert['meta_keywords'] = base64_encode($this->input->post('meta_keywords'));
            $insert['meta_description'] = base64_encode($this->input->post('meta_description'));
            $insert['page_content'] = base64_encode($this->input->post('content'));
            $insert['page_slug'] = strtolower(str_replace(" ", "-", $insert['page_title']));
            $insert['created_at'] = date('Y-m-d h:i:s');
            $insert['updated_at'] = date('Y-m-d h:i:s');
            
            // Page Insertion into DB
            $response = $this->pages_model->insertPage($insert);
            if($response){
                $this->session->set_flashdata('pagesuccess', 'Page Created Successfully.');
                redirect('pages/index');
            }else{
                $this->session->set_flashdata('pageerror', 'Error while creating Page.');
            }
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }
}