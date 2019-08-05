<?php
class Pages extends CI_Controller{
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
            $this->load->view('pages/pages', $data);
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
            $info['pageTitle'] = 'CMS Pages';
            
            // Templates
            $this->load->view('common/header', $info);
            $this->load->view('common/sidebar', $info);
            $this->load->view('pages/addpage');
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
    
    public function view(){
        $pageId = $this->uri->segment(3);
        var_dump($pageId);
    }
    
    /**
     * This action displays page edit form with values pre-filled
     */
    public function editpage(){
        // Variables Initializations
        $pageId = $this->uri->segment(3);

        // Declarations
        $info = array();
        $info['menuItem'] = 'pages';
        $info['pageTitle'] = 'CMS Edit Page';

        // Fetch Page Data
        $info['pageDetails'] = $this->pages_model->getPageDetails($pageId);

        // Templates
        $this->load->view('common/header', $info);
        $this->load->view('common/sidebar', $info);
        $this->load->view('pages/editpage', $info);
        $this->load->view('common/footer');
    }
    
    /**
     * This action updates page in database
     */
    public function update(){
        try{
            // Declarations
            $update = array();

            $pageId = $this->input->post('page_id');
            $update['page_title'] = $this->input->post('page_title');
            $update['meta_tags'] = base64_encode($this->input->post('meta_tags'));
            $update['meta_keywords'] = base64_encode($this->input->post('meta_keywords'));
            $update['meta_description'] = base64_encode($this->input->post('meta_description'));
            $update['page_content'] = base64_encode($this->input->post('content'));
            $update['page_slug'] = $this->input->post('page_slug');
            $update['updated_at'] = date('Y-m-d h:i:s');

            // Page Insertion into DB
            $response = $this->pages_model->updatePage($update, $pageId);
            if($response){
                $this->session->set_flashdata('pagesuccess', 'Page Updated Successfully.');
                redirect('admin/pages');
            }else{
                $this->session->set_flashdata('pageerror', 'Error while updating Page.');
            }
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }

    /**
     * This action deletes page from database
     */
    public function deletepage(){
        $pageId = $this->uri->segment(3);

        $response = $this->pages_model->deletePage($pageId);
        if($response){
            $this->session->set_flashdata('pagesuccess', 'Page Deleted Successfully.');
            redirect('admin/pages');
        }else{
            $this->session->set_flashdata('pageerror', 'Error while deleting Page.');
        }
    }
}